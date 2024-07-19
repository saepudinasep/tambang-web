<?php

namespace Database\Seeders\Account;

use App\Models\Account\account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class accountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        account::create([
            'id' => Str::uuid(),
            'name' => 'Developer',
            'email' => 'dev@dev.com',
            'password' => bcrypt('dev12345'),
            'role' => 1,
        ]);

        account::create([
            'id' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 2,
        ]);

        account::create([
            'id' => Str::uuid(),
            'name' => 'Kepala-Kantor',
            'email' => 'kepalaKantor@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 3,
        ]);

        account::create([
            'id' => Str::uuid(),
            'name' => 'Pool',
            'email' => 'pool@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 4,
        ]);

        account::create([
            'id' => Str::uuid(),
            'name' => 'Service',
            'email' => 'service@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 5,
        ]);
    }
}
