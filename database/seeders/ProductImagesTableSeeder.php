<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        DB::table('product_images')->insert([
            [
                'id_product_detail' => 1, 
                'id_image' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 2, 
                'id_image' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 3, 
                'id_image' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 4, 
                'id_image' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 5, 
                'id_image' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_product_detail' => 6, 
                'id_image' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 7, 
                'id_image' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 8, 
                'id_image' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'id_product_detail' => 9, 
                'id_image' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 10, 
                'id_image' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 11, 
                'id_image' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //12
            
            [
                'id_product_detail' => 12, 
                'id_image' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 13, 
                'id_image' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 14, 
                'id_image' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //15
            [
                'id_product_detail' => 15, 
                'id_image' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 16, 
                'id_image' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 17, 
                'id_image' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 18, 
                'id_image' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //19
            
            [
                'id_product_detail' => 19, 
                'id_image' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 20, 
                'id_image' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 21, 
                'id_image' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 22, 
                'id_image' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 23, 
                'id_image' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id_product_detail' => 24, 
                'id_image' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
