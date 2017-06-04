<?php

namespace App\Repositories;

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
}
