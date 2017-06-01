<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    /**
     * 根据条件查询单条
     *
     * @param array $where
     * @param array $colums
     * @return void
     */
    public function findWhereFirst(array $where, $columns = ['*']) {
        return $this->user->where($where)->select($columns)->first();
    }

    /**
     * 根据条件查询多条
     *
     * @param array $where
     * @param array $columns
     * @return void
     */
    public function findWhere(array $where, $columns = ['*']) {
        return $this->user->where($where)->select($columns)->get();
    }
}
