<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Routes extends Model
{
    use HasFactory;

    protected $table = 'routes';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function finalStop(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Stop::class, 'stop_id', 'id');
    }

    public function stops()
    {
        return $this->belongsToMany(Stop::class, 'route_stops', 'route_id', 'stop_id');
    }

    public function routeStops()
    {
        return $this->hasMany(RouteStop::class, 'route_id', 'id');
    }





    public static function getRouteStops($from, $to)
    {
        $from = Stop::find($from);
        $to = Stop::find($to);

        $routes = DB::table("routes")
            ->select('routes.name', 'routes.id', 'route_stops.arrival_time')
            ->join("route_stops", "routes.id", "=", "route_stops.route_id")
            ->where("route_stops.stop_id", "=", $from->id) // ID исходной остановки
            ->whereExists(function ($query) use ($from, $to) {
                $query->select(DB::raw(1))
                    ->from("route_stops")
                    ->whereRaw("route_stops.route_id = routes.id")
                    ->where("route_stops.stop_id", $to->id);
            })
            ->orderBy('route_stops.arrival_time')
            ->get();

        return $routes;
    }





    public function isThereStopOnTheRoute($stopId): bool
    {
        return $this->routeStops()->where('stop_id', $stopId)->exists();
    }

}
