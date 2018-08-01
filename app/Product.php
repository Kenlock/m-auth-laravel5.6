<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Product extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'name', 'detail'
     ];

}
