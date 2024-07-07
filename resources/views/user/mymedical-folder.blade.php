@extends('user.nav-sidebar')
@section('content')
<div class="content-body">
    <div id="invoice">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Dossier médical de {{ $animal->pet_name }}</h4>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header--">
                            <h5 class="card-title--">Informations générales</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label class="form-label" for="animal-name">Nom</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->pet_name }}" id="animal-name" name="pet_name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="animal-espece">Espèce</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->espece }}" id="animal-espece" name="espece">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="animal-race">Race</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->race }}" id="animal-race" name="race">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="animal-gender">Sexe</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->sexe }}" id="animal-gender" name="sexe">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="animal-birth-date">Date de naissance</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->date_de_naissance }}" id="animal-birth-date" name="date_de_naissance">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="animal-weight">Poids</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->poids }}" id="animal-weight" name="poids">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="animal-additional-info">Informations supplémentaires</label> <br>
                                        <input class="form-control" type="text" readonly value="{{ $animal->commentaires }}" id="animal-additional-info" name="commentaires">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-xxl-12 col-sm-12">
                    <div class="card">
                        <div class="card-header--">
                            <h5 class="card-title--">Intervention médicale</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" method="post">
                                @if($medicalInterventions->isNotEmpty())
                                    @foreach($medicalInterventions as $intervention)
                                    <div class="card mb-3" style="background-color:#E5E0FF">
                                        <div class="card-body">
                                        
                                            <label class="form-label">{{ $intervention->type }} :</label>
                                            <input type="text" class="form-control" readonly value="Date de l'intervention : {{ $intervention->dateIntervention }}">
                                            <br>
                                            <input type="text" class="form-control" readonly value="Nom du vétérinaire : {{ $intervention->veterinaire ? $intervention->veterinaire->full_name : 'N/A' }}">
                                            <br>
                                            <input type="text" class="form-control" readonly value="Description : {{ $intervention->commentaire }}">
                                            <br>
                                        </div>
                                    </div>
                                    @endforeach
                                @else
                                    <p>Aucune intervention médicale n'a été trouvée pour cet animal.</p>
                                @endif
                            </form>
                        </div>
                        <a href="javascript:void()" data-toggle="modal" data-target="#add-category" id="download" class="btn btn-primary btn-event w-100">
                            <span class="align-middle"></span> Télécharger le dossier médical
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
