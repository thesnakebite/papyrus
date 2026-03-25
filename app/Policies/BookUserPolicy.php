<?php

namespace App\Policies;

use App\Models\BookUser;
use App\Models\User;

class BookUserPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, BookUser $bookUser): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return false;
    }

    public function update(User $user, BookUser $bookUser): bool
    {
        return false;
    }

    public function delete(User $user, BookUser $bookUser): bool
    {
        return false;
    }
}
