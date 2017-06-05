<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GoodsType
 */
class GoodsType extends Model
{
    protected $table = 'goods_types';

    public $timestamps = true;

    protected $fillable = [
        'name'
    ];

    protected $guarded = [];

    public function good() {
        return $this->hasMany('App\Models\Goods', 'goods_type_id');
    }
}