@extends('layouts.general_structure')
@section('content')
<head>    <link href="{{asset('/template/rappasoft/laravel-livewire-tables/core.min.css')}}" rel="stylesheet" />     <link href="{{asset('/template/rappasoft/laravel-livewire-tables/thirdparty.css" rel="stylesheet')}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Clinic Appointment Management" />
    <link rel="icon" href="{{asset('template/assets/images/PetLog.png')}}"  type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- META ============== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- OG -->
    <meta name="robots" content="index, follow">

    <!-- Google Fonts -->
    <link rel="preconnect" href="http://fonts.googleapis.com/">
    <link rel="preconnect" href="http://fonts.gstatic.com/" crossorigin>
    <link
        href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="{{asset('/template/css/front-third-party17a5.css?id=ef9167daaab74cccef41')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/template/css/front-pagese16f.css?  id=a50fd38a2369e2ca1e4f')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/template/assets/css/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/template/assets/css/intlTelInput.css')}}">


    <link rel="stylesheet" href="{{asset('template/style.css')}}">

    <!-- Document Title ===================== -->
    <title>    Rendez-vous
 | Petty </title>
    <script src="{{asset('/template/messages.js')}}"></script>
    <script src="{{asset('/template/assets/front/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/template/js/front-third-party11f6.js?id=91dab509a31c81494ee9')}}"></script>
    <script src="{{asset('/template/assets/js/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
   
    
</head>
<div class="container">
  
            <div class="book-appointment-page">
        <!-- start hero section -->
        <section class="hero-content-section bg-white p-t-100 p-b-100">
            <div class="container p-t-30">
                <div class="col-12">
                    <div class="hero-content text-center">
                        <h1 class="mb-3" style='color:#7286D3'>
                         Réservez un rendez-vous
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- start book appointment section -->
        <section class="book-appointment-section  p-t-100 p-b-100"  >
            <div class="container"  >
                <div class="row" >
                    <div class="col-12">
                        <div class="appointment-form form-wraper"  >
                  
                        <form  class="book-appointment-form  rounded-20 box-shadow" id="frontAppointmentBook" action="/addRdv" method="post">
                         @csrf
                         @if (session('message'))
                         <div class="alert alert-success">
                         {{ session('message') }}
                         </div>
                        @endif
                        @if(session('error'))
                          <div class="alert alert-danger" style='color:red'>
                          {{ session('error') }}
                          </div>
                        @endif
                        <div class="row">
    <input type="hidden" name="user_id" value="id">
                    <input type="hidden" name="status" value="scheduled">
        
        
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" for="petName">Nom de l'animal:</label>
                <input type="text" class="form-control" id="petName" placeholder="Nom de l'animal" name="pet_name" value="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" for="template-medical-email">Date:</label>
                <input type="datetime-local" id="template-medical-date" name="appointment_datetime" class="form-control" value="" placeholder="--/--/---- ">
            </div>
        </div>
        
        
        
        <div class="col-lg-6">
    <div class="form-group">
        <label class="form-label" for="petSpecies">Espèce:</label>
        <select class="form-select" id="petSpecies" name="pet_species">
            <option value="bird">Oiseau</option>
            <option value="cat">Chat</option>
            <option value="dog">Chien</option>
            <option value="ferret">Furet</option>
            <option value="horse">Cheval</option>
            <option value="rabbit">Lapin</option>
            <option value="reptile">Reptile</option>
            <option value="rodent">Rongeur</option>
            <option value="other">Autre</option>
        </select>
    </div>
