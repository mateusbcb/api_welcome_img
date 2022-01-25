<?php

namespace Database\Factories;

use App\Models\Welcome;
use Illuminate\Database\Eloquent\Factories\Factory;

class WelcomeFactory extends Factory
{
    protected $model = Welcome::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'    => implode(',',$this->faker->randomElements(['Bom Dia', 'Boa Tarde', 'Boa Noite'])),
            'phrase'    => $this->faker->text(),
            'image'     => 'https://picsum.photos/id/'.$this->faker->numberBetween(1, 100).'/1920/1080.jpg',
            'url'       => 'https://picsum.photos/id/'.$this->faker->numberBetween(1, 100).'/1920/1080.jpg',
            'pediod'    => $this->faker->randomDigit(),
            'category'  => implode(',', $this->faker->randomElements(['Arte', 'design', 'light', 'blur'])),
            'keyword'   => json_encode($this->faker->randomElements(['arte, consept', 'desigin', 'fun', 'dream', 'light, blur', 'human, consept, color'])),
        ];
    }
}
