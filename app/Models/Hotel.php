<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'adderess',
    ];

    public function room_type()
    {
        return $this->belongsTo(RoomType::class);
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'hotel_id');
    }
}
