<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DiscussionTableSeeder extends Seeder
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
	      DB::table('discussions')->insert([
	            'body' => $faker->paragraph,
	            'user_id' => \App\User::find($index)->id,
	      ]);
  		}
    }
}
