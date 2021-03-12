<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = ['Market Analyst', 'Financial Data', 'Accounting Service', 'Overall Evaluation'];
        $keterangan = ['Jasa untuk menganalisis market', 'Jasa untuk financial data', 'jasa untuk accounting',
        'jasa untuk evaluasi'];

        for ($i=0; $i < 4; $i++) { 
            DB::table('Services')->insert([
                'Service' => $service[$i],
                'Keterangan' => $keterangan[$i]
            ]);   
        }
    }
}
