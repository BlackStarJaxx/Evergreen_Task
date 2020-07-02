<?php

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['name' => "Apple"],
            ['name' => "Samsung"],
            ['name' => "Acer"],
            ['name' => "Xiomi"],
            ['name' => "Asus"]
        ]);
    }
    
}
