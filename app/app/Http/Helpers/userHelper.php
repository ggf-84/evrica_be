<?php

namespace App\Http\Helpers;

use App\Models\Admin;
use App\Models\Company;
use App\Models\DomainRecord;
use App\Models\User;
use Illuminate\Support\Facades\Request as RequestFacade;
use Tymon\JWTAuth\Facades\JWTAuth;

class userHelper
{

    /**
     * Get current user
     * @return App\Models\User
     */
    public static function get()
    {
        $userData = self::token();
        if (!$userData) {
            return null;
        }
        return User::where('id', $userData->sub)->first();

    }

    /**
     * Get current user by id
     * @return App\Models\User
     */
    public static function getUserById($id)
    {
        $user = User::where('id', $id)->first();
        return $user;
    }

    /**
     * Get current company
     * @return App\Models\Company
     */
    public static function company()
    {
        $http_host = RequestFacade::getHttpHost();
        $domainRecord = DomainRecord::where('name', '=', $http_host)->first();
        $company = null;
        // dd($http_host);
        if (self::validateEnvException() == false) {
            // env is not exception
            if ($domainRecord) {
                $company = Company::where('id', $domainRecord->company_id)->first();
            }
        } else {
            $auth = self::getHeaderToken('Authorization');
            // env is exception
            if ($auth != "") {
                $company = Company::where('id', self::get()->company_id)->first();
            }

        }

        // dd($company);

        return $company;
    }

    /**
     * Get departments id of current company
     * getDepartmentIds
     * @return array of departments id
     */
    public static function getCompanyDepartmentIds()
    {
        //get current user company
        $company = self::company();

        //get current user departments
        $departments = !empty($company->departments) ? $company->departments : null;
        $departmentsIds = $departments ? array_column($departments->toArray(), 'id') : [];

        return $departmentsIds;
    }

    /**
     * Get departments id of current company
     * @param $userId
     * @return array of departments id
     */
    public static function getUserDepartmentIds($userId = null)
    {
        //get current user company
        if($userId) {
            $user = self::getUserById($userId);
        }else{
            $user = self::get();
        }

        //get current user departments
        $departments = !empty($user->departments) ? $user->departments : null;
        $departmentsIds = $departments ? array_column($departments->toArray(), 'department_id') : [];

        return $departmentsIds;
    }

  /**
   * Check if user is related to company
   * @return App\Models\Company
   */
  public static function checkCompany($userID, $companyID)
  {
    $user = User::where('id', $userID)->where('company_id', $companyID)->first();
    $data = '';
    if (!$user) {
      $data = false;
    } else {
      $data = true;
    }

        return $data;
    }

    /**
     * Validate user company
     * @param $token
     */
    public static function validateEnvToken($token)
    {
        $data = false;
        //get data
        $http_host = RequestFacade::getHttpHost();
        $domainRecord = DomainRecord::where('name', '=', $http_host)->first();

        $tokenPayload = JWTAuth::getPayload($token);

        // check permissions
        $permissionLoginAs = isset($tokenPayload['permission_loginAs']) ? false : ($tokenPayload['permission_loginAs'] == true) ? true : false;
        $loginAs = $tokenPayload['loginAs'];

        // dd($tokenPayload);

        // check login as
        $loginIsSet = (!isset($tokenPayload['loginAs'])) ? false : true;
        $loginAsCompany = ($loginAs != 'company_user') ? true : false;

        // get host and company id
        $httpHost = $tokenPayload['http_host'];
        $companyID = (isset($tokenPayload['company']['id'])) ? $tokenPayload['company']['id'] : null;

        //check if host is ok or domain record company id
        $noHostOrCompany = ($httpHost != $http_host || $domainRecord['company_id'] != $companyID) ? false : true;

        if (self::validateEnvException() == false) {
            if ($loginIsSet == false && $loginAsCompany == true) {
                if ($noHostOrCompany != true) {
                    $data = false;
                } else {
                    $data = true;
                }
            }
        } else {
            $data = true;
        }


        if ($loginAsCompany == false || $tokenPayload['permission_loginAs'] == true) {
            $data = true;
        }

        return $data;

    }

    /**
     * Validate user admin rules
     * @param $token
     */
    public static function validateAdminRules($token)
    {
        // get token payload
        $tokenPayload = JWTAuth::getPayload($token);

        // check permission to login as
        $permissionLoginAs = (isset($tokenPayload['permission_loginAs']) && $tokenPayload['permission_loginAs'] == true) ? true : false;
        $loginIsSet = (!isset($tokenPayload['loginAs'])) ? false : true;

        // if has permission return ok
        if ($permissionLoginAs == true && $loginIsSet == true) {
            return true;
        } else {
            if ($tokenPayload['loginAs'] === "company_user") {
                return true;
            } else {
                return false;
            }
        }

    }

    /**
     * Get admin
     */
    public function admin()
    {
        $admin = Admin::where('id', self::token()->sub)->first();

        return $admin;
    }

    /**
     * Get current user token data
     */
    public static function token()
    {
        $token = self::getHeaderToken('Authorization');
        $tokenParam = RequestFacade::get('token');
        $tokenPayload = null;
        if (isset($token) && !empty($token) && !isset($tokenParam)) {
            $tokenPayload = json_decode(JWTAuth::getPayload($token));
        } else if (isset($tokenParam)) {
            $explode = explode(' ', $tokenParam);
            $token = end($explode);
            $tokenPayload = json_decode(JWTAuth::getPayload($token));
        }

        return $tokenPayload;
    }

    /**
     * Get current user company
     * @return App\Models\Company
     */
    public static function userCompany()
    {
        $user = User::where('id', self::token()->sub)->first();
        return Company::find($user->company_id);
    }

    /**
     * Request header
     * @param string $headType
     * @return string
     */
    public static function getHeaderToken($headType)
    {
        $header = RequestFacade::header($headType);
        $explode = explode(' ', $header);

        return end($explode);
    }

    /**
     * Check if current user is admin
     * @return boolean
     */
    public static function isAdmin()
    {
        return self::get()->is_admin == 1 ? true : false;
    }

    /**
     * Validate Env exceptions
     * check if env is exeption or not
     * @return boolean
     */
    public static function validateEnvException()
    {
        $getEnv = config('app.env');

        // add exception for check
        $envException = [
            'development',
            'testing',
        ];

        if (!in_array($getEnv, $envException)) {

            return false;

        } else {

            return true;

        }

    }

    /**
     * Get original token
     */

    public function originalToken()
    {
        $token = JWTAuth::getToken();

        return $token;
    }

}
