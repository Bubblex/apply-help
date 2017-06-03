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
}
