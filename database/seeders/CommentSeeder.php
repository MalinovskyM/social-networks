<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => 1,
            'commentator_id' => 1,
            'content' => 'Test CommentController',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'commentator_id' => 2,
            'content' => 'Test CommentController',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'commentator_id' => 2,
            'content' => 'Test CommentController',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'deleted_at' => Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 1,
            'commentator_id' => 3,
            'content' => 'Test CommentController',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
            'deleted_at' => Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 2,
            'commentator_id' => 3,
            'content' => 'Test CommentController',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('comments')->insert([
            'post_id' => 6,
            'commentator_id' => 3,
            'content' => 'Test CommentController',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
