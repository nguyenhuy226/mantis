<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function viewAny(User $currentUser)
    {
        return in_array($currentUser?->role?->name, ['admin', 'editor', 'viewer']);
    }
    public function create(User $user)
    {
        return $user->hasPermission('create_users');
    }

    public function view(User $user)
    {
        return $user->hasPermission('view_users');
    }

    public function update(User $user)
    {
        return $user->hasPermission('edit_users');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_users');
    }
}
