<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Booking;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookController extends Controller
{


    public function save_booking(Request $request)
    {

        // $book = new Book();

        // $book = User::find($id);
        // $book = Hotel::find($id);
        // $book->daterange = $request->daterange;
        // $book->total_adults = $request->total_adults;
        // $book->total_children = $request->total_children;
        // $book->order_id = $request->order_id;
        // $book->Nbrooms = $request->Nbrooms;
        // $book->save();
        // flashy()->success('Booking is added successfully');

        // $user = User::all();
        // $user->user_id = $request->user_id;
        // $user->order_id = $request->order_id;
        // $booking = new Booking();


        // $booking->Nbrooms = $request->Nbrooms;
        // $booking->daterange = $request->daterange;
        // $booking->total_adults = $request->total_adults;
        // $booking->total_children = $request->total_children;


        // if ($request->ref == 'frontend') {
        //     $booking->ref = 'frontend';
        // } else {
        //     $booking->ref = 'admin';
        // }
        // $booking->save();
        // return back();
    }

    //     public function checkout(Request $request) {
    //     $request->validate ([

    //         'address' => 'required',
    //         'phone' =>'required',

    //     ]);

    //     $user = Auth::user();
    //     $user->address = $request->address;
    //     $user->phone = $request->phone;

    //     $user->save();
    // }
}
