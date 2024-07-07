@extends('user.nav-sidebar')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Bienvenue {{$user->full_name}} !</h4>
                        </div>
                    </div>

                </div>

                    @if($animalCount == 0)
                    <div class="col-xl-12 col-xxl-12 col-sm-14">
    <div class="card-med text-center">
        
        <div>
        <img src="{{asset('dashboard1/imgs/noanim.png')}}" style='width:200px'>
        </div>
        <div class="mt-4">
            <h3 class="mb-3">Bienvenue sur notre plateforme !</h3>
            <h4 class="mb-4"> Merci d'enregistrez vos animaux pour mieux les gérer </h4>
        </div>
        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-primary w-50 mt-3">
    <i class="ti-plus mr-2"></i> Ajouter votre animal
     </a>
    </div>
</div>
<div class="modal fade none-border" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Nouvel animal</strong></h4>
            </div>
            <div class="modal-body">
            <form method="POST" action="{{ route('ajouter-animal.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user-id" value="{{ $user_id }}">

    <div class="row">
        <div class="col-md-6">
            <small style='color:red; text-shadow:white;'>Ces données ne sont pas modifiables</small>
        </div>
        <div class="col-md-6">
            <label class="control-label">Nom</label>
            <input class="form-control form-white" placeholder="Nom" type="text" name="pet_name">
        </div>
        <div class="col-md-6">
            <label class="control-label">Choisir Sexe</label>
            <select class="form-control form-white" name="sexe">
                <option value="mâle">Mâle</option>
                <option value="femelle">Femelle</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="control-label">Date de naissance</label>
            <input type="date" class="form-control datepicker" name='date_de_naissance'>
        </div>
        <div class="col-md-6">
            <label class="control-label">Espèce</label>
            <input class="form-control form-white" placeholder="Espèce" type="text" name="espece">
        </div>
        <div class="col-md-6">
            <label class="control-label">Race</label>
            <input class="form-control form-white" placeholder="Race" type="text" name="race">
        </div>
        <div class="col-md-6">
            <label class="control-label">Poids (en Kg)</label>
            <input class="form-control form-white" placeholder="Poids" type="text" name="poids">
        </div>

        <div class="form-group col-md-6">
            <label class="form-label" for="edit-profile">Photo de l'animal</label>
            <input type="file" class="form-control-file" id="profile_photo" name="profile_photo">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>

</div>


                   @else 
                  <div class="row">
					<div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-4">
									<lord-icon
                                   src="https://cdn.lordicon.com/xyboiuok.json"
                                   trigger="hover"
                                     style="width:50px;height:50px">
                                   </lord-icon>

									</span>
									<div class="media-body">
										<p class="mb-1 ">Animaux</p>
										<h4 class="mb-0">{{ $animalCount }}</h4>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-3">
									<lord-icon
                                    src="https://cdn.lordicon.com/mwikjdwh.json"
                                    trigger="hover"
                                    style="width:250px;height:250px">
                                   </lord-icon>
									</span>
									<div class="media-body">
										<p class="mb-1">Rendez-vous</p>
										<h4 class="mb-0">{{ $rdvCount }}</h4>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
                    <div class="col-xl-4 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="widget-stat card">
							<div class="card-body">
								<div class="media ai-icon">
									<span class="mr-3">
										<svg id="icon-database-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database">
											<ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
											<path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path>
											<path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
										</svg>
									</span>
									<div class="media-body">
										<p class="mb-1">Dossiers médicaux</p>
										<h4 class="mb-0">{{ $animalCount }}</h4>
									</div>
								</div>
							</div>
						</div>
                    </div>
                   
    @foreach($animals as $animal)
    <div class="col-xl-6 col-lg-4 col-md-6">
        <div class="card">
            <div class="text-center py-4 px-5 overlay-box">
                <div class="profile-photo">
                <img src="{{ asset($animal->photo) }}"  class="img-fluid rounded-circle" alt="">
                <h3 class="mt-3 mb-1 text-white">{{ $animal->pet_name }}</h3>
            </div>
            <ul class="list-group list-group-flush">
                
                <li class="list-group-item d-flex justify-content-between">
                    <span class="mb-0">Espèce : </span>
                    <strong class="text-muted">{{ $animal->espece }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span class="mb-0">Anniversaire : </span>
                    <strong class="text-muted">{{ $animal->date_de_naissance }}</strong>
                </li>
            </ul>
    </div>
</div>
</div>
    @endforeach


@endif


                    </div>
                </div>
                       
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
<style>
    [data-header-position="fixed"] .content-body {
    padding-top: 20px;
    
}
.circle-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
}

</style>

   @endsection
