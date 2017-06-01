<?php

namespace App\Repositories;

use App\Models\Help;

class HelpRepository
{
    protected $help;

    public function __construct(Help $help) {
        $this->help = $help;
    }
}
