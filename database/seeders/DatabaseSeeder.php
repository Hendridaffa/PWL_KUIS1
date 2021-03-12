<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\Service;
use Illuminate\Database\Seeder;

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
        $this->call([
            ServiceSeeder::class,
            PelangganSeeder::class,
        ]);
        Service::factory(25)->create();
        Pelanggan::factory(30)->create();

    }
}
