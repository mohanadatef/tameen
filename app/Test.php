<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Test extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'mobile','question1','question3','budget','service'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
