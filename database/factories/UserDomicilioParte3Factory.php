<?php

namespace Database\Factories;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;



class UserDomicilioFactory extends Factory
{
    
    public function definition(): array
    {
        $user = User::factory()->create();
        return [
            'user_id' => $user->id,
        'domicilio' => $this->faker->address,
        'numero_exterior' => $this->faker->buildingNumber,
        'colonia' => $this->faker->citySuffix,
        'cp' => $this->faker->postcode,
        'ciudad' => $this->faker->city,
        'fecha_nacimiento' => $this->faker->date(),
        ];
    }
}
