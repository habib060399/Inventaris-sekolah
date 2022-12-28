<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'uname' => 'habib',
            'upass' => Hash::make('habib'),
            'nama' => 'habib ganteng',
            'email' => 'paijo@gmail.com',
            'level' => 1,
        ];
    }
}
