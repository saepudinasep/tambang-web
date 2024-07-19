<?php

namespace Database\Seeders\Kantor;

use App\Models\DataControl\kantor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kantorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kantor::create([
            'nama_kantor' => 'Kantor Utama',
            'jenis_kantor' => 'utama',
        ]);

        kantor::create([
            'nama_kantor' => 'Kantor Cabang',
            'jenis_kantor' => 'cabang',
        ]);
    }
}
