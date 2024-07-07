@extends('veto.nav-side')
@section('content')  
<div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Historique des rendez-vous</h4>
                        </div>
                    </div>
</div>
<div class="col-xl-12 col-xxl-12 col-lg-8 col-md-18
col-sm-18">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Historique des Rendez-vous</div>

                <div class="card-body">
                    @if ($historyRdvs->isEmpty())
                        <p>Aucun rendez-vous dans l'historique.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Num</th>
                                    <th>Patient</th>
                                    <th>Animal</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($historyRdvs as $key => $rdv)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $rdv->user->full_name }}</td>
                                        <td>{{ $rdv->animal->pet_name }}</td>
                                       <td>{{ \Carbon\Carbon::parse($rdv->appointment_datetime)->format('Y-m-d') }}</td>
                                        <td>{{ $rdv->status }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection