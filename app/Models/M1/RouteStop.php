<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteStop1111 extends Model
{
    use HasFactory;

    public function routes()
    {
        return $this->belongsTo(Routes::class, 'route_id');
    }

    public function stops()
    {
        return $this->hasMany(Stop::class, 'stop_id', 'id');
    }
}
