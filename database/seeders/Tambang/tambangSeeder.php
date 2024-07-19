<?php

namespace Database\Seeders\Tambang;

use App\Models\DataControl\tambang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tambangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tambang::create([
            'nama_tambang' => 'Tambang 1',
        ]);

        tambang::create([
            'nama_tambang' => 'Tambang 2',
        ]);

        tambang::create([
            'nama_tambang' => 'Tambang 3',
        ]);

        tambang::create([
            'nama_tambang' => 'Tambang 4',
        ]);

        tambang::create([
            'nama_tambang' => 'Tambang 5',
        ]);

        tambang::create([
            'nama_tambang' => 'Tambang 6',
        ]);
    }
}
