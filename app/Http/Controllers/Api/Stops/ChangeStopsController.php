<?php

namespace App\Http\Controllers\Api\Stops;

use App\Http\Controllers\Controller;
use App\Http\Requests\FindBus\ChangeRequest;
use App\Http\Requests\FindBus\FindRequest;
use App\Models\BusRoute;
use App\Models\RouteStop;
use App\Services\ChangeRouteStopsService;
use Illuminate\Support\Facades\DB;

class ChangeStopsController extends Controller
{

    public function change(ChangeRequest $request, BusRoute $route)
    {
        $data = $request->validated();
        $stops = $data['stops'];

        // обновляем маршруты
        $result = ChangeRouteStopsService::changeStops($route, $stops);

        return response()->json(['message' => 'Маршрут автобуса успешно изменён']);
    }
}
