@extends('veto.nav-side')
@section('content')

<!--**********************************
Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Dossier médical</h4>
                </div>
                @if(session('success'))
    <div id="flash-message" class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
            </div>
        </div>
        <!-- row -->
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
                                                <h4 class="text-primary">{{ $animal->pet_name }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile">
                                                <h4 class="text-muted">Propriétaire</h4>
                                                <p>{{ $animal->owner->full_name }}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile">
                                                <h4 class="text-muted">Email </h4>
                                                <p>{{ $animal->owner->email }}</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                            <div class="profile">
                                                <h4 class="text-muted">Téléphone</h4>
                                                <p>{{ $animal->owner->phone }}</p>
                                            </div>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informations générales de l'animal -->
        <div class="row">
    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card">
            <div class="card-header--">
                <h5 class="card-title--">Informations générales</h5>
            </div>
            <div class="card-body">
                
                <form action="{{ route('update_animal', $animal->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Nom</label> <br>
                            <input class="form-control" type="text" readonly value="{{ $animal->pet_name }}" name="pet_name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Espèce</label> <br>
                            <input class="form-control" type="text" value="{{ $animal->espece }}" name="espece">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Race</label> <br>
                            <input class="form-control" type="text" value="{{ $animal->race }}" name="race">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Sexe</label> <br>
                            <input class="form-control" type="text" value="{{ $animal->sexe }}" name="sexe">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Date de naissance</label> <br>
                            <input class="form-control" type="text" value="{{ $animal->date_de_naissance }}" name="date_de_naissance">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Poids</label> <br>
                            <input class="form-control" type="text" value="{{ $animal->poids }}" name="poids">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Informations supplémentaire</label> <br>
                            <input class="form-control" type="text" value="{{ $animal->commentaires }}" name="commentaires">
                        </div>
                        <!-- Ajoutez les autres champs d'informations générales ici -->
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    
                
<script>
    // Fonction pour fermer automatiquement le message flash après quelques secondes
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.remove();
        }
    }, 5000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
</script>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12 col-xxl-12 col-sm-12">
    <div class="card">
        <div class="card-header--">
            <h5 class="card-title--">Intervention médicale</h5>
        </div>
        <div class="card-body">
            <!-- Bouton pour ajouter une nouvelle intervention -->
            <button type="button" class="btn btn-primary btn-event w-100" data-toggle="modal" data-target="#add-category">
                <span class="align-middle"><i class="ti-plus"></i></span> Nouvelle intervention
            </button>

            <!-- Liste des interventions médicales -->
            <div id="medical-interventions">
                @foreach($interventions as $intervention)
                    <div class="card" style="background-color:#E5E0FF">
                        <div class="card-body">
                            <p class="card-title"><strong>Type:</strong> {{ $intervention->type }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($intervention->dateIntervention)->format('Y-m-d') }}</p>
                            <p class="card-text"><strong>Description:</strong>  {{ $intervention->commentaire }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<!-- Modal pour ajouter une nouvelle intervention -->
<div class="modal fade none-border" id="add-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Nouvelle intervention</strong></h4>
            </div>
            <div class="modal-body">
                <form id="new-intervention-form" action="{{ route('add.medical.intervention', $animal->id) }}" method="post">
                    <!-- Champs pour les détails de la nouvelle intervention -->
                    @csrf
                    <input type="hidden" name="id_vétérinaire" value="{{ Auth::user()->id }}">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Choisir catégorie</label>
                            <select class="form-control form-white"  name="type">
                                <option value="vaccination">Vaccination</option>
                                <option value="chirugie">Chirurgie</option>
                                <option value="controle">Consultation générale</option>
                                <option value="stérilisation">Stérilisation</option>
                                <option value="soinsDentaires">Soins dentaires</option>
                                <option value="radioghraphie">Radiographie</option>
                                <option value="échographie">Échographie </option>
                                <option value="analyse">Analyse de laboratoire</option>
                                <option value="parasites">Traitement des parasites</option>
                                <option value="douleur">Gestion de la douleur</option>
                                <option value="autre">Autres</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Date de l'intervention</label>
                            <input type="date" class="form-control datepicker" name="dateIntervention">
                        </div>
                        <div class="col-md-12">
                            <label class="control-label">Notes</label>
                            <textarea class="form-control form-white" rows="" cols="" name="commentaire"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" id="add-intervention-btn">Ajouter</button>
            </div>
                </form>
           
            </div>
           
        </div>
    </div>
</div>


<!--**********************************
Content body end
***********************************-->
@endsection 