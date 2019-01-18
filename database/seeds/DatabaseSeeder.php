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
        $this->call(UsersTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
    }
}


class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrador
        DB::table('user_roles')->insert([
            'name' => 'Administrador',
        ]);
        // Usuario
        DB::table('user_roles')->insert([
            'name' => 'Usuario',
        ]);
    }
}
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrador
        DB::table('users')->insert([
            'name' => 'autofact admin',
            'email' => 'admin@autofact.com',
            'user_role_id' => '1',
            'password' => bcrypt('autofact123')
        ]);
        // Usuario
        DB::table('users')->insert([
            'name' => 'autofact user',
            'email' => 'user@autofact.com',
            'user_role_id' => '2',
            'password' => bcrypt('autofact123')
        ]);
    }
}
