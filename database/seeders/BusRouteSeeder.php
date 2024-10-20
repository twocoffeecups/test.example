<?php

namespace Database\Seeders;

use App\Models\BusRoute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusRouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusRoute::insert([
            'id' => 1,
            'name' => 'Автобус №95',
            'last_stop_id' => 16,
            'direction' => 'forward',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        BusRoute::insert([
            'id' => 2,
            'name' => 'Автобус №95',
            'last_stop_id' => 1,
            'direction' => 'backward',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        BusRoute::insert([
            'id' => 3,
            'name' => 'Автобус №111',
            'last_stop_id' => 11,
            'direction' => 'forward',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        BusRoute::insert([
            'id' => 4,
            'name' => 'Автобус №111',
            'last_stop_id' => 1,
            'direction' => 'backward',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        BusRoute::insert([
            'id' => 5,
            'name' => 'Автобус №27',
            'last_stop_id' => 8,
            'direction' => 'forward',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
