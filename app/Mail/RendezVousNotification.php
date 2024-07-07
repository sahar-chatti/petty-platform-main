<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

use App\Models\RendezVous;

class RendezVousNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $rendezVous;

    /**
     * Create a new message instance.
     */
    public function __construct(RendezVous $rendezVous)
    {
        $this->rendezVous = $rendezVous;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = URL::route('rendezvous.show', $this->rendezVous->id);
        
        $status = $this->rendezVous->status;
        $statusText = $status === 'confirmed' ? 'confirmé' : 'annulé'; // Personnalisez le texte selon votre langue

        return $this->subject("Votre rendez-vous vétérinaire a été $statusText")
                    ->greeting("Bonjour " . Auth::user()->name . ",")
                    ->line("Le statut de votre rendez-vous vétérinaire pour votre animal {$this->rendezVous->pet_name} a été mis à jour.")
                    ->line("Nouveau statut : **$statusText**")
                    ->action('Voir le rendez-vous', $url)
                    ->line("Merci de faire confiance à notre service de rendez-vous vétérinaire.");
    }
}
