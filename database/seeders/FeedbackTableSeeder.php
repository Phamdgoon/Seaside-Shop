<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('feedback')->insert([
            [
                'id_order' => 1, 
                'message' => 'Áo đẹp',
                'star' => 5,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 2, 
                'message' => 'Áo tạm được',
                'star' => 4,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 3, 
                'message' => 'Áo đẹp',
                'star' => 5,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_order' => 4, 
                'message' => 'Áo đẹp',
                'star' => 5,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 5, 
                'message' => 'Áo tạm được',
                'star' => 4,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 6, 
                'message' => 'Áo đẹp',
                'star' => 5,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //7-9
            
            [
                'id_order' => 7, 
                'message' => 'Áo đẹp ôm sát body, mình 54kg vẫn vừa nhé',
                'star' => 5,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 8, 
                'message' => 'Áo khá tốt',
                'star' => 4,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_order' => 9, 
                'message' => 'Áo đẹp lắm nên mua nha',
                'star' => 5,
                'day_feedback' =>Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
