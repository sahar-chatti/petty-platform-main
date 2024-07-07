<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\User;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OrderNotification;

class BookingController extends Controller
{
    public function showProduit()
{
    $produit = Produit::first(); 
    return view('home.produit', ['produit' => $produit]);
}
public function bookProduct(Request $request)
{
    if (Auth::check()) {
        // Valider les données de la requête entrante
        $validatedData = $request->validate([
            'email' => 'required|email',
            'quantity' => 'required|integer|min:1', 
            'produit_id' => 'required|integer',
        ]);
    
        // Récupérer l'utilisateur basé sur l'e-mail fourni
        $user = User::where('email', $validatedData['email'])->first();
    
        // Vérifier si l'utilisateur existe
        if (!$user) {
            return redirect()->back()->with('error', 'Utilisateur inconnu!');
        }
    
        // Créer une nouvelle réservation
        $booking = new Booking();
        $booking->user_id = $user->id;
        $booking->produit_id = $validatedData['produit_id'];
        $booking->quantity = $validatedData['quantity'];
    
        // Enregistrer la réservation
        $booking->save();
    
      
    
        return redirect('/')->with('success', 'Commande passée avec succès!');
    } else {
        return redirect('login')->with('error', 'Veuillez vous connecter d\'abord');
    }
    
}
public function list()
{
    // Récupérer toutes les réservations de l'utilisateur connecté
    $bookings = Booking::where('user_id', auth()->id())->get();
    
    // Retourner la vue avec les données des réservations
    return view('user.mesCommandes', compact('bookings'));
}
public function listOrders()
{
    // Récupérer toutes les réservations de l'utilisateur connecté
    $bookings = Booking::where('user_id', auth()->id())->get();
    
    // Retourner la vue avec les données des réservations
    return view('veto.orders', compact('bookings'));
}
}


