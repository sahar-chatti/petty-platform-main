<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Intervention extends Model
{
    protected $table = 'interventions_medicales';
    protected $fillable = [
        'dateIntervention',
        'type',
        'id_proprietaire',
        'id_animal',
        'id_vétérinaire',  // Assurez-vous que cette colonne est correctement nommée dans votre table
        'commentaire',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

    public function veterinaire()
    {
        return $this->belongsTo(User::class, 'id_vétérinaire');
    }
}
