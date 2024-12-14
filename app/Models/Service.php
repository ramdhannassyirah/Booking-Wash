<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;
use App\Models\Review;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    // Relasi ke bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // Relasi ke reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}

