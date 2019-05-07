<?php

namespace App\Http\Controllers;

use App\Facades\UserHelper;
use App\Models\CompanySettings;
use App\Models\Settings;
use App\Models\UserSettings;
use Illuminate\Http\Request;

class SettingsController extends CrudController
{
    public function model()
    {
        // Validation for create action
        $this->createValidation = [
            'code' => 'required|unique:settings,code',
            'is_system' => 'boolean',
        ];

        // Validation  for update action
        $this->updateValidation = [
            'code' => 'exists:settings,code',
            'is_system' => 'boolean',
        ];

        $this->metaData = new \App\Models\MetaData\Entities\Settings();

        return 'App\Models\Settings';
    }

    /**
     * Get settings for company if current user is admin
     * @return Response
     */
    public function getCompanySettings()
    {
        //get current user company
        $company = UserHelper::company();
        //current user is admin? (boolean)
        $admin = UserHelper::isAdmin();

        //check if current user is admin
        if (!$admin) {
            return response()->json(['message' => 'Access Denied!'], 403);
        }

        //Get settings for company
        $settings = CompanySettings::
        with('setting')
            ->select('setting_id', 'value')
            ->where('company_id', $company->id)
            ->get()
            ->pluck('value', 'setting.code')
            ->toArray();

        return response()->json($this->filterSettingsOutput($settings));
    }

    /**
     * Show settings list for current company
     * @return Response response
     */
    public function getAuthSettings()
    {

        if (empty($company_id = UserHelper::company()->id))
            return response()->json(['error' => true, 'message' => 'Company not found!']);

        //keys for auth settings
        $keys = ['social_login', 'language', 'insert_user_type'];
        //get settings keys for auth
        $auth_settings_keys = Settings::whereIn('code', $keys)->select('id')->pluck('id');

        //Get settings for company
        $company_settings = CompanySettings::
        with('setting')
            ->whereIn('setting_id', $auth_settings_keys)
            ->select('setting_id', 'value')
            ->where('company_id', $company_id)
            ->get()
            ->pluck('value', 'setting.code')
            ->toArray();


        return response()->json($this->filterSettingsOutput($company_settings));
    }

    /**
     * Get setting value by code for current user
     * @param string $code
     * @return Response response
     */
    public function get($code)
    {

        $user = $this->getUser();


        //Find setting by code
        $setting = Settings::where('code', $code)->first();

        if (!isset($setting->id)) {
            return response()->json(['message' => 'Setting not found!'], 404);
        }

        //Get settings for user
        $user_settings = UserSettings::
        with('setting')
            ->select('setting_id', 'value')
            ->where('setting_id', $setting->id)
            ->where('user_id', $user->id)
            ->get()->pluck('value', 'setting.code')->toArray();

        //Get settings for company
        $company_settings = CompanySettings::
        with('setting')
            ->select('setting_id', 'value')
            ->where('company_id', $user->company_id)
            ->where('setting_id', $setting->id)
            ->get()->pluck('value', 'setting.code')->toArray();


        $result = array_merge($company_settings, $user_settings);

        return response()->json($result);
    }

    /**
     * Set value for setting by code
     * @param Request $request
     * @return Response response
     */
    public function set(Request $request)
    {

        $settings_code = array_keys($request->all());

        //Check if given setting codes exist
        $code_validation = $this->checkCode($settings_code);

        if (count($code_validation)) {
            return response()->json([
                                        'errors' => 'The [' . implode(', ', $code_validation) . '] is not defined settings code',
                                    ], 422);
        }

        //Get current user
        $user = $this->getUser();
        //Get settings
        $settings = Settings::select('id', 'code')->whereIn('code', $settings_code)->get()->pluck('id', 'code');
        $response = [];
        foreach ($request->all() as $key => $item) {
            $response[] = UserSettings::updateOrCreate(['setting_id' => $settings[$key], 'user_id' => $user->id], ['value' => $item]);
        }

        return response()->json($this->filterSettingsOutput($response));
    }

    /**
     * Set value for company settings
     * @param Request $request
     * @return Response response
     */
    public function companySet(Request $request)
    {
        $settings_code = array_keys($request->all());

        //Get current user
        $user = $this->getUser();

        if (!$user->is_admin) {
            return response()->json(['errors' => 'Access Denied'], 403);
        }

        //Check if given setting codes exist
        $code_validation = $this->checkCode($settings_code);

        if (count($code_validation)) {
            return response()->json([
                                        'errors' => 'The [' . implode(', ', $code_validation) . '] is not defined settings code',
                                    ], 422);
        }

        //Get settings
        $settings = Settings::select('id', 'code')->whereIn('code', $settings_code)->get()->pluck('id', 'code');
        $response = [];
        //   dd($request->all());
        //Update existing settings or insert new settings
        foreach ($request->all() as $key => $item) {
            if (is_array($item)) {
                $item = json_encode($item);
            }

            if ($item !== null) {
                $response[] = CompanySettings::updateOrCreate([
                                                                  'setting_id' => $settings[$key],
                                                                  'company_id' => $user->company_id,
                                                              ], ['value' => $item]);
            }
        }

        return response()->json($this->filterSettingsOutput($response));
    }

    /**
     * Get setting by code for company
     * @param string $code
     * @return Response
     */
    public function companyGet($code)
    {

        //Get current user
        $user = $this->getUser();


        //Find setting by code
        $setting = Settings::where('code', $code)->first();
        if (!isset($setting->id)) {
            return response()->json(['message' => 'Setting not found!'], 404);
        }

        //Get settings for company
        $company_settings = CompanySettings::
        with('setting')
            ->select('setting_id', 'value')
            ->where('company_id', $user->company_id)
            ->where('setting_id', $setting->id)
            ->get()->pluck('value', 'setting.code')
            ->toArray();

        return response()->json($this->filterSettingsOutput($company_settings));
    }

    /**
     * Check if inserted codes exists
     * @param array $code
     * @return array undeclared codes
     */
    private function checkCode($code)
    {
        $codes = Settings::select('code')->whereIn('code', $code)->get();
        return array_diff($code, $codes->pluck('code')->toArray());
    }

    /**
     * Filter settings output for json encoded values
     * @param array $settings
     * @return array $settings
     */
    private function filterSettingsOutput($settings)
    {
        return array_map(array($this, 'try_decode'), $settings);
    }

    /**
     * This function is helper function, for checking if currrent value is json then convert it
     * @param type $input
     * @return type
     */
    function try_decode($input)
    {
        $from_json = json_decode($input, true);
        return $from_json ? $from_json : $input;
    }

}
