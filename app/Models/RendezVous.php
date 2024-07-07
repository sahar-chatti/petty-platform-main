<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Events\RendezVousStatusChanged;


class RendezVous extends Model
{
    protected $fillable = ['status'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function veterinarian()
    {
        return $this->belongsTo(User::class, 'veterinarian_id');
    }
    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
    public function changeStatus($newStatus)
    {
        $oldStatus = $this->status;
        $this->status = $newStatus;
        $this->save();

        // Déclenchez l'événement
        event(new RendezVousStatusChanged($this, $oldStatus));
    }
}
