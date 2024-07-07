<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Animal;
use App\Models\RendezVous;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Booking;
use App\Notifications\AppointmentStatusChanged;
use Carbon\Carbon;
use App\Models\Notification;
use App\Models\OrderNotification;
use App\Events\RendezVousStatusChanged;


class AppointmentController extends Controller
{
    public function ajoutRdv(Request $req)
    {
        if (Auth::check()) {
                // Retrieve the user's ID
                $userId = Auth::id();

                // Retrieve the user's email
                $email = Auth::user()->email;
                 // Split the selected value to get veterinarian ID and name
                 $selectedOption = explode('|', $req->input('veterinarian_id'));
                 $veterinarianId = $selectedOption[0];
                 $veterinarianName = $selectedOption[1];
        
                // Find the animal ID based on its name and the user's ID
                $animal = Animal::where('user_id', $userId)
                                ->where('pet_name', $req->pet_name)
                                ->first();
  
                // Check if the animal exists
                if ($animal) {
                    // Create a new RendezVous instance
                    $rdv = new RendezVous;
        
                    // Assign values to the RendezVous instance
                    $rdv->appointment_datetime = $req->appointment_datetime;
                    $rdv->user_id = $userId;
                    $rdv->email = $email;
                    $rdv->animal_id = $animal->id; // Assign the found animal's ID
                    $rdv->veterinarian_id = $veterinarianId;
                    $rdv->veterinarian_name = $veterinarianName;
                    $rdv->pet_name = $req->pet_name;
                    $rdv->pet_species = $req->pet_species;
                    $rdv->pet_breed = $req->pet_breed;
                    $rdv->reason = $req->reason;
                    $rdv->notes = $req->notes;
                    $rdv->status = $req->status;
        
                    // Save the RendezVous instance
                    $rdv->save();
        
                    // Redirect to the desired page with a success message
                    return redirect()->back()->with('message', 'Votre demande est envoyée avec succès!');
                } else {
                    // Redirect with an error message if the animal is not found
                    return redirect()->back()->with('error', 'L\'Animal n\'est pas enregistrer');
                }}else{
                    return redirect('login')->with('error', 'Vous devez être connecté pour effectuer cette action');
                }
            }

    public function loadVeterinarians()
            {
                $veterinarians = User::where('role', 'veterinarian')->get();
                return view('home.appointment', compact('veterinarians'));
            }

