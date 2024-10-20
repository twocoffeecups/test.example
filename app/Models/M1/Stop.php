<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stop111 extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'stops';

    public function routes()
    {
        return $this->belongsToMany(Routes::class, 'route_stops', 'stop_id', 'route_id');
    }

    public function arrivals()
    {
        return $this->hasMany(RouteStop::class, 'stop_id', 'id');
    }

    public function buses()
    {
        return 1;
    }
}
