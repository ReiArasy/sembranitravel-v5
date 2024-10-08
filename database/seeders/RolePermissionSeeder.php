<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;    
use Spatie\Permission\Models\Permission;  
use App\Models\User;   

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $permissions = [
            'manage categories',
            'manage packages',
            'manage transactions',
            'manage package banks',
            'checkout package',
            'view orders',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission
            ]);
        }

        $customerRole = Role::firstOrCreate([
            'name' => 'customer'
        ]);
    
        $customerPermissions = [
            'checkout package',
            'view orders'
        ];

        $customerRole->syncPermissions($customerPermissions); 

        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        $user = User::create([
            'name' => 'ArasyPage',
            'email' => 'arasy@gmail.com',
            'phone_number' => '62881026145249',
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole($superAdminRole);
    }
}
