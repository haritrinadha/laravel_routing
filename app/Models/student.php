<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='registrations';
    protected $fillable=  
    [ 
    'name',
    'email',
    'languages',
    'gender',
    'phone',
    'description',
    'country',
    'state',
    'city',
    'image'
    ];  

}
