<?php

namespace Database\Factories;

use App\Models\Main;
use Illuminate\Database\Eloquent\Factories\Factory;

class MainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Main::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(200),
            'subtitle'=>$this->faker->text(200),
            'intro'=>$this->faker->text(200),
            'image'=>'yuki_' .$this->faker->unique()->numberBetween(1,30) . 'png',
            'resume'=>'resume_' .$this->faker->unique()->numberBetween(1,30) . 'pdf'
        ];
    }
}
