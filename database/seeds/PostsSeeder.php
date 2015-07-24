<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i = 0; $i < 10; $i++){

	    	$faker = Faker\Factory::create();
	        $post = new App\Post();
	        $post->name = 'Dummy Post ' . $i;
	        $post->slug = 'dummy_post_' . $i;
	        $post->copy = $faker->realText($maxNbChars = 2000, $indexSize = 4);
	        $post->photo = $faker->imageUrl($width = 400, $height = 300);
	        $post->created_at = new dateTime();
	        $post->updated_at = new dateTime();

	        $post->save();

    	}
    }
}
