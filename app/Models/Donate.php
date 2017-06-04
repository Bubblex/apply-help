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

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function help() {
        return $this->belongsTo('App\Models\Help', 'help_id');
    }
}