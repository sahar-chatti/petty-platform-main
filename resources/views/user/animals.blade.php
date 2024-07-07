@extends('user.nav-sidebar')
@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    
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
            <input type="file" class="form-control-file" id="animal_photo" name="photo">
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </div>
</form>

</div>

                @else
                @foreach($animals as $animal)
    <div class="row">
        <div class="col-lg-12">
            <div class="profile">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo"></div>
                        <div class="profile-photo">
                            <img src="{{ asset($animal->photo) }}" class="img-fluid rounded-circle" alt="">
                        </div>
                    </div>
                    <div class="profile-info">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                        <div class="profile-name">
                                            <h4 class="text-primary">{{$animal->pet_name}}</h4>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                        <div class="profile">
                                            <h4 class="text-muted">Sexe</h4>
                                            <p>{{$animal->sexe}}</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4 prf-col">
                                        <div class="profile-call">
                                            <h4 class="text-muted">Poids</h4>
                                            <p>{{$animal->poids}} kg</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4 prf-col">
                                        <div class="profile-email">
                                            <h4 class="text-muted">Espèce</h4>
                                            <p>{{$animal->espece}}</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4 prf-col">
                                        <div class="profile-email">
                                            <h4 class="text-adresse">Race</h4>
                                            <p>{{$animal->race}}</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4 prf-col">
                                        <div class="id">
                                            <h4 class="text-adresse">Date de naissance</h4>
                                            <p>{{$animal->date_de_naissance}}</p>
                                        </div>
                                    </div>
                                    <!-- Ajouter le bouton ici -->
                                    <div class="col-xl-12 col-sm-12 prf-col">
                                   <a href="{{ route('mymedical-folder', $animal->id) }}" class="btn btn-primary" style="width: 100%;">Voir document médical</a>
                                   </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

                <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-primary w-100 mt-3">
    <i class="ti-plus mr-2"></i> Ajouter un autre animal
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
        <!--**********************************
            Content body end
        ***********************************-->
@endif
@endsection