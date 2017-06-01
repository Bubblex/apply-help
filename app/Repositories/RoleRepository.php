<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    protected $role;

    public function __construct(Role $role) {
        $this->role = $role;
    }
}
