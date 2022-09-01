<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\Hotel;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('welcome', compact('testimonials'));
    }

    public function add_testimonials()
    {
        return view('add-testimonial');
    }

    public function save_testimonial(Request $request)
    {


        $testimonial = new Testimonial();

        $testimonial->user_id = Auth::id();
        $testimonial->name = $request->name;
        $testimonial->email = $request->email;
        $testimonial->message = $request->message;
        $testimonial->save();
        flashy()->success('Review added successfully');
        return back();
    }

    public function hotellist()
    {
        return view('hotel-list');
    }





    public function addToWishlist()
    {
        // if (Auth::check()) {
        //     $check_wishlist = Wishlist::where('hotel_id', $request->id)
        //         ->where('user_id', Auth::id())->first();
        //     if ($check_wishlist) {
        //         return -1;
        //     } else {
        //         $wish = new Wishlist();
        //         $wish->user_id = Auth::id();
        //         $wish->hotel_id = $request->id;
        //         $wish->save();
        //         return 1;
        //     }
        // } else {
        //     return 0;
        // }


        // Cart::instance('wishlist')->add($hotel_id, $hotel_name, 1, $hotel_price)->associate('App\Models\Hotel');

        $add_wishlist = Wishlist::where(['user_id' => Auth::user()->id])
            ->count();
        echo json_encode($add_wishlist);
    }
}
