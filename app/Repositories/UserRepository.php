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
     * 查询所有用户
     *
     * @param array $columns
     * @param array $with
     * @return void
     */
    public function all($columns = ['*'], $with = []) {
        return $this->user->with($with)->select($columns)->get();
    }

    /**
     * 根据条件查询单条
     *
     * @param array $where
     * @param array $colums
     * @return void
     */
    public function findWhereFirst(array $where, $columns = ['*'], $with = []) {
        return $this->user->where($where)->with($with)->select($columns)->first();
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

    /**
     * 创建一条数据
     *
     * @param [type] $attributes
     * @return void
     */
    public function create($attributes) {
        return User::create($attributes);
    }

    /**
     * 根据 id 更新单条数据
     *
     * @param [type] $id
     * @param [type] $update
     * @return void
     */
    public function update($id, $update) {
        return $this->user->where('id', $id)->update($update);
    }

    /**
     * 根据 id 查询用户
     *
     * @param [type] $id
     * @param array $columns
     * @param array $with
     * @return void
     */
    public function find($id, $columns = ['*']) {
        return $this->user->select($columns)->find($id);
    }
}
