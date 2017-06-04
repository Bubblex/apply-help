<?php

namespace App\Repositories;

use DB;
use App\Models\Donate;

class DonateRepository
{
    protected $donate;

    public function __construct(Donate $donate) {
        $this->donate = $donate;
    }

    public function all($columns = ['*']) {
        return $this->donate->select($columns)->get();
    }

    public function update($id, $update) {
        return $this->donate->find($id)->update($update);
    }

    public function getCountByUser() {
        return count($this->donate->select(DB::raw('count(*) as user_count'))->groupBy(['user_id'])->get());
    }

    public function getCountByHelp() {
        return $this->donate->where('status', 2)->count();
    }
}
