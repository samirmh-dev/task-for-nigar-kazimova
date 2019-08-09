<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'niko.kazim@gmail.com',
            'password' => bcrypt('Admin123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
