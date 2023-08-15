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
        DB::table('users')->insert(
        [
            'first_name' => 'Administrator',
            'middle_name' => 'Admininstrator',
            'email' => 'admin@ccd.com',
            'role' => 'Administrator',
            'password' => bcrypt('123456'),
        ]);
    }
}
