@extends('user.nav-sidebar')
@section('content')
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row page-titles mx-0">
    <h1 class="no-margin-top" style='color:#7286D3;'>Détails du Rendez-vous</h1>
</div>
        <div class="row content-center">

            <div class="col-xl-12">
                <div class="card" style='background-color:#E5E0FF'>
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group">
                                    <li class="list-group-item">Vétérinaire: <strong>{{ $rdv->veterinarian_name }}</strong></li>
                                    <li class="list-group-item">Animal: <strong>{{ $rdv->pet_name }}</strong></li>
                                    <li class="list-group-item">Raison: <strong>{{ $rdv->reason }}</strong></li>
                                    <li class="list-group-item">Date: <strong>{{ Carbon\Carbon::parse($rdv->appointment_datetime)->format('d M Y') }}</strong></li>
                                    <li class="list-group-item">Heure: <strong>{{ Carbon\Carbon::parse($rdv->appointment_datetime)->format('H:i') }}</strong></li>
                                    <li class="list-group-item">Status: <strong>{{ $rdv->status }}</strong></li>
                                    <li class="list-group-item">Commentaire: {{ $rdv->notes }}</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
