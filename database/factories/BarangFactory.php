<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode' => $this->faker->randomNumber(5, true),
            'nmBrg' => $this->faker->word(),
            'satuan' => $this->faker->word(),
            'hrgBeli' => $this->faker->randomNumber(6, true),
            'stock' => $this->faker->word(),
            'ket' => $this->faker->words(3, true),
            'status' => $this->faker->word(),
            'merk' => $this->faker->word(),
            'tahun_pembuatan' => $this->faker->date('Y')
        ];
    }
}
