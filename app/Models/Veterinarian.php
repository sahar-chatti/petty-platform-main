<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'address',
        'gouvernement',
        'speciality',
    ];
}
