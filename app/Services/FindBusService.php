<?php

namespace App\Services;

use App\Models\Stop;
use Illuminate\Support\Facades\DB;

class FindBusService
{
    public static function findBus(Stop $from, Stop $to)
    {
        // В качестве текущего времени представим что сейчас 8:55
        //$current_time = Carbon::now()->toTimeString();
        $current_time = "08:55:00";

        // поиск данных бд
        $buses = DB::table('route_arrivals as a')
            ->join('route_stops as rs_from', 'a.route_id', '=', 'rs_from.route_id')     // соединяем таблицы
            ->join('route_stops as rs_to', 'a.route_id', '=', 'rs_to.route_id')         // соединяем таблицы
            ->join('bus_routes as r', 'a.route_id', '=', 'r.id')                        // соединяем таблицы
            ->join('stops as stop', 'r.last_stop_id', '=', 'stop.id')                   // соединяем таблицы
            ->where('rs_from.stop_id', $from->id)
            ->where('rs_to.stop_id', $to->id)
            ->whereColumn('rs_from.order', '<', 'rs_to.order')                  // проверяем маршрут (параметр order остановки from(начальной) не может быть больше чем у остановки to(конечной))
            ->where('a.arrival_time', '>=', $current_time)                          // время либо такоеже, либо больше
            ->where('a.stop_id', '=', $from->id)                                    // остановки у которых указанно время прибытия
            ->distinct()                // исключаем дубликаты
            ->get([
                DB::raw("CONCAT(r.name, ' в сторону ', stop.name) as route"), 'a.arrival_time' // соединяем название маршрута с названием его конечной остановки и выводим вместе со временем прибытия
            ])
            ->groupBy('route'); // групируем по названию маршрута

        // Преобразуем результаты в нужный формат
        $result = [];
        // форматируем данные в массиве
        foreach ($buses as $route => $times) {
            $result[] = [
                'route' => $route,
                'arrival_time' => $times->pluck('arrival_time')->toArray()
            ];
        }
        if (count($result) === 1) {
            $result = $result[0];
        }

        return $result;
    }
}
