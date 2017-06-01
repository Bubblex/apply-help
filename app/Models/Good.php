<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Good
 */
class Good extends Model
{
    protected $table = 'goods';

    public $timestamps = true;

    protected $fillable = [
        'goods_type_id',
        'name'
    ];

    protected $guarded = [];

        
}