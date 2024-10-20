<?php

namespace App\Http\Controllers\Api\Bus;

use App\Http\Controllers\Controller;
use App\Http\Requests\FindBus\FindRequest;
use App\Http\Resources\RouteResource;
use App\Http\Resources\StopResource;
use App\Models\BusRoute;
use App\Models\RouteStop;
use App\Models\Stop;
use App\Services\FindBusService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FindController extends Controller
{

    public function find(FindRequest $request)
    {
        $data = $request->validated();
        $from = Stop::find($data['from']);
        $to = Stop::find($data['to']);

        // если остановок не сущействует в БД
        if($from==null || $to==null){
            return response()->json([
                'message' => 'Ошибка. Указанный маршрут не найден.'
            ], 404);
        }

        // получаем все маршруты и ближайшее время идущие между остановками
        $buses = FindBusService::findBus($from, $to);

        // если остановки существуют, но между ними не ходит автобусов
        if($buses == null){
            return response()->json([
                'message' => 'Между указанными вами остановками не проходит не одного автобуса.'
            ]);
        }
        // если автобусы найденны
        return response()->json([
            'from' => $from->name,
            'to' => $to->name,
            'buses' => $buses,
        ]);
    }
}
