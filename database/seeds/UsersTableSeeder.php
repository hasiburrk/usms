<?php

use Illuminate\Database\Seeder;
// use DB;

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
        'role' => 'Admin',
        'department_id' => 140146,
        'name' => 'Animesh karmakar',
        'mobile' => '102392929',
        'avatar' => 'Null',
        'email' => 'ak@gmail.com',
        'password' => bcrypt('123456')
      ]);
    }
}
