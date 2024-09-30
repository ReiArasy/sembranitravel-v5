<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;    // Import Role dari spatie/laravel-permission
use Spatie\Permission\Models\Permission;  // Import Permission dari spatie/laravel-permission
use App\Models\User;   // Import User model

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Permission list
        $permissions = [
            'manage categories',
            'manage packages',
            'manage transactions',
            'manage package banks',
            'checkout package',
            'view orders',
        ];

        // Create or update permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        // Create or update 'customer' role
        $customerRole = Role::firstOrCreate([
            'name' => 'customer'
        ]);
    
        // Assign permissions to 'customer' role
        $customerPermissions = [
            'checkout package',
            'view orders'
        ];

        $customerRole->syncPermissions($customerPermissions); 

        // Create or update 'super_admin' role
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        // Create a super admin user
        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'phone_number' => '62881026145249',
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('123123123')
        ]);

        // Assign super admin role to the user
        $user->assignRole($superAdminRole);
    }
}
