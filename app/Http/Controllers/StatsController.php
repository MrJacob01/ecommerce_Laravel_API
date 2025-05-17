<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\LazyCollection;

class StatsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function ordersCount(Request $request)
    {
        $to = Carbon::now();
        $from = Carbon::now()->subMonth();

        if ($request->has(['from', 'to']))
        {
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(null, 
            Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', '005')
                ->count());
    }


    public function deleveryMethodRatios(Request $request)
    {

        $to = Carbon::now();
        $from = Carbon::now()->subMonth();
        $delevery = Order::query()
            ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
            ->select('delivery_method_id', DB::raw('COUNT(*) as total'))
            ->groupBy('delivery_method_id')
            ->get();
        return $this->response(null, $delevery);
    }

    public function statusByType(Request $request)
    {
        $to = Carbon::now();
        $from = Carbon::now()->subMonth();

        $status_ratio = DB::table('orders')
            ->join('statuses', 'orders.status_id', '=', 'statuses.id')
            ->whereBetween('orders.created_at', [$from, $to->endOfDay()])
            ->select('orders.status_id', 'statuses.name', DB::raw('COUNT(*) as total'))
            ->groupBy('orders.status_id', 'statuses.name')
            ->get();

        return $this->response(null, [$status_ratio]);

    }


    public function ordersCountByDays(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        $days = CarbonPeriod::create($from, $to);
        $response = new Collection();

        LazyCollection::make($days->toArray())->each(function ($day) use ($from, $to, $response) {

            $count = Order::query()
                ->whereBetween('created_at', [$day->startOfDay(), $day->endOfDay()])
                ->whereRelation('status', 'code', 'closed')
                ->count();

            $response[] = [
                'date' => $day->format('Y-m-d'),
                'orders_count' => $count,
            ];
        });

        return $this->response($response);
    }
}
