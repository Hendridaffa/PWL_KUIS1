<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gambar = ["assets/images/team_01.jpg","assets/images/team_02.jpg","assets/images/team_03.jpg"];
        $nama = ["William Smith", "Mary Housten", "Paul Walker"];
        $job = ["Co-Founder", "Chief Marketing Officer", "Financial Analyst"];
        $keterangan = ['pemilik perusahaan', 'Kepala pemasaran', 'analis keuangan'];

        for ($i=0; $i < 3; $i++) { 
            DB::table('Pegawais')->insert([
                'gambar' => $gambar[$i],
                'nama' => $nama[$i],
                'job'  => $job[$i],
                'Keterangan' => $keterangan[$i]
            ]);   
        }
    }
}
