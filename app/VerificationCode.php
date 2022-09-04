<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'code',
        'status',
        'created_at',
        'updated_at',
    ];
}
