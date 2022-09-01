<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'hotel_id',
        'Nbrooms',
        'daterange',
        'total_adults',
        'total_children',


    ];
    public $incrementing = false;


    function user()
    {
        return $this->belongsTo(User::class);
    }

    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
