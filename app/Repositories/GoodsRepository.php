<?php

namespace App\Repositories;

use App\Models\Good;

class GoodsRepository
{
    protected $goods;

    public function __construct(Good $goods) {
        $this->goods = $goods;
    }
}
