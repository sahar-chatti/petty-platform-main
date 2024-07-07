@extends('user.nav-sidebar')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

               

                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-18 col-sm-18">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Demande récentes de rendez-vous</h4>
                            </div>
                          
<div class="card-body">
    <div class="table-responsive recentOrderTable">
        <table class="table verticle-middle table-responsive-md">
            <thead>
                <tr>
                    <th scope="col">Vétérinaire</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Raison</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            @foreach($rdvs as $rdv)
            <tbody>
                 
                <tr>
                    <td>{{ $rdv->veterinarian_name }}</td>
                    <td>{{ $rdv->pet_name }}</td>
                    <td>{{ $rdv->reason }}</td>
                    <td>{{ \Carbon\Carbon::parse($rdv->appointment_datetime)->format('d M') }}</td>
                    <td>{{ \Carbon\Carbon::parse($rdv->appointment_datetime)->format('H:i') }}</td>                    <td>
                        @if($rdv->status == 'scheduled')
                        <span class="badge badge-rounded badge-warning">En attente</span>
                        @elseif($rdv->status == 'confirmed')
                        <span class="badge badge-rounded badge-success">Confirmé</span>
                        @elseif($rdv->status == 'canceled')
                        <span class="badge badge-rounded badge-danger">Annulé</span>
                        @elseif($rdv->status == 'completed')
                        <span class="badge badge-rounded badge-primary">Terminé</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                                <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('rendezvous.show', $rdv->id) }}">Détails</a>
                               
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>


</div>


				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection