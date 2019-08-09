<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pedido;
use Faker\Generator as Faker;

$factory->define(Pedido::class, function (Faker $faker) {
    return [
        //
        'telefone_cliente' => $faker->randomElement(['31 3458 3332','31 99451 3712','31 9999 5555','31 3458 8888']),
        'nome_cliente' => $faker->name,
        'endereco' => $faker->address,        
        'id_pizza'=> rand(1,5),
        'status'=> $faker->randomElement(['produzindo','entregando','entregue','cancelado'])
    ];
});
