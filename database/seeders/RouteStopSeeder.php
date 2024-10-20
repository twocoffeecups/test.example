<?php

namespace Database\Seeders;

use App\Models\BusRoute;
use App\Models\RouteStop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RouteStopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RouteStop::insert([
            'id' => 1,
            'route_id' => 1,
            'stop_id' => 1,
            'order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 2,
            'route_id' => 1,
            'stop_id' => 3,
            'order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 3,
            'route_id' => 1,
            'stop_id' => 5,
            'order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 4,
            'route_id' => 1,
            'stop_id' => 8,
            'order' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 5,
            'route_id' => 1,
            'stop_id' => 12,
            'order' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 6,
            'route_id' => 1,
            'stop_id' => 14,
            'order' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 7,
            'route_id' => 1,
            'stop_id' => 16,
            'order' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //  другую сторону
//        RouteStop::insert([
//            'id' => 8,
//            'route_id' => 1,
//            'stop_id' => 16,
//            'order' => 1,
//            'direction' => 'backward',               // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//        RouteStop::insert([
//            'id' => 9,
//            'route_id' => 1,
//            'stop_id' => 14,
//            'order' => 2,
//            'direction' => 'backward',               // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//        RouteStop::insert([
//            'id' => 10,
//            'route_id' => 1,
//            'stop_id' => 12,
//            'order' => 3,
//            'direction' => 'backward',              // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//        RouteStop::insert([
//            'id' => 11,
//            'route_id' => 1,
//            'stop_id' => 8,
//            'order' => 4,
//            'direction' => 'backward',              // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//        RouteStop::insert([
//            'id' => 12,
//            'route_id' => 1,
//            'stop_id' => 5,
//            'order' => 5,
//            'direction' => 'backward',               // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//        RouteStop::insert([
//            'id' => 13,
//            'route_id' => 1,
//            'stop_id' => 3,
//            'order' => 6,
//            'direction' => 'backward',              // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
//        RouteStop::insert([
//            'id' => 14,
//            'route_id' => 1,
//            'stop_id' => 1,
//            'order' => 7,
//            'direction' => 'backward',               // TODO: удалить?
//            'created_at' => now(),
//            'updated_at' => now(),
//        ]);
        RouteStop::insert([
            'id' => 8,
            'route_id' => 2,
            'stop_id' => 16,
            'order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 9,
            'route_id' => 2,
            'stop_id' => 14,
            'order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 10,
            'route_id' => 2,
            'stop_id' => 12,
            'order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 11,
            'route_id' => 2,
            'stop_id' => 8,
            'order' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 12,
            'route_id' => 2,
            'stop_id' => 5,
            'order' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 13,
            'route_id' => 2,
            'stop_id' => 3,
            'order' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 14,
            'route_id' => 2,
            'stop_id' => 1,
            'order' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        //
        RouteStop::insert([
            'id' => 15,
            'route_id' => 5,
            'stop_id' => 6,
            'order' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 16,
            'route_id' => 5,
            'stop_id' => 3,
            'order' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 17,
            'route_id' => 5,
            'stop_id' => 5,
            'order' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 18,
            'route_id' => 5,
            'stop_id' => 4,
            'order' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        RouteStop::insert([
            'id' => 19,
            'route_id' => 5,
            'stop_id' => 8,
            'order' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
