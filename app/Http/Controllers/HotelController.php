<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\RoomType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

// use MercurySeries\Flashy\Flashy;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();

        return view('backend.hotels.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room_types = RoomType::all();
        return view('backend.hotels.create', compact('room_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'daterange' => 'required',
            'photo' => 'required|mimes:png,jpg,JPG',
            'details' => 'required',
            'price' => 'required',
            'address' => 'required',


        ]);

        $hotel = new Hotel();
        $hotel->name = $request->name;
        $hotel->daterange = $request->daterange;


        $hotel->room_type_id = $request->room_type_id;

        $hotel->user_id = Auth::id();
        $hotel->slug = Str::slug($request->name);
        $hotel->details = $request->details;
        $hotel->price = $request->price;
        $hotel->address = $request->address;
        if ($request->hasFile('photo')) {
            $hotel->photo = $request->file('photo')->store('hotels');
        }

        $hotel->save();
        flashy()->success('Hotel is added successfully');
        return redirect()->route('hotel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel = Hotel::find(decrypt($id));

        if ($hotel) {
            return view('backend.hotels.edit', compact('hotel'));
        } else {
            flashy()->error('produit non trouvé');
            return back();
        }
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
        $request->validate([
            'name' => 'required|min:2',
            'daterange' => 'required',

            'photo' => 'required|mimes:png,jpg,JPG',
            'details' => 'required',
            'price' => 'required',
            'address' => 'required',


        ]);

        $hotel = Hotel::find($id);
        $hotel->name = $request->name;
        $hotel->daterange = $request->daterange;


        $hotel->user_id = Auth::id();
        $hotel->details = $request->details;
        $hotel->price = $request->price;
        $hotel->address = $request->address;
        if ($request->hasFile('photo')) {
            $hotel->photo = $request->file('photo')->store('hotels');
        }

        $hotel->save();
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hotel::destroy($id);
        flashy()->warning('Hotel Supprimé');
        return back();
    }
}
