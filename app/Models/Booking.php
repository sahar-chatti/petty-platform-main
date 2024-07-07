<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propriétaire;
use App\Models\Vétérinaire;
use App\Models\Produit;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'bookings';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'propriétaire_id',
        'vétérinaire_id',
        'produit_id',
        'qunatity', 
        'booking_status',
     
    ];

    // Define relationships with other models
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function propriétaire()
    {
        return $this->belongsTo(Propriétaire::class, 'propriétaire_id');
    }

    public function vétérinaire()
    {
        return $this->belongsTo(Vétérinaire::class, 'vétérinaire_id');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
   

    public function orderNotifications()
    {
        return $this->hasMany(OrderNotification::class);
    }

}
