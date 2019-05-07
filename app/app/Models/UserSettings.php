<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSettings extends Model
{

    protected $table = 'user_settings';

    protected $fillable = ['setting_id', 'user_id', 'value', 'device_id','created_at','created_at'];

    protected $hidden = ['id','setting_id','user_id','device_id'];

    /**
     * @Relation
     */
    public function setting()
    {
        return $this->hasOne('App\Models\Settings', 'id', 'setting_id');
    }

    /**
     * @Relation
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'user_id');
    }

    /**
     * @Relation
     */
    public function device()
    {
        return $this->belongsTo('App\Models\UserDevice', 'id', 'device_id');
    }

}
