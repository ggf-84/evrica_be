<?php

namespace Tests\Unit;

use App\Models\UnitType;
use \Tests\TestCase;
use App\Models\User;

class BusinessUnitsTest extends TestCase {

    public $header;
    public $user;

    public function setUp() {
        parent::setUp();

        $this->user = User::where('email', 'test@mail.com')->first();
        $this->header = $this->headers($this->user);
    }

    /**
    * @group units1
    */
    //Test Unit insertion
    public function testUnitAdd() {
        $payload = [
            'company_id' => $this->user->company_id,
            'user' => ['id' => $this->user->id],
            'type' => ['id' => UnitType::all()->random()->id],
            'i18n' => [
                ['title'=> 'Add unit test', 'language_id'=> 1],
                ['title'=> 'Add unit test', 'language_id'=> 2],
                ['title'=> 'Add unit test', 'language_id'=> 3],
            ]
        ];

        $response = $this->post($this->path . '/units', $payload, $this->header)
            ->assertSuccessful();


        // dd($response);

        $testId = $response->getData()->id;

        \App\Models\Unit::where('id', $testId)->delete();
        \App\Models\UnitContent::where('unit_id', $testId)->delete();
    }

    /**
    * @group units
    */
    //Test Unit update
    public function testUnitUpdate() {
        $payload = [
            'company_id' => $this->user->company_id,
            'user' => ['id' => $this->user->id],
            'type' => ['id' => UnitType::all()->random()->id],
            'i18n' => [
                ['title'=> 'Add unit test', 'language_id'=> 1],
                ['title'=> 'Add unit test', 'language_id'=> 2]
            ]
        ];

        $response = $this->post($this->path . '/units', $payload, $this->header)
            ->assertSuccessful();

        $testId = $response->getData()->id;

        $payload = [
            'type' => ['id' => UnitType::all()->random()->id],
            'i18n' => [
                ['title'=> 'Update unit test', 'language_id'=> 1],
                ['title'=> 'Update unit test', 'language_id'=> 2]
            ]
        ];

        $this->put($this->path . '/units/' . $testId, $payload, $this->header)
            ->assertSuccessful();

        //Remove inserted webhook
        \App\Models\Webhook::where('id', $testId)->delete();
        \App\Models\UnitContent::where('unit_id', $testId)->delete();
    }

    /**
    * @group units
    */
    //Test Unit delete
    public function testUnitDelete() {
        $payload = [
            'company_id' => $this->user->company_id,
            'user' => ['id' => $this->user->id],
            'type' => ['id' => UnitType::all()->random()->id],
            'i18n' => [
                ['title'=> 'Add unit test', 'language_id'=> 1],
                ['title'=> 'Add unit test', 'language_id'=> 2],
                ['title'=> 'Add unit test', 'language_id'=> 3],
            ]
        ];

        $response = $this->post($this->path . '/units', $payload, $this->header)
            ->assertSuccessful();

        $testId = $response->getData()->id;

        $this->delete($this->path . '/units/' . $testId, $this->header)
            ->assertSuccessful();
    }

    /**
    * @group units
    */
    //Test UnitType insertion
    public function testUnitTypeAdd() {
        $payload = [
            'i18n' => [
                ['title'=> 'Add type', 'language_id'=> 1],
                ['title'=> 'Add type', 'language_id'=> 3]
            ]
        ];

        $response = $this->post($this->path . '/unit/type', $payload, $this->header)->assertSuccessful();

        $testId = $response->getData()->id;

        //remove inserted test
        \App\Models\UnitType::where('id', $testId)->delete();
        \App\Models\UnitTypeContent::where('type_id', $testId)->delete();
    }

