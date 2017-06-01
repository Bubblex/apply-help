<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Donate
 */
class Donate extends Model
{
    protected $table = 'donates';

    public $timestamps = true;

    protected $fillable = [
        'help_id',
        'user_id',
        'status',
        'message'
    ];

    protected $guarded = [];

        
}