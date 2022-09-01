<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings = Booking::all();
        return view('backend.booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels = Hotel::all();

        return view('frontend.detailshotel', compact('hotels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $booking = Hotel::all();
        if (!Auth::check()) {
            return redirect('login');
            flashy()->error('you have to signe in !');
        }






        Booking::create([
            'user_id' => Auth::id(),
            'hotel_id' => $request->get('hotel_id'),
            'id' => IdGenerator::generate(['table' => 'bookings', 'length' => 6, 'prefix' => date('y')]),

            'Nbrooms' => request('Nbrooms'),
            'daterange' => $request->get('daterange'),
            'total_adults' => request('total_adults'),

            'total_children' => request('total_children'),




        ]);



        // $hotel = new Hotel();

        return back()->with('success', 'Your Booking Successfully Created');


        // return redirect()->route('checkouthotel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $hotel = Hotel::find($id);
        // return view('frontend.checkouthotel', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        flashy()->warning('Booking has ben Deleted');
        return back();
    }

    public function detailsHotel($slug)
    {

        $hotels = Hotel::all();
        $users = User::all();
        $hotel = Hotel::where('slug', $slug)->first();
        // if ($hotel) {
        return view('frontend.detailshotel', compact('hotel', 'users', 'hotels'));
        // } else {
        //     return abort('404');
        // }
    }
    public function order(Request $request, $slug)
    {
        $bookings = Booking::all();

        if (Auth::check()) {
            $hotel = Hotel::where('slug', $slug)->first();

            return view('frontend.checkouthotel', compact('hotel', 'bookings'));
        } else {
            return redirect()->route('login');
        }
    }
    public function cancelation($id)
    {
        Booking::destroy($id);
        flashy()->warning('Booking has ben Deleted');
        return redirect('/');
    }
}
