<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\Auth;
use App\Models\Intervention;


class AnimalController extends Controller
{
    public function showProfileUser()
    {
        $user = Auth::user();
        return view('user.user_profile', compact('user'));
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


public function store(Request $request)
{
    // Validation des données du formulaire
    $validatedData = $request->validate([
        'pet_name' => 'required|string|max:255',
        'espece' => 'required|string|max:255',
        'race' => 'nullable|string|max:255',
        'sexe' => 'required|in:mâle,femelle', // Assurez-vous que les valeurs correspondent à celles de la base de données
        'date_de_naissance' => 'nullable|date',
        'poids' => 'nullable|string|max:255', // Modifié en string pour permettre les poids décimaux
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
        'commentaires' => 'nullable|string|max:255',
    ]);

    $validatedData['user_id'] = auth()->id();

    // Traitement de l'envoi de fichier (photo)
    if ($request->hasFile('profile_photo')) {
        // Récupérer le fichier téléchargé
        $animalPhoto = $request->file('profile_photo');
    
        // Générer un nom unique pour le fichier
        $fileName = time() . '_' . $animalPhoto->getClientOriginalName();
    
        // Déplacer le fichier vers le dossier de destination
        $animalPhoto->move(public_path('uploads/profile_photos/animal_photo'), $fileName);
    
        // Mettre à jour le chemin de la photo de l'animal dans la base de données
        $validatedData['photo'] = 'uploads/profile_photos/animal_photo/' . $fileName;
    }

    // Création d'un nouvel animal avec les données validées
    Animal::create($validatedData);
    
    // Redirection ou autre action après l'ajout de l'animal
    return redirect()->back()->with('success', 'Animal ajouté avec succès.');
}

public function update(Request $request, $id)
{
    // Validation des données du formulaire de mise à jour

    // Récupérer l'animal à partir de l'ID
    $animal = Animal::findOrFail($id);

    // Mettre à jour les attributs de l'animal avec les données du formulaire
    $animal->fill($request->all())->save();

    // Rediriger l'utilisateur vers une autre page ou afficher un message de succès
    return redirect()->back()->with('success', 'Les informations de l\'animal ont été mises à jour avec succès.');
}

public function addMedicalIntervention(Request $request, Animal $animal)
{
    // Validation des données du formulaire
    $request->validate([
        'type' => 'required',
        'dateIntervention' => 'required|date',
        'commentaire' => 'nullable|string',
    ]);
    
    $id_proprietaire = $animal->user_id;
    $id_animal = $animal->id;
   // dd($id_animal);
   
    // Création d'une nouvelle intervention médicale avec les données du formulaire
    $intervention = Intervention::create([
        'type' => $request->input('type'),
        'dateIntervention' => $request->input('dateIntervention'),
        'commentaire' => $request->input('commentaire'),
        'id_vétérinaire' => $request->input('id_vétérinaire'),
        'id_animal' => $id_animal,
        'id_proprietaire' => $id_proprietaire,
    ]);
    
    // Redirection avec un message de succès
    return redirect()->back()->with('success', 'Intervention médicale ajoutée avec succès.');
}


public function show(Animal $animal)
{
    $user = auth()->user();
    $id_animal = $animal->id;
    $medicalInterventions = Intervention::where('id_animal', $id_animal)->get();
    return view('user.mymedical-folder', ['medicalInterventions' => $medicalInterventions, 'animal' => $animal]);
}

}
