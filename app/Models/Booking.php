<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Service;
use App\Models\Payment;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'service_id', 'date', 'time_slot', 'status', 'total_price'];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // Relasi ke payment
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}

