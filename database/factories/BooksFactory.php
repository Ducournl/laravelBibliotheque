<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [
        'titre' => $faker->word,
        'auteur' => $faker->lastName,
        'isbn' => $faker->isbn10,
        'image'=> $faker->imageUrl($width = 270, $height = 440, 'cats')
    ];
});
