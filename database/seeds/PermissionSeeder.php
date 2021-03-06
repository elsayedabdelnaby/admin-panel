<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\Module;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get Main Modules
        $admin_users_module = Module::where('name', '=', 'admin_users')->firstOrFail();
        $roles_module = Module::where('name', '=', 'roles')->firstOrFail();
        $modules_module = Module::where('name', '=', 'modules')->firstOrFail();
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions to admin_user module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_admin_users',
            'label' => 'View Admin Users',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_admin_user',
            'label' => 'Create Admin User',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_admin_user',
            'label' => 'Edit Admin User',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_admin_user',
            'label' => 'Delete Admin User',
            'module_id' => $admin_users_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'is_active_admin_user',
            'label' => 'Is Active Admin User',
            'module_id' => $admin_users_module->id
        ]);

        // create permissions to roles module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_roles',
            'label' => 'View Roles',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_role',
            'label' => 'Create Role',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_role',
            'label' => 'Edit Role',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_role',
            'label' => 'Delete Role',
            'module_id' => $roles_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'is_active_role',
            'label' => 'Is Active Role',
            'module_id' => $roles_module->id
        ]);

        // create permissions to modules module
        Permission::create([
            'guard_name' => 'admin',
            'name' => 'view_modules',
            'label' => 'View Modules',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'create_module',
            'label' => 'Create Module',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'edit_module',
            'label' => 'Edit Module',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'delete_module',
            'label' => 'Delete Module',
            'module_id' => $modules_module->id
        ]);

        Permission::create([
            'guard_name' => 'admin',
            'name' => 'is_active_module',
            'label' => 'Is Active Module',
            'module_id' => $modules_module->id
        ]);
    }
}
