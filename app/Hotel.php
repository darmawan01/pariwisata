<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name',
        'owner',
        'address',
        'phone',
        'fax',
        'email',
        'npwp',
    ];
}