    public function getRdvForVeterinarian(Request $request)
            {
    
                if (Auth::check()) {
        
        $veterinarianId = Auth::id();
        
        $rdvs = RendezVous::where('veterinarian_id', $veterinarianId)->get();
       
        return view('veto.dashboard_principal', ['rdvs' => $rdvs]);
    } else {
       
        return redirect('login')->with('error', 'Vous devez être connecté pour effectuer cette action');
    }
}


public function recentAppointments()
{
    if (Auth::check() && Auth::user()->role === 'veterinarian') {
        $veterinarianId = Auth::id();
        $rdvs = RendezVous::where('veterinarian_id', $veterinarianId)
        ->where('status', 'scheduled')
        ->get();
        // Récupérer la date d'aujourd'hui
        $aujourdhui = Carbon::today();

        $rdvsDuJour = RendezVous::where('veterinarian_id', $veterinarianId)
            ->whereDate('appointment_datetime', $aujourdhui)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return ['rdvs' => $rdvs, 'rdvsDuJour' => $rdvsDuJour];
    } else {
        return null; // Ou une autre indication qu'aucun rendez-vous n'est disponible
    }
} 

public function updateStatus(Request $request, RendezVous $rdv)
{

    if (Auth::user()->role !== 'veterinarian') {
        return back()->with('error', 'Vous n\'êtes pas autorisé à effectuer cette action.');
    }

    $request->validate([
        'status' => 'required|in:approuve,refuse',
    ]);

    $newStatus = $request->status === 'approuve' ? 'confirmed' : 'canceled';
    $rdv->changeStatus($newStatus); 

    return back()->with('success', 'Statut du rendez-vous mis à jour avec succès.');
}

public function index()
{
    if (Auth::check() && Auth::user()->role === 'pet_owner') {
        $userId = Auth::id();
        $rdvs = RendezVous::where('user_id', $userId)
        ->orderBy('appointment_datetime', 'desc')
        ->get();
        return view('user.myappointments')->with('rdvs', $rdvs);
    } else {
        return redirect()->route('login');
    }
}
public function show($id)
{
    $rdv = RendezVous::find($id);

    if (!$rdv) {
        abort(404); // Ou redirigez vers une page d'erreur
    }

    if ($rdv->status === 'scheduled') {
        $rdv->is_read = false;
    } else {
        $rdv->is_read = true;
    }

    $rdv->save();

    return view('user.appointment_details', ['rdv' => $rdv]);
}
public function showVeto($id)
{
    $rdv = RendezVous::find($id);

    if (!$rdv) {
        abort(404); 
    }

    $rdv->is_read = true;
    $rdv->save();

    return view('veto.Veto-appointment_details', ['rdv' => $rdv]);
}

public function checkAppointments()
{
    // Vérifier si l'utilisateur est connecté et son rôle
    if (Auth::check() && Auth::user()->role === 'pet_owner') {
        $userId = Auth::id();
                $changedAppointments = RendezVous::where('user_id', $userId)
            ->where('is_read', false) // Filtrer les rendez-vous non lus
            ->get(['id', 'status','pet_name']);
        // Marquer les rendez-vous comme lus
        foreach ($changedAppointments as $appointment) {
            $appointment->is_read = true;
            $appointment->save();
        }
        // Retourner les données au format JSON
        return response()->json([
            'changedAppointments' => $changedAppointments,
        ]);
    } else {
        // Rediriger si l'utilisateur n'est pas connecté ou n'a pas le rôle approprié
        return response()->json([
            'error' => 'Unauthorized',
        ], 401);
    }
}

public function checkOrders()
{
    // Vérifier si l'utilisateur est connecté et son rôle
    if (Auth::check() && Auth::user()->role === 'pet_owner') {
        $userId = Auth::id();
        
        // Récupérer les notifications de commandes non lues de l'utilisateur avec les statuts 'confirmed' ou 'canceled'
        $unreadOrders = OrderNotification::where('user_id', $userId)->
        whereIn('status', ['confirmed', 'canceled'])
        ->get(['id', 'message', 'status']);
    
            
        // Marquer les notifications de commandes comme lues
        foreach ($unreadOrders as $order) {
            $order->is_read = true; // Mettre à jour le statut de lecture
            $order->save();
        }
        
        // Retourner les notifications de commandes au format JSON
        return response()->json([
            'unreadOrders' => $unreadOrders,
        ]);
    } else {
        // Rediriger si l'utilisateur n'est pas connecté ou n'a pas le rôle approprié
        return response()->json([
            'error' => 'Unauthorized',
        ], 401);
    }
}
public function read($notificationId, $bookingId)
{
    $notification = OrderNotification::findOrFail($notificationId);
    
    // Vérifier si l'utilisateur a la permission de lire cette notification
    if ($notification->user_id !== auth()->id()) {
        return redirect()->back()->with('error', 'Vous n\'avez pas la permission d\'accéder à cette notification.');
    }

    // Marquer la notification comme lue
    $notification->is_read = true;
    $notification->save();

    // Rediriger l'utilisateur vers la page des détails de la commande
    return redirect()->route('bookings.show', ['id' => $bookingId]);
}
public function showOrder($id)
{
    // Retrieve the booking record based on the provided ID
    $booking = Booking::findOrFail($id);

    // Check if the booking belongs to the authenticated user
    if ($booking->user_id !== auth()->id()) {
        return redirect()->back()->with('error', 'Vous n\'avez pas la permission d\'accéder à cette réservation.');
    }

    // Retrieve the notification related to this booking for the authenticated user
    $notification = OrderNotification::where('booking_id', $id)
                                      ->where('user_id', auth()->id())
                                      ->where('is_read', false)
                                      ->first();

    if ($notification) {
        // Check if the booking status is confirmed or canceled
        if (in_array($booking->booking_status, ['confirmed', 'canceled'])) {
            // Mark the notification as read if the status is confirmed or canceled
            $notification->is_read = true;
            $notification->save();
        }
    }

    // Return the view with the booking details
    return view('user.booking_details', ['booking' => $booking]);
}
public function updateOrderStatus(Booking $booking)
{
    // Vérifier si le statut de la réservation a été modifié et s'il est passé à "confirmed" ou "canceled"
    if ($booking->isDirty('status') && in_array($booking->status, ['confirmed', 'canceled'])) {
        // Mettre à jour le statut correspondant dans OrderNotifications
        OrderNotification::where('booking_id', $booking->id)
            ->update(['status' => $booking->status]);
    }
}

public function markAppointmentsAsRead()
{
    $user = auth()->user();
    $changedAppointments = $user->changedAppointments()->where('is_read', false)->get();

    foreach ($changedAppointments as $appointment) {
        $appointment->is_read = true;
        $appointment->save();
    }
}

public function myAppointments()
{
    if (Auth::check() && Auth::user()->role === 'veterinarian') {
        $veterinarianId = Auth::id();

    $rdvs = RendezVous::where('veterinarian_id', $veterinarianId)
    ->orderBy('created_at', 'desc')
    ->get();
    $animals = [];
    foreach ($rdvs as $rdv) {
        $animals[] = $rdv->animal;
    }
    // Passer les rendez-vous à la vue
    return view('veto.myappointements', ['rdvs' => $rdvs, 'animals' =>$animals]);
}else  {     
       return redirect()->route('login')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
}      

}

public function update(Request $request, $id)
{
    // Find the rendez-vous by ID
    $rdv = RendezVous::findOrFail($id);

    // Update the rendez-vous status based on the submitted form data
    $status = $request->input('status');

    if ($status === 'canceled') {
        $rdv->status = 'canceled';
    } elseif ($status === 'completed') {
        $rdv->status = 'completed';
    }

    // Save the changes
    $rdv->save();

    // Redirect back or to another page as needed
    return redirect()->back()->with('success', 'Appointment status updated successfully.');
}

public function history()
{
    if (Auth::check() && Auth::user()->role === 'veterinarian') {
        $veterinarianId = Auth::id();
    $historyRdvs = RendezVous::where('veterinarian_id', $veterinarianId)
    ->whereIn('status', ['completed'])
    ->orderBy('created_at', 'desc')
    ->get();
    
        
    // Passer les rendez-vous à la vue d'historique
    return view('veto.historique', ['historyRdvs' => $historyRdvs]);
}}



}
