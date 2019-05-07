<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySettings extends Model
{
    protected $table = 'company_settings';

    protected $fillable = [
        'setting_id',
        'value',
        'company_id',
        'created_at',
        'updated_at',
    ];

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
    public function company()
    {
        return $this->hasOne('App\Models\Company', 'id', 'company_id');
    }

}
