<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'pet_name',
        'espece',
        'race',
        'sexe',
        'date_de_naissance',
        'poids',
        'photo',
        'commentaires',
        'user_id',
    ];
    public function owner()
{
    return $this->belongsTo(User::class, 'user_id');
}
    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'animal_id');
    }
    
}
