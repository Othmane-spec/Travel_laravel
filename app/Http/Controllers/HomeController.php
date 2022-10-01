<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\BookingLineChart;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $chart = BookingLineChart::all();
        $bookings = Booking::all();
        $chart_options = [
            'chart_title' => 'Booking by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Booking',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
            'filter_field' => 'created_at',
            'chart_color' => '40, 125, 250',
            'filter_days' => 30, // show only last 30 days
        ];

        $chart = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'filter_field' => 'created_at',
            'chart_color' => '255, 0, 0',
            'filter_days' => 30, // show only last 30 days
        ];

        $chart1 = new LaravelChart($chart_options);

        return view('admine_dashbord', compact('bookings', 'chart', 'chart1'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function testimonial()
    {
        $testimonials = Testimonial::all();
        return view('admin_testimonial', compact('testimonials'));
    }

    public function destroy_testimonial($id)
    {
        Testimonial::destroy($id);
        flashy()->warning('Reviews has been deleted');
        return redirect('admin_testimonial');
    }

    public function wishlist()
    {
        return view('admin_wishlist');
    }

    public function settings()
    {
        return view('admin_settings');
    }

    // function dashbord()
    // {
    //     return view('admine_dashbord', compact('bookings'));
    // }
    public function about()
    {
        return view('about');
    }
    public function faq()
    {
        return view('faq');
    }
}
