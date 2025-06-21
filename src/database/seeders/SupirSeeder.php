<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supir;


class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supir::create([
        'nama' => 'Budi',
        'nomor_sim' => 'SIM12345678',
        'telepon' => '08123456789'
    ]);

    $Supir = supir::first();
    echo $Supir->sim;
    }
}
