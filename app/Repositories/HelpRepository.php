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

    /**
     * 根据 id 获取帮助详情
     *
     * @param [type] $id
     * @param array $columns
     * @param array $with
     * @return void
     */
    public function find($id, $columns = ['*'], $with = []) {
        return $this->help->with($with)->select($columns)->find($id);
    }

    /**
     * 根据 id 更新数据
     *
     * @param [type] $id
     * @param [type] $update
     * @return void
     */
    public function update($id, $update) {
        if($this->help->where('id', $id)->update($update)) {
            return response()->json([
                'status' => 1,
                'message' => '更新成功'
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '更新失败'
            ]);
        }
    }

    /**
     * 分页查询
     *
     * @param array $where
     * @param array $columns
     * @return void
     */
    public function paginate($where = [], $columns = ['*']) {
        return $this->help->where($where)->with('donates')->select($columns)->paginate();
    }
}
