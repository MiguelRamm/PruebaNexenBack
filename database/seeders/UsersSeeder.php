<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $userId = DB::table('users')->insertGetId([
                'fecha_nacimiento' => $faker->date(),
            ]);

            DB::table('user_domicilio')->insert([
                'user_id' => $userId,
                'domicilio' => $faker->address,
                'numero_exterior' => $faker->buildingNumber,
                'colonia' => $faker->citySuffix,
                'cp' => $faker->postcode,
                'ciudad' => $faker->city,
                'fecha_nacimiento' => $faker->date(),
            ]);


        }
    }
}
