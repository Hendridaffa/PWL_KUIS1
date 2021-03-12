<?php

namespace Database\Factories;

use App\Models\Penyedia;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenyediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penyedia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'alamat' => $this->faker->address,
            'keterangan' => $this->faker->realText(),
        ];
    }
}
