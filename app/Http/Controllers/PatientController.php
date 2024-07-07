<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Animal;
use App\Models\Intervention;
use App\Models\VeterinarianUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function showAddPatientForm()
{
    $animals = Animal::all(); // Retrieve all animals from the database
    
    return view('veto.add-patient', compact('animals'));
}
public function showPatients()
{
    if (Auth::check() && Auth::user()->role === 'veterinarian') {
        $veterinarianId = Auth::id();

        // Récupérer les patients de ce vétérinaire connecté
        $patients = VeterinarianUser::where('veterinarian_id', $veterinarianId)
            ->with('petOwner')
            ->get();

        return view('veto.all-patients', compact('patients'));
    }
    
    // Rediriger ou afficher un message d'erreur si l'utilisateur n'est pas un vétérinaire
    return redirect()->back()->with('error', 'Vous n\'avez pas la permission d\'accéder à cette page.');
}

public function addPatient(Request $request)
{
    $request->validate([
        'veterinarian_id' => 'required',
        'user_email' => 'required|email',
        'animal_id' => 'required|exists:animals,id',
    ]);

    $vetId = $request->input('veterinarian_id');
    $userEmail = $request->input('user_email');
    $animalId = $request->input('animal_id');

    // Trouver l'utilisateur par son email
    $user = User::where('email', $userEmail)->first();

    if (!$user) {
        return back()->with('error', 'Utilisateur introuvable.');
    }

     // Vérifier si l'animal appartient au propriétaire
     $isOwner = Animal::where('id', $animalId)
     ->where('user_id', $user->id)
     ->exists();

    if (!$isOwner) {
        return back()->with('error', 'Vous ne pouvez pas ajouter cet animal, car il n\'appartient pas à cet utilisateur.');
    }

        // Save the relationship in the user_animal_veterinarian pivot table
        VeterinarianUser::create([
            'user_id' => $user->id,
            'animal_id' => $animalId,
            'veterinarian_id' => $vetId,
        ]);
    

    return redirect()->back()->with('success', 'Patient ajouté avec succès.');
}
public function showMedicalFolder($animalId)
{
    $vetId = Auth::id();
    $animal = Animal::findOrFail($animalId);
    $interventions =  Intervention::where('id_animal',$animalId)->get();
    return view('veto.medical-folder',['interventions' => $interventions, 'animal' =>$animal] );
}
}
