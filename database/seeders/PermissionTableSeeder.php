<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'can-login',
            'can-user-list',
            'can-user-create',
            'can-user-edit',
            'can-user-delete',
            'can-user-view',
            'can-user-status-change',
            'can-role-list',
            'can-role-create',
            'can-role-edit',
            'can-role-delete',
            'can-role-status-change',
            'can-permission-list',

        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
