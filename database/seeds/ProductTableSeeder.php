<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 100; $i++) { 
        	DB::table('products')->insert(
        		[
        			'ten_san_pham' => $faker->realText($maxNbChars = 70),
        			'size' => $faker->realText($maxNbChars = 150),
        			'content' => $faker->realText($maxNbChars = 500),
        			'author' => $faker->name,
        			'created_by' => -1
        		]
    		);
        }
    }
}