</div>

        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" for="petBreed">Race:</label>
                <input type="text" class="form-control" id="petBreed" placeholder="Race" name="pet_breed" value="">
            </div>
        </div>
        <div class='col-lg-3'>
        <div class="form-group">
        <label class="form-label" for="petBreed">Gouvernorat:</label> 
        <select class="form-select" id="inputState" name="address">
               
               <option value="Ben Arous">Ben Arous</option>
               <option value="Manouba">Manouba</option>
               <option value="Ariana">Ariana</option>
               <option value="Tunis">Tunis</option>
               <option value="Nabeul">Nabeul</option>
               <option value="Sousse">Sousse</option>
               <option value="Monastir">Monastir</option>
               <option value="Mahdia">Mahdia</option>
               <option value="Sfax">Sfax</option>
               <option value="Gabes">Gabes</option>
               <option value="Béja">Béja</option>
               <option value="Jandouba">Jandouba</option>
               <option value="Tozeur">Tozeur</option>
               <option value="Gbelli">Gbelli</option>
               <option value="Kasserine">Kasserine</option>
               <option value="Gafsa">Gafsa</option>
               <option value="Sidi Bouzid">Sidi Bouzid</option>
               <option value="Kairouan">Kairouan</option>
               <option value="Bizerte">Bizerte</option>
               <option value="Kef">Kef</option>
               <option value="Tataouin">Tataouin</option>
               <option value="Zaghouan">Zaghouan</option>
               <option value="Medenine">Medenine</option>
           </select>
       </div>
        </div>

        <div class="col-lg-3">
            <div class="form-group">
                <label class="form-label" for="appointmentDoctor">Vétérinaire:</label>
                <select type="list" class="form-select" id="appointmentDoctor" name="veterinarian_id">
                <option value="" selected>Liste des vétérinaires</option>
                @foreach($veterinarians as $veterinarian)
                 <option value="{{ $veterinarian->id }}|{{ $veterinarian->full_name }}|{{ $veterinarian->address }}">{{ $veterinarian->full_name }}</option>
                @endforeach
              </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-label" for="appointmentReason">Raison de rendez-vous:</label>
                <select class="form-select" id="appointmentReason" name="reason">
                <option value="Examen de santé">Examen de santé</option>
            <option value="Vaccinations">Vaccinations</option>
            <option value="Visite pour un nouveau client / patient">Visite pour un nouveau client / patient</option>
            <option value="Chirurgie">Chirurgie</option>
            <option value="Nettoyage dentaire">Nettoyage dentaire</option>
            <option value="Rendez-vous technique">Rendez-vous technique</option>
            <option value="Nouvel animal domestique">Nouvel animal domestique</option>
            <option value="Renouvellement de médicaments">Renouvellement de médicaments</option>
            <option value="Autre">Autre</option>
            

                    
                </select>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label class="form-label" for="notes">Notes:</label>
                <textarea class="form-control" id="notes" name="notes" rows="3" placeholder="Notes"></textarea>
            </div>
        </div>
        <div class="col-12 text-center">
            <button class="btn " type="submit" id="Btn" value="submit">Confirmer le rendez-vous</button>
        </div>
    </div>
</form>




                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
    document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("inputState").addEventListener("change", function() {
        var selectedAddress = this.value; // Récupérer l'adresse sélectionnée
        var doctorsSelect = document.getElementById("appointmentDoctor");
        var doctorsOptions = doctorsSelect.getElementsByTagName("option");

        // Parcourir toutes les options et afficher celles dont l'adresse correspond à celle sélectionnée
        for (var i = 0; i < doctorsOptions.length; i++) {
            var doctorInfo = doctorsOptions[i].value.split("|");
            var doctorAddress = doctorInfo[2]; // L'indice dépend de la structure de la valeur de l'option

            if (doctorAddress === selectedAddress || selectedAddress === "all") {
                doctorsOptions[i].style.display = "block";
            } else {
                doctorsOptions[i].style.display = "none";
            }
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("appointmentDoctor").addEventListener("change", function() {
        var selectedValue = this.value;

        // Parcourir toutes les options et masquer l'option initiale si une sélection est faite
        var options = this.getElementsByTagName("option");
        for (var i = 0; i < options.length; i++) {
            if (options[i].value === "") {
                options[i].style.display = "none";
            }
        }
    });
});

</script>


        <!-- end book appointment section -->
@endsection