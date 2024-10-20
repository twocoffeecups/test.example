<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;

    protected $table = 'bus_routes';

    public function routeStops()
    {
        return $this->hasMany(RouteStop::class, 'route_id', 'id');
    }
}
