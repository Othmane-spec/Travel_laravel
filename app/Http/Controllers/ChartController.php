<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingLineChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    // public function chartLine()
    // {
    //     $api = url('/chart-line-ajax');

    //     $chart = new BookingLineChart;
    //     $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])->load($api);

    //     return view('admine_dashbord', compact('chart'));
    // }
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */

    // public function chartLineAjax(Request $request)
    // {
    //     $year = $request->has('year') ? $request->year : date('Y');
    //     $bookings = Booking::select(DB::raw("COUNT(*) as count"))
    //         ->whereYear('created_at', $year)
    //         ->groupBy(DB::raw("Month(created_at)"))
    //         ->pluck('count');

    //     $chart = new BookingLineChart;

    //     $chart->dataset('New Booking Register Chart', 'line', $bookings)->options([
    //         'fill' => 'true',
    //         'borderColor' => '#51C1C0'
    //     ]);

    //     return $chart->api();
    // }
}
