<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenyediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Penyedias')->insert([
            'company' => 'jasarahaja',
            'alamat' => 'jl.wachid hasyim no 4 kec.bululawang kab.malang',
            'keterangan' => 'penyedia jasa layanan keuangan pertama sejak indonesia merdeka'
        ]);   
    }
}
