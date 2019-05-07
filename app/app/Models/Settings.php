<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Settings extends Model
{
    protected $table = 'settings';
    protected $fillable = [
        'code',
        'is_system',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [];

    /**
     * @Relation
     */
    public function user_settings()
    {
        return $this->hasMany('App\Models\UserSettings', 'setting_id', 'id');
    }

    /**
     * @Relation
     */
    public function userSetting()
    {
        return $this->hasOne('App\Models\UserSettings', 'setting_id', 'id');
    }


}
