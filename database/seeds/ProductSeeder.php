<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "Apple",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Samsung",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Acer",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Xiomi",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Asus",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ], 
            [
                'name' => "Apple",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Samsung",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Acer",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Xiomi",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Asus",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ], 
            [
                'name' => "Apple",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Samsung",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Acer",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Xiomi",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ],
            [
                'name' => "Asus",
                'price' => rand(1000,10000),
                'category_id' =>rand(1,3),
                'brand_id' =>rand(1,5) ,
                'image_url'=> "https://via.placeholder.com/150"
            ], 

        ]);
    }
}
