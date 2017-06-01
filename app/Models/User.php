<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 */
class User extends Model
{
    protected $table = 'users';

    public $timestamps = true;

    protected $fillable = [
        'role_id',
        'telephone',
        'name',
        'gender',
        'password',
        'school',
        'dorm',
        'address',
        'status',
        'remember_token'
    ];

    protected $guarded = [];

        
}