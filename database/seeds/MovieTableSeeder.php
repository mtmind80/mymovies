<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $formatArray = ['VHS', 'DVD', 'Streaming'];

        for ($i = 0; $i < 50; $i++) {
            DB::table('movies')->insert([
                'title'  => $faker->text(50),
                'format' => $formatArray[rand(0, 2)],
                'length' => rand(80, 130),
                'year'   => rand(1950, 2019),
                'rating' => rand(1, 5),
            ]);
        }
    }
}
