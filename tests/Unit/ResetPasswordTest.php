<?php

namespace Tests\Unit;

use \Tests\TestCase;
use App\Models\User;

class ResetPasswordTest extends TestCase
{
    public $header;
    public $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = User::where('email', 'test@mail.com')->first();
        $this->header = $this->headers($this->user);
    }

    /**
     * @group password
     * Test recovery form status
     */
    public function testRecovery()
    {
        $email = 'test@mail.com';

        $response = $this->post($this->path . '/auth/recovery?email=' . $email, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['status']])
            ->assertJsonFragment(['status' => 'ok']);
    }

    /**
     * @group password
     * Test reset without parameters
     */
    public function testReset()
    {
        $response = $this->post($this->path . '/auth/reset', $this->header)
            ->assertJsonFragment(['message' => 'The given data failed to pass validation.']);
    }
}
