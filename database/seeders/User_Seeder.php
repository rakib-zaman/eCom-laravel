<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //this is no 1 user
        // DB::table('users')->insert([
        //     'name'=>'Jaman Helal',
        //     'email'=>'helal@gmail.com',
        //     'password'=>Hash::make('12345')
        // ]);

        DB::table('users')->insert([
            'name'=>'Rakib',
            'email'=>'rakib@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
