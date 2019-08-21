<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
        'username'=>$faker->userName,
        'truename'=>$faker->name(),
        'password'=>bcrypt('admin123'),
        'email'=>$faker->email,
        'phone'=>$faker->phoneNumber,
        'sex'=>['先生','女士'][rand(0,1)]
    ];
});
