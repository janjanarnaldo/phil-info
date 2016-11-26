<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
	      DB::table('categories')->insert([
	            'category_type_id' => \App\CategoryType::find($index)->id,
	            'name' => $faker->name,
	            'description' => $faker->paragraph,
	      ]);
  		}
    }
}
