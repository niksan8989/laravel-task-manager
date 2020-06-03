<?php

namespace App\Queries;

use App\Models\User;

class UserQuery extends Query
{
    public function getModelClass(): string
    {
        return User::class;
    }
}
