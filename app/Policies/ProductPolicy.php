<?php

namespace App\Policies;

use App\Models\User;

class ProductPolicy
{
    public function viewAny(User $currentUser)
    {
        return in_array($currentUser?->role?->name, ['admin', 'editor', 'viewer']);
    }
    public function create(User $user)
    {
        return $user->hasPermission('create_products');
    }

    public function view(User $user)
    {
        return $user->hasPermission('view_products');
    }

    public function update(User $user)
    {
        return $user->hasPermission('edit_products');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('delete_products');
    }
}
