<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Duman',
            'usertype'=>'admin',
            'email'=>'wikiblogger@gmail.com',
            'password'=>bcrypt('12345678'),
            ]);


        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Erasyl',
            'usertype'=>'author',
            'email'=>'Erasyl@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Magzhan',
            'usertype'=>'author',
            'email'=>'bbtiph@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Adilet',
            'usertype'=>'author',
            'email'=>'adilet@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

    }
}
