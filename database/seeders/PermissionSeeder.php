<?php

namespace Database\Seeders;

use Backpack\PermissionManager\app\Models\Permission;
use Backpack\PermissionManager\app\Models\Role;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = config('permission.permission_list', []);

        foreach($list as $permission => $roles) {
            Permission::firstOrCreate(['name' => $permission], [
                'guard_name' => 'web'
            ]);

            foreach($roles as $roleName) {
                $role = Role::firstOrCreate(['name' => $roleName], [
                    'guard_name' => 'web'
                ]);

                $role->givePermissionTo($permission);
            }
        }

        Permission::whereNotIn('name', array_keys($list))->delete();
    }
}
