<?php

namespace Database\Seeders;

use App\Models\RouteArrival;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteStopArrivalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // между отановками 10 минут, на конечной +5 минут ожидания
        RouteArrival::insert([
            'id' => 1,
            'route_id' => 1,
            'stop_id' => 1,
            'arrival_time' => '09:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 2,
            'route_id' => 1,
            'stop_id' => 1,
            'arrival_time' => '11:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 3,
            'route_id' => 1,
            'stop_id' => 3,
            'arrival_time' => '09:10:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 4,
            'route_id' => 1,
            'stop_id' => 3,
            'arrival_time' => '11:15:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 5,
            'route_id' => 1,
            'stop_id' => 5,
            'arrival_time' => '09:20:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 6,
            'route_id' => 1,
            'stop_id' => 5,
            'arrival_time' => '10:25:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 7,
            'route_id' => 1,
            'stop_id' => 8,
            'arrival_time' => '09:30:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 8,
            'route_id' => 1,
            'stop_id' => 8,
            'arrival_time' => '11:35:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 9,
            'route_id' => 1,
            'stop_id' => 12,
            'arrival_time' => '09:40:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 10,
            'route_id' => 1,
            'stop_id' => 12,
            'arrival_time' => '11:45:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 11,
            'route_id' => 1,
            'stop_id' => 14,
            'arrival_time' => '09:50:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 12,
            'route_id' => 1,
            'stop_id' => 14,
            'arrival_time' => '11:55:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 13,
            'route_id' => 1,
            'stop_id' => 16,
            'arrival_time' => '10:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 14,
            'route_id' => 1,
            'stop_id' => 16,
            'arrival_time' => '12:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 15,
            'route_id' => 2,
            'stop_id' => 16,
            'arrival_time' => '10:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 16,
            'route_id' => 2,
            'stop_id' => 16,
            'arrival_time' => '12:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 17,
            'route_id' => 2,
            'stop_id' => 14,
            'arrival_time' => '10:10:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 18,
            'route_id' => 2,
            'stop_id' => 14,
            'arrival_time' => '12:20:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 19,
            'route_id' => 2,
            'stop_id' => 12,
            'arrival_time' => '10:20:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 20,
            'route_id' => 2,
            'stop_id' => 12,
            'arrival_time' => '12:30:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 21,
            'route_id' => 2,
            'stop_id' => 8,
            'arrival_time' => '10:30:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 22,
            'route_id' => 2,
            'stop_id' => 8,
            'arrival_time' => '12:40:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 23,
            'route_id' => 2,
            'stop_id' => 5,
            'arrival_time' => '10:40:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 24,
            'route_id' => 2,
            'stop_id' => 5,
            'arrival_time' => '12:50:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 25,
            'route_id' => 2,
            'stop_id' => 3,
            'arrival_time' => '10:50:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 26,
            'route_id' => 2,
            'stop_id' => 3,
            'arrival_time' => '13:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 27,
            'route_id' => 2,
            'stop_id' => 1,
            'arrival_time' => '11:00:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 28,
            'route_id' => 2,
            'stop_id' => 1,
            'arrival_time' => '13:10:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 29,
            'route_id' => 1,
            'stop_id' => 1,
            'arrival_time' => '13:10:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 30,
            'route_id' => 1,
            'stop_id' => 3,
            'arrival_time' => '13:25:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 31,
            'route_id' => 1,
            'stop_id' => 5,
            'arrival_time' => '13:35:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 32,
            'route_id' => 1,
            'stop_id' => 8,
            'arrival_time' => '13:45:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 33,
            'route_id' => 1,
            'stop_id' => 12,
            'arrival_time' => '13:55:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 34,
            'route_id' => 1,
            'stop_id' => 14,
            'arrival_time' => '14:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 35,
            'route_id' => 1,
            'stop_id' => 16,
            'arrival_time' => '14:15:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 36,
            'route_id' => 5,
            'stop_id' => 6,
            'arrival_time' => '09:05:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 37,
            'route_id' => 5,
            'stop_id' => 3,
            'arrival_time' => '09:15:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 38,
            'route_id' => 5,
            'stop_id' => 5,
            'arrival_time' => '09:25:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 39,
            'route_id' => 5,
            'stop_id' => 4,
            'arrival_time' => '09:35:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteArrival::insert([
            'id' => 40,
            'route_id' => 5,
            'stop_id' => 8,
            'arrival_time' => '09:45:00',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