    /**
    * @group units
    */
    //Test UnitType update
    public function testUnitTypeUpdate() {
        $payload = [
            'i18n' => [
                ['title'=> 'Add type', 'language_id'=> 1],
                ['title'=> 'Add type', 'language_id'=> 3]
            ]
        ];

        $response = $this->post($this->path . '/unit/type', $payload, $this->header)->assertSuccessful();

        $testId = $response->getData()->id;

        $payload = [
            'i18n' => [
                ['title'=> 'Update type', 'language_id'=> 1],
                ['title'=> 'Update type', 'language_id'=> 3]
            ]
        ];

        $this->put($this->path . '/unit/type/' . $testId, $payload, $this->header)->assertSuccessful();

       \App\Models\UnitType::where('id', $testId)->delete();
       \App\Models\UnitTypeContent::where('type_id', $testId)->delete();
    }

    /**
    * @group units
    */
    //Test UnitType delete
    public function testUnitTypeDelete() {
        $payload = [
            'i18n' => [
                ['title'=> 'Add type', 'language_id'=> 1],
                ['title'=> 'Add type', 'language_id'=> 3]
            ]
        ];

        $response = $this->post($this->path . '/unit/type', $payload, $this->header)
            ->assertSuccessful();

        $testId = $response->getData()->id;
        $this->delete($this->path . '/unit/type/' . $testId, $this->header)
            ->assertSuccessful();
    }

    /**
    * @group units
    */
    //Test User insertion
    public function testUserAdd() {
        $payload = [
            'unit_id' => 1,
            'user' => ['id' => $this->user->id],
        ];

        $response = $this->post($this->path . '/unit-users', $payload, $this->header)
            ->assertSuccessful();
        $testId = $response->getData()->id;
        \App\Models\UnitUsers::where('id', $testId)->delete();
    }

    /**
    * @group units
    */
    //Test User update
    public function testUserUpdate() {
        $payload = [
            'unit_id' => 1,
            'user' => ['id' => $this->user->id],
        ];

        $response = $this->post($this->path . '/unit-users', $payload, $this->header)->assertSuccessful();

        $testId = $response->getData()->id;

        $updatePayload = [
            'unit_id' => 1,
            'user' => ['id' => $this->user->id],
        ];

        $this->put($this->path . '/unit-users/' . $testId, $updatePayload, $this->header)
            ->assertSuccessful();

        \App\Models\UnitUsers::where('id', $testId)->delete();
    }

    /**
    * @group units
    */
    //Test User delete
    public function testUserDelete() {
        $payload = [
            'unit_id' => 1,
            'user' => ['id' => $this->user->id],
        ];

        $response = $this->post($this->path . '/unit-users', $payload, $this->header)
            ->assertSuccessful();

        $testId = $response->getData()->id;
        $this->delete($this->path . '/unit-users/' . $testId, $this->header)
            ->assertSuccessful();
    }

    /**
    * @group units
    */
    //Test get list of Units Company
    public function testListOfUnitsByCompany() {
        $this->get($this->path . '/units', $this->header)->assertSuccessful();
    }

    /**
    * @group units
    */
    //Test get List Of Units By User
    public function testListOfUnitsByUser() {
        $this->get($this->path . '/unit/user/' . $this->user->id, $this->header)->assertSuccessful();
    }

    /**
    * @group units
    */
    //Test get List Of Users In Unit
    public function testListOfUsersInUnit() {
        $payload = [
            'type' => ['id' => UnitType::all()->random()->id],
            'user' => ['id' => $this->user->id],
            'i18n' => [
                ['title'=> 'Add unit test', 'language_id'=> 1],
                ['title'=> 'Add unit test', 'language_id'=> 2],
                ['title'=> 'Add unit test', 'language_id'=> 3],
            ]
        ];

        $response = $this->post($this->path . '/units', $payload, $this->header)
            ->assertSuccessful();

        $testId = $response->getData()->id;

        $this->get($this->path . '/users/unit/' . $testId, $this->header)->assertSuccessful();

        \App\Models\Unit::where('id', $testId)->delete();
        \App\Models\UnitContent::where('unit_id', $testId)->delete();
    }

}
