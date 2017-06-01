<?php

namespace App\Repositories;

use App\Models\Donate;

class DonateRepository
{
    protected $donate;

    public function __construct(Donate $donate) {
        $this->donate = $donate;
    }
}
