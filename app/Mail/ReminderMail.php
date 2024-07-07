<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $appointment;

    public function __construct(RendezVous $appointment)
    {
        $this->appointment = $appointment;
    }

    public function build()
    {
        return $this->view('user.email_reminder')
                    ->subject('Rappel de rendez-vous')
                    ->with([
                        'appointment' => $this->appointment,
                    ]);
    }
}
