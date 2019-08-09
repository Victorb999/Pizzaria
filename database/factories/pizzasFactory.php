<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pizza;
use Faker\Generator as Faker;

$factory->define(Pizza::class, function (Faker $faker) {
    return [
        //
        'sabor' => $faker->randomElement(['Mussarela','Presunto','A moda','Catupiry']),
        'preco' => $faker->randomFloat(2,10,30),
        'tamanho'=> $faker->randomElement(['Gigante','Grande','Media','Pequena']),
        
    ];
});
