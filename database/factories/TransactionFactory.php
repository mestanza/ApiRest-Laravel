<?php

use Faker\Generator as Faker;
use App\Seller;
use App\User;

$factory->define(App\Transaction::class, function (Faker $faker) {

    //Se obtienen todos los vendedores que tenga productos
    $vendedores = Seller::has('products')->get()->random();
    //Se obtiene todos los usuarios excepto aquellos que tengan el id de vendedor
    $comprador = User::all()->except($vendedor->id)->random();

    return [
        'quantity' => $faker->numberBetween(1, 3),
        'id_buyer' => $comprador -> id,
        'id_product' => $vendedor -> products->random()->id,
    ];
});
