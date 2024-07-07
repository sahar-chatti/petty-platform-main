<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Animal;
use App\Models\RendezVous;


class VeterinarianController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('veto.doctor-profil', compact('user'));
    }

    public function updateProfile(Request $request)
{
    // Récupérer l'utilisateur connecté
    $user = Auth::user();

    // Valider les données du formulaire
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email'=>'required|string',
        'phone' => 'required|string',
        'address' => 'required|string',
        'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        
        
    ]);

    if ($request->hasFile('profile_photo')) {
        // Récupérer le fichier téléchargé
        $profilePhoto = $request->file('profile_photo');

        // Générer un nom unique pour le fichier
        $fileName = time() . '_' . $profilePhoto->getClientOriginalName();

        // Déplacer le fichier vers le dossier de destination
        $profilePhoto->move(public_path('uploads/profile_photos'), $fileName);

        // Mettre à jour le chemin de la photo de profil dans la base de données
        $user->profile_photo = 'uploads/profile_photos/' . $fileName;
    }

    // Mettre à jour les informations du profil de l'utilisateur
    $user->full_name = $request->input('full_name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');
    $user->address = $request->input('address');

    

    $user->save();

    return redirect()->back()->with('success', 'Profil mis à jour avec succès!');
}
public function index()
{
    $veterinarians = User::where('role', 'veterinarian')->get();
    return view('home.alldocs', compact('veterinarians'));
}


public function create()
{

    // Fetch users with role "pet_owner"
    $users = User::where('role', 'pet_owner')->get();

    // Pass users data to the view
    return view('veto.add-patient', ['users' => $users]);
}



/////////////////////////////////////////////////////////
public function showProfileUser()
{
    $user = Auth::user();
    return view('user.user_profile', compact('user'));
}

public function updateProfileUser(Request $request)
{
// Récupérer l'utilisateur connecté
$user = Auth::user();

// Valider les données du formulaire
$request->validate([
    'full_name' => 'required|string|max:255',
    'email'=>'required|string',
    'phone' => 'required|string',
    'address' => 'required|string',
    'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    
    
]);

if ($request->hasFile('profile_photo')) {
    // Récupérer le fichier téléchargé
    $profilePhoto = $request->file('profile_photo');

    // Générer un nom unique pour le fichier
    $fileName = time() . '_' . $profilePhoto->getClientOriginalName();

    // Déplacer le fichier vers le dossier de destination
    $profilePhoto->move(public_path('uploads/profile_photos'), $fileName);

    // Mettre à jour le chemin de la photo de profil dans la base de données
    $user->profile_photo = 'uploads/profile_photos/' . $fileName;
}

// Mettre à jour les informations du profil de l'utilisateur
$user->full_name = $request->input('full_name');
$user->email = $request->input('email');
$user->phone = $request->input('phone');
$user->address = $request->input('address');



$user->save();

return redirect()->route('user.profile')->with('success', 'Profil mis à jour avec succès!');
}



}
