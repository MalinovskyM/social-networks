<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'autor_id' => 1,
            'image_id' => 1,
            'content' => 'Test Content',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'autor_id' => 1,
            'image_id' => 2,
            'content' => 'Test Content',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'autor_id' => 1,
            'image_id' => 3,
            'content' => 'Test Content',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'deleted_at' => Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'autor_id' => 1,
            'content' => 'Test Content',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'deleted_at' => Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'autor_id' => 2,
            'image_id' => 1,
            'content' => 'Test Content',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('posts')->insert([
            'autor_id' => 3,
            'content' => 'Test Content',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
