<?php

use App\User;
use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'creator_id' => function () {
            return factory(User::class)->create()->id;
        },
    ];
});
