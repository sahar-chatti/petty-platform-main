<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RendezVous;
use App\Models\VeterinarianUser;
use App\Models\Animal;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Notification;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Récupérer l'utilisateur connecté
        $user = auth()->user();
    
        // Vérifier si l'utilisateur est connecté
        if ($user) {
            // Récupérer l'ID de l'utilisateur
            $userId = $user->id;
    
            // Récupérer le nombre d'animaux de l'utilisateur
            $animalCount = Animal::where('user_id', $userId)->count();
            
    
            // Récupérer les animaux de l'utilisateur
            $animals = Animal::where('user_id', $userId)->get();
    
            // Récupérer le nombre de rendez-vous de l'utilisateur
            $rdvCount = RendezVous::where('user_id', $userId )->where('status', 'confirmed')->count();

           
    
            // Vérifier le rôle de l'utilisateur
            if ($user->role == 'veterinarian') {
                // Récupérer les rendez-vous récents
                $rdvData = (new AppointmentController)->recentAppointments();
                $rdvs = $rdvData['rdvs'];
                $rdvsDuJour = $rdvData['rdvsDuJour'];
                // Récupérer le nombre de rendez-vous du vétérinaire
                $rendezvousCount = RendezVous::where('veterinarian_id', $userId)
                ->where('status','confirmed')
                ->count();
              $patientCount =  VeterinarianUser::where('veterinarian_id', $userId)->count();
                // Retourner la vue du tableau de bord du vétérinaire
                return view('veto.dashboard_principal', [
                    'user' => $user,
                    'rdvs' => $rdvs,
                    'rdvsDuJour' => $rdvsDuJour,
                    'rendezvousCount' => $rendezvousCount,
                    'patientCount' => $patientCount,
                ]);
                        } elseif ($user->role == 'pet_owner') {
                // Récupérer les notifications non lues de l'utilisateur
              
                // Retourner la vue principale de l'utilisateur avec les données
                return view('user.main', ['user' => $user, 'animals' => $animals, 'animalCount' => $animalCount, 'rdvCount' => $rdvCount]);
            }
        }
    
        // Si l'utilisateur n'est pas connecté ou n'a pas de rôle défini, rediriger vers la page de connexion
        return redirect()->route('login');
    }

    
    
}
