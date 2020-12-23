<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'url' => 'https://rozetked.me/images/uploads/dwoilp3BVjlE.jpg',
        ]);

        DB::table('images')->insert([
            'url' => 'https://i.pinimg.com/originals/f4/d2/96/f4d2961b652880be432fb9580891ed62.png',
        ]);

        DB::table('images')->insert([
            'url' => 'https://cdnimg.rg.ru/img/content/178/22/40/kotik_d_850.jpg',
        ]);
    }
}
