<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class PostsTableSeeders extends Seeder
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
	    DB::table('posts')->insert([
		    'user_id' => \App\User::find($index)->id,
		    'category_id' => \App\Category::find($index)->id,
		    'subject' => $faker->word,
		    'body' => $faker->paragraph,
	     ]);
  		}
    }
}
