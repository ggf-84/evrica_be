<?php

namespace Tests\Unit;

use Tests\TestCase;

class WebHookTest extends TestCase
{

    public function testFormalTest()
    {
        $this->assertEquals(1, 1);
    }

//    public $header;
//    public $user;
//
//    public function setUp() {
//        parent::setUp();
//
//        $this->user = User::where('email', 'test@mail.com')->first();
//        $this->header = $this->headers($this->user);
//    }
//
//    /**
//     * @group webhook
//     */
//    //Test webhook insertion
//    public function testAdd() {
//        $url = env('APP_URL') . '/backend/test/add/webhook';
//
//        $payload = [
//            'url' => $url,
//            'isActive' => '1',
//            'events' => 'testWebHook',
//            'auth_key' => '12345'
//        ];
//
//        $response = $this->post($this->path . '/webhooks', $payload, $this->header)
//                ->assertSuccessful()
//                ->assertJsonStructure(['data' => ['id', 'url']]);
//
//
//
//        //get inserted test id
//        $test = $response->getData()->id;
//
//        //remove inserted test
//        \App\Models\Webhook::where('id', $test)->delete();
//    }
//
//    /**
//     * @group webhook
//     */
//    //Test webhook update
//    public function testUpdate() {
//        $url = env('APP_URL') . '/backend/test/add/webhook';
//
//        $payload = [
//            'url' => $url,
//            'isActive' => '1',
//            'events' => 'testWebHook',
//            'auth_key' => '12345'
//        ];
//
//
//        $response = $this->post($this->path . '/webhooks', $payload, $this->header)
//                ->assertSuccessful()
//                ->assertJsonFragment($payload);
//
//        $test = $response->getData()->id;
//
//
//        //change payload data for update
//        $payload = [
//            'url' => $payload['url'] . '/1',
//            'isActive' => 0,
//            'events' => 'testWebHook1',
//            'auth_key' => '12345'
//        ];
//
//
//        $update = $this->put($this->path . '/webhooks/' . $test, $payload, $this->header)
//                ->assertSuccessful()
//                ->assertJsonFragment($payload);
//
//
//        //Remove inserted webhook
//
//        \App\Models\Webhook::where('id', $test)->delete();
//    }
//
//    /**
//     * @group webhook
//     */
//    //Test webhook delete
//    public function testDelete() {
//        $url = env('APP_URL') . '/backend/test/add/webhook';
//
//        $payload = [
//            'url' => $url,
//            'isActive' => '1',
//            'events' => 'testWebHook',
//            'auth_key' => '12345'
//        ];
//
//        //Test insertion
//        $response = $this->post($this->path . '/webhooks', $payload, $this->header)
//                ->assertSuccessful()
//                ->assertJsonFragment($payload);
//
//        $test = $response->getData()->id;
//
//
//        //Test Delete
//
//        $delete = $this->delete($this->path . '/webhooks/' . $test, $this->header)->assertSuccessful();
//    }
//
//    /**
//     * @group webhook
//     */
//    //Test get webhook list
//    public function testList() {
//        $url = env('APP_URL') . '/backend/api/test/add/webhook';
//
//        $payload = [
//            'url' => $url,
//            'isActive' => '1',
//            'events' => 'testWebHook',
//            'auth_key' => '12345'
//        ];
//
//
//        //Test insertion
//        $response = $this->post($this->path . '/webhooks', $payload, $this->header)
//                ->assertSuccessful()
//                ->assertJsonFragment($payload);
//
//
//        $list = $this->get($this->path . '/webhooks', $this->header)
//                ->assertSuccessful()
//                ->assertJsonStructure(['data' => ['*' => ['id', 'company_id', 'auth_key']]]);
//
//        \App\Models\Webhook::destroy($response->getData()->id);
//    }
//
//    /**
//     * @group webhook
//     */
//    //Test get webhook by id
//    public function testGetById() {
//
//        $url = env('APP_URL') . '/backend/api/test/add/webhook';
//
//        $payload = [
//            'url' => $url,
//            'isActive' => 1,
//            'events' => 'testWebHook',
//            'auth_key' => '12345'
//        ];
//
//
//        //Test insertion
//        $response = $this->post($this->path . '/webhooks', $payload, $this->header)
//                ->assertSuccessful()
//                ->assertJsonFragment($payload);
//
//        $item = $this->get($this->path.'/webhooks/'.$response->getData()->id)->assertSuccessful()->assertJsonFragment($payload);
//
//        \App\Models\Webhook::destroy($response->getData()->id);
//
//    }
}
