<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pelanggans')->insert([
            'nama' => 'Hendri',
            'alamat' => 'Mojokerto',
            'nomorHp' => '08221549785'
        ]);   
    }
}
