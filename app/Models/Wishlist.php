<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Model
{
    use HasFactory;

    public static function countWishlist($hotel_id)
    {
        $countWishlist = Wishlist::where([
            'user_id' => Auth::user()->id,
            'hotel_id' => $hotel_id
        ])->count();
        return $countWishlist;
    }
}
