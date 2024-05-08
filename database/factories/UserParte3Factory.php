<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserParte3Factory extends Factory
{

    
    protected $model = User::class;
    public function definition()
    {
        return [
            'fecha_nacimiento' => $this->faker->date(),
        ];
    }
    

}
