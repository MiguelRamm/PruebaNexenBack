<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserParte3Factory extends Factory
{

    
    public function definition()
    {
        return [
            'fecha_nacimiento' => $this->faker->date(),
        ];
    }
    

}
