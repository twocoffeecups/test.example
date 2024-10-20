<?php

namespace App\Services;

use App\Models\BusRoute;
use Illuminate\Support\Facades\DB;

class ChangeRouteStopsService
{
    public static function changeStops(BusRoute $route, array $stops)
    {
        DB::beginTransaction();
        // Удаляем старые остановки
        $route->routeStops()->delete();
        // Добавляем новые остановки
        foreach ($stops as $index => $stopId) {
            $seq = DB::table('route_stops')->max('id') + 1;
            DB::table('route_stops')->insert([
                'id' => $seq,
                'route_id' => $route->id,
                'stop_id' => $stopId,
                'order' => $index+1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        DB::commit();
        return true;
    }
}
