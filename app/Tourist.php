<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    protected $fillable = [
        'passport_id',
        'name',
        'gender',
        'age',
        'country_id',
        'nationality_id',
        'destination_id',
    ];
}
