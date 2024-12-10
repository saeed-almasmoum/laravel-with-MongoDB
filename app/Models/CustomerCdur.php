<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as ModelMongodb;

// use Illuminate\Database\Eloquent\Model;

// use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class CustomerCdur extends ModelMongodb
{
    use HasFactory;

    protected $collection = 'customer_cdurs'; // اسم المجموعة في MongoDB


    protected  $fillable = ['first_name', 'family_name', 'email', 'address'];

    
}
