<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\VeterinarianController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\PatientController;
use App\Models\Animal;
use App\Models\RendezVous;
use App\Models\Patient;
use App\Models\User;
use Carbon\Carbon;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/FAQ', function () {
    return view('home.FAQ');
});

// landing page ------------------------------------------------------------
Route::get('/', function () {
    return view('home.landing');
}); 
 
Route::get('/produit',  [BookingController::class, 'showProduit']);

Route::post('/book-product', [BookingController::class, 'bookProduct']);

Route::get('/Reset', function () {
    return view('forgot-password');
});

Route::get('/contact', [MessageController::class,'showContactForm']);
Route::post('/contact', [MessageController::class, 'store'])->name('contact');


Route::get('/RendezVous',[AppointmentController::class, 'loadVeterinarians']);
Route::post('/addRdv',[AppointmentController::class,'ajoutRdv']);
Route::put('/rdvs/{rdv}/update-status', [AppointmentController::class, 'updateStatus'])->name('rdvs.update-status');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/veterinaires',  [VeterinarianController::class, 'index'])->name('veterinarians.index');
Route::get('/veterinaires\{id}',  [VeterinarianController::class, 'showDoctor'])->name('veterinarians.show');



Route::middleware(['auth.user'])->group(function () {
    // Toutes vos routes ici





// veterinarian dashboard ---------------------------------------------------------

Route::get('/profile', [VeterinarianController::class, 'showProfile'])->name('veterinarian.profile');
Route::post('/update-profile', [VeterinarianController::class, 'updateProfile'])->name('veterinarian.updateProfile');
Route::get('/rendezVous', [AppointmentController::class, 'myAppointments']);
Route::get('/rendezvous/{id}', 'AppointmentController@show')->name('rendezvous.show');
Route::get('/dashboard_principal', [AppointmentController::class, 'recentAppointments'])
    ->name('veterinarian.recent-appointments');
Route::put('/rendezVous/{id}/miseajour', [AppointmentController::class,'updateStatus'])->name('appointment.update');
Route::get('/historique', [AppointmentController::class,'history'])->name('appointment.history');
Route::get('/listePatients', [PatientController::class,'showPatients']);
Route::get('/calendrier', function () {
    return view('veto.calendrier');
});

Route::get('/ajouter-rendezVous', function () {
    return view('veto.add-appointement');
});
Route::put('/animal/{id}', [AnimalController::class,'update'])->name('update_animal');

Route::get('/dossier-medical/{animalId}', [PatientController::class, 'showMedicalFolder'])->name('medical.folder');
Route::post('/ajout-intervention/{animal}', [AnimalController::class,'addMedicalIntervention'])->name('add.medical.intervention');
Route::get('/mes-Commandes', [BookingController::class, 'listOrders'])->name('bookings.list');


Route::post('/add-patient', [PatientController::class, 'addPatient'])->name('patient.add');
Route::get('/ajoutPatient', [PatientController::class, 'showAddPatientForm']);

//end veterinarian dashboard ---------------------------------------------









// user dashboard ------------------------------------------------------------
Route::get('/profile-utilisateur', [AnimalController::class, 'showProfileUser'])->name('user.profile');
Route::post('/ajouter-animal', [AnimalController::class, 'store'])->name('ajouter-animal.store');
Route::post('/modifer-profile', [VeterinarianController::class, 'updateProfile'])->name('user.updateProfile');

Route::get('/mes-animaux', function () {
    $userId = Auth::id();
    $user = User::find($userId);
    $animals = Animal::where('user_id', $userId)->get(); // Utilisez get() pour récupérer tous les résultats
    $animalCount = Animal::where('user_id', $userId)->count();
    return view('user.animals', ['animals' => $animals, 'user' => $user, 'user_id'=>$userId, 'animalCount'=>$animalCount]);
});
Route::post('/ajouter-animal', [AnimalController::class, 'store'])->name('ajouter-animal.store');
Route::get('/mes-rendezVous', [AppointmentController::class, 'index'])->name('appointments.index');
Route::get('/rendezvous/{id}', [AppointmentController::class,'show'])->name('rendezvous.show');
Route::get('/rendezvous/{id}/show', [AppointmentController::class,'showVeto'])->name('rendezvous.details');
Route::get('/notifications/order/{notificationId}/booking/{bookingId}', [AppointmentController::class, 'showOrder'])->name('orderNotification.read');
Route::get('/rendezvous/{id}/cancel', [AppointmentController::class, 'cancel'])->name('rendezvous.cancel');
Route::middleware('auth')->get('/check-appointments', 'AppointmentController@checkAppointments');
Route::get('/orderNotification/read/{notificationId}/{bookingId}', [AppointmentController::class, 'read'])->name('orderNotification.read');
Route::get('/bookings/{id}', [AppointmentController::class, 'showOrder'])->name('bookings.show');
Route::get('/no-gps',function (){
    return view('user.no-gps');
});
Route::get('/mesCommandes', [BookingController::class, 'list'])->name('bookings.list');
Route::get('/dossier-medical/{animal}', [AnimalController::class, 'show'])->name('mymedical-folder');

Route::get('/calendar',function (){
    return view('user.calendar');
});
Route::get('/mes-rendez-vous',function (){
    return view('user.myAppointments');
});
Route::get('/Email',function (){
    return view('user.RdvMail', $appointment->id);
});


});