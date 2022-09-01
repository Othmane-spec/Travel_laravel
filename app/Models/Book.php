<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    function user()
    {
        return $this->belongsTo(User::class);
    }

    function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
