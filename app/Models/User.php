<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\RendezVous;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Veterinarian;
use App\Models\Animal;
use App\Models\Notification;

use Illuminate\Database\Eloquent\Model;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'role',
        'pet_name',
        'specialty',
        'vet_license',
        'gouvernement',
        

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function animals()
    {
        return $this->hasMany(Animal::class, 'user_id');
    }
    public function changedAppointments()
    {
        return $this->hasMany(RendezVous::class)->where('status', '!=', 'scheduled');
    }
    public function rdvs()
{
    return $this->hasMany(RendezVous::class);
}
public function veterinarians()
{
    return $this->belongsToMany(User::class, 'user_animal_veterinarian', 'user_id', 'veterinarian_id');
}
public function rendezVous()
{
    return $this->hasMany(RendezVous::class);
}
public function veterinarianUser(){
    return $this->belongsToMany(Veterinarian::class);
}
public function orderNotifications()
    {
        return $this->hasMany(OrderNotification::class);
    }
}
