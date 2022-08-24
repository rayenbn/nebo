<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    // use Translatable;
    protected $fillable = [
        'title',
        'address',
        'phone',
        'phone1',
        'email',
        'email1',
    ];
}
