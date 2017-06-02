<?php

namespace App\Repositories;

use App\Models\Help;

class HelpRepository
{
    protected $help;

    public function __construct(Help $help) {
        $this->help = $help;
    }

    /**
     * 获取所有
     *
     * @param array $columns
     * @param array $with
     * @return void
     */
    public function all($columns = ['*'], $with = []) {
        return $this->help->with($with)->select($columns)->get();
    }
}
