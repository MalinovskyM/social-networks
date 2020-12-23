<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Misha',
            'email' => 'Misha@gmail.com',
            'password' => bcrypt('awdjhdsjqiwdh3'),
            'active' => true,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Vlad',
            'email' => 'Vlad@gmail.com',
            'password' => bcrypt('awdjhdsjqiwdh3'),
            'active' => true,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Kolia',
            'email' => 'Kolia@gmail.com',
            'password' => bcrypt('awdjhdsjqiwdh3'),
            'active' => false,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
