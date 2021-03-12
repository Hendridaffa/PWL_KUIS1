<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Penyedia;
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
            PegawaiSeeder::class,
            PenyediaSeeder::class,
        ]);
        Service::factory(25)->create();
        Pelanggan::factory(30)->create();
        Pegawai::factory(20)->create();
        Penyedia::factory(35)->create();

    }
}
