<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\URL;
use Illuminate\Notifications\Notifiable;
use App\Models\RendezVous;


class AppointmentStatusChanged extends Notification
{
    public $appointment;

    public function __construct(RendezVous $appointment)
    {
        $this->appointment = $appointment;
    }

    public function via($notifiable)
    {
        return ['mail']; 
    }

    public function toMail($notifiable)
    {
        $appointment = $this->appointment;
        $url = URL::route('rendezvous.show', $appointment->id); 

        $status = $appointment->status;
        $statusText = $status === 'confirmed' ? 'confirmé' : 'annulé'; // Customize text based on your language

        return (new MailMessage)
                    ->subject("Votre rendez-vous vétérinaire a été $statusText")
                    ->line("Bonjour $notifiable->name,", true)
                    ->line("Le statut de votre rendez-vous vétérinaire pour votre animal $appointment->pet_name a été mis à jour.")
                    ->line("Nouveau statut : **$statusText**")
                    ->action('Voir le rendez-vous', $url);
    }

   // public function toDatabase($notifiable)
 //   {
   //     $url = URL::route('appointments.index'); // Assurez-vous d'ajuster le nom de la route selon votre configuration
    
    //    return [
   //         'message' => 'Le statut de votre rendez-vous a été mis à jour.',
    //        'url' => $url
   //     ];
   // }
    

}
