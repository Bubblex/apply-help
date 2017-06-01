<?php

namespace App\Repositories;

use App\Models\GoodsType;

class GoodsTypeRepository
{
    protected $goodsType;

    public function __construct(GoodsType $goodsType) {
        $this->goodsType = $goodsType;
    }
}
