<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteStop extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $fillable = ['route_id', 'stop_id', 'order', 'direction', 'created_at', 'updated_at'];
}
