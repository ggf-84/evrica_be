<?php

namespace Tests;

use DB;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

abstract class TestCase extends BaseTestCase
{

    public $path = '/backend/api';

    protected function headers($user = null)
    {
        if (!$user) {
            return [];
        }
        $headers = ['Accept' => 'application/json'];
        $token = JWTAuth::fromUser($user);
        JWTAuth::setToken($token);
        $this->refreshApplication();
        $headers['Authorization'] = 'Bearer ' . $token;

        return $headers;
    }

    protected function getRandIdFromCompany($model)
    {
        $objects = $model->where('company_id', $this->company)->take(10)->get();
        if(count($objects->toArray()) < 1) dd($model->getTable());
        return $objects->random()->id;
    }

    use CreatesApplication;
}
