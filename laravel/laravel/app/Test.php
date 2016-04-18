<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Test extends Authenticatable
{
    protected $table 		= 	'test';
    public  $timestamps	=	false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content'
    ];

}
