<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class VeterinarianUser extends Model
{
    protected $table = 'user_animal_veterinarian';

    protected $fillable = [
        'animal_id', 'veterinarian_id' ,'user_id'
    ];
    public function petOwner()
{
    return $this->belongsTo(User::class, 'user_id');
}

public function animal()
{
    return $this->belongsTo(Animal::class, 'animal_id');
}
public function veterinarians()
    {
        return $this->belongsToMany(User::class, 'user_animal_veterinarian', 'animal_id', 'veterinarian_id');
    }
}
