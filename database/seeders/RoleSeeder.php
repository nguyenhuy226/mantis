<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'permissions' => json_encode([
                'create_products',
                'edit_products',
                'delete_products',
                'view_products',
                'manage_orders',
                'view_users',
                'edit_users',
                'delete_users',
                'create_users',
                'view_reports',
                'manage_categories'
            ])
        ]);

        Role::create([
            'name' => 'editor',
            'permissions' => json_encode([
                'create_products',
                'edit_products',
                'view_products',
                'view_users',
                'edit_users',
                'create_users',
            ])
        ]);

        Role::create([
            'name' => 'viewer',
            'permissions' => json_encode([
                'view_products',
                'view_users'
            ])
        ]);
    }
}
