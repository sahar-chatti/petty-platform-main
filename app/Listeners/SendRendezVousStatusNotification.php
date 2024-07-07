<?php

namespace App\Listeners;

use App\Events\RendezVousStatusChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\RendezVousNotification;
class SendRendezVousStatusNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param  RendezVousStatusChanged  $event
     * @return void
     */
    public function handle(RendezVousStatusChanged $event)
    {
        $rendezVous = $event->rendezVous;

        if ($rendezVous->status == 'confirmed' || $rendezVous->status == 'canceled') {
            // Envoyer un e-mail à l'utilisateur
            Mail::to($rendezVous->user->email)->send(new RendezVousNotification($rendezVous));
        }
    }
}