<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class OrderNotification extends Model
    {
        protected $fillable = ['user_id', 'booking_id', 'status', 'is_read'];
    
        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id'); // Changer 'order_id' en 'booking_id'
    }
    }

