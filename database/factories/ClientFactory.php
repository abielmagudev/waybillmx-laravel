<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company, 
        'alias' => Str::random(8),
        'rfc' => $faker->bankAccountNumber,
        'direccion' => $faker->address,
        'colonia' => $faker->streetName,
        'postal' => $faker->numberBetween(1000,9999),
        'ciudad' => $faker->city,
        'estado' => $faker->state,
        'pais' => $faker->country,
        'contacto' => $faker->name,
        'telefonos' => $faker->tollFreePhoneNumber,
        'iva' => $faker->boolean ? 1 : 0,
        'retencion_iva' => $faker->boolean ? 1 : 0,
        'monedas' => $faker->randomElement(['peso','dolar']),
    ];
});
