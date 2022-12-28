<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBarang;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        ModelBarang::factory(20)->create();
        User::factory(1)->create();
    }
}
