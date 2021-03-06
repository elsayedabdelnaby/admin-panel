<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ModuleSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            AdminUserSeeder::class,
        ]);

        // Modules Data Seeders
        $this->call([
            \Modules\Address\Database\Seeders\AddressDatabaseSeeder::class,
        ]);
    }
}
