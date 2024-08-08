<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(\App\Book::class, function (Faker $faker) {
            return [
                'title' => $faker->title(),
                'author' => $faker->author(),
                'price' =>$aker->randomFloat(2),
                'description' =>$faker->text(),
            ];
        });
    }
}
