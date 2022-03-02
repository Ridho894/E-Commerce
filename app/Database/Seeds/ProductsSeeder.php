<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Generator;

class ProductsSeeder extends Seeder
{
    public function fake(Generator $faker)
    {
        return [
            'id'          => $faker->numberBetween(1, 100),
            'name'        => $faker->name,
            'description' => $faker->text,
            'picture'     => $faker->imageUrl(),
            'price'       => $faker->randomFloat(2, 1, 100),
            'created_at'  => $faker->dateTime,
            'updated_at'  => $faker->dateTime,
        ];
    }
}
