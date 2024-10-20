<?php

namespace Database\Seeders;

use App\Models\Stop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stop::insert([
            'id' => 1,
            'name' => 'Остановка №1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 2,
            'name' => 'Остановка №2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 3,
            'name' => 'Остановка №3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 4,
            'name' => 'Остановка №4',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 5,
            'name' => 'Остановка №5',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 6,
            'name' => 'Остановка №6',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 7,
            'name' => 'Остановка №7',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 8,
            'name' => 'Остановка №8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 9,
            'name' => 'Остановка №9',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 10,
            'name' => 'Остановка №10',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 11,
            'name' => 'Остановка №11',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 12,
            'name' => 'Остановка №12',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 13,
            'name' => 'Остановка №13',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 14,
            'name' => 'Остановка №14',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 15,
            'name' => 'Остановка №15',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Stop::insert([
            'id' => 16,
            'name' => 'Остановка №16',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
