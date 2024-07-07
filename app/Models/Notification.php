<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'titre', 'message','read_at', 'id_propriétaire', 'lu', 'notifiable_id', 'notifiable_type'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'notifiable_id');
    }
}
