<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function placeorder(Request $request)
    {
        $request->validate([


            'phone' => 'required',
            'name' => 'required',
            'email' => 'required',


        ]);
        $user = Auth::user();

        $user->phone = $request->phone;
        $user->email = $request->email;
    }
}
