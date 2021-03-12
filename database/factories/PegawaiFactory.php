<?php

namespace Database\Factories;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gambar' => $this->faker->imageUrl(640, 480, 'Pegawai', true),
            'nama' => $this->faker->lastName,
            'job' => $this->faker->jobTitle,
            'Keterangan' => $this->faker->realText(),
        ];
    }
}
