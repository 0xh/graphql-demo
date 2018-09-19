<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->can('view-users');
    }

    public function view(User $user)
    {
        return $user->can('view-user');
    }

    public function edit(User $user)
    {
        return $user->can('view-user');
    }

    public function update(User $user)
    {
        return $user->can('update-user');
    }

    public function create(User $user)
    {
        return $user->can('create-user');
    }

    public function store(User $user)
    {
        return $user->can('store-user');
    }

    public function delete(User $user)
    {
        return $user->can('delete-user');
    }
}
