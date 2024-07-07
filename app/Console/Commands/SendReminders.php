<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\RendezVous;
use Carbon\Carbon;
use Mail;
use App\Mail\ReminderMail;

class SendReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Send reminders for upcoming appointments';

    public function handle()
    {
        // Recherche des rendez-vous approchant dans les trois prochains jours
        $upcomingAppointments = RendezVous::whereDate('date', '>=', Carbon::now())
            ->whereDate('date', '<=', Carbon::now()->addDays(3))
            ->where('is_reminder_sent', false)
            ->get();

        foreach ($upcomingAppointments as $appointment) {
            // Vérification de l'e-mail de l'utilisateur
            if ($appointment->user->email) {
                // Envoi de l'e-mail de rappel à l'utilisateur
                Mail::to($appointment->user->email)->send(new ReminderMail($appointment));

                // Marquer le rendez-vous comme étant rappelé
                $appointment->is_reminder_sent = true;
                $appointment->save();
            }
        }

        $this->info('Reminders sent successfully.');
    }
}
