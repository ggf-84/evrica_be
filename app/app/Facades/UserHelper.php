<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class UserHelper extends Facade {

    protected static function getFacadeAccessor() {
        return 'UserHelper';
    }

}
