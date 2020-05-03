<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('roles')->insert([
           'name'=>'Duman',
           'slug'=>'admin',
       ]);

        DB::table('roles')->insert([
            'name'=>'Erasyl',
            'slug'=>'author',
        ]);

        DB::table('roles')->insert([
            'name'=>'Adilet',
            'slug'=>'author',
        ]);

        DB::table('roles')->insert([
            'name'=>'Magzhan',
            'slug'=>'author',
        ]);
    }
}
