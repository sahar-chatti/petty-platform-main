@extends('veto.nav-side')
@section('content')  

<!--**********************************
Content body start
***********************************-->
<div class="content-body">
<!-- row -->
<div class="container-fluid">
<div class="row">
<div class="col-xl-4 col-xxl-3 col-lg-3 col-md-6
col-sm-6">
<div class="widget-stat card">
<div class="card-body">
<div class="media ai-icon">
<span class="mr-3">
<!-- <i class="ti-user"></i>
-->
<svg id="icon-customers"
xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-user">
<path d="M20 21v-2a4 4 0 0
0-4-4H8a4 4 0 0 0-4 4v2"></path>
<circle cx="12" cy="7"
r="4"></circle>
</svg>
</span>
<div class="media-body">
<p class="mb-1">Patient</p>
<h4 class="mb-0">{{ $patientCount }}</h4>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-xxl-3 col-lg-3 col-md-6
col-sm-6">
<div class="widget-stat card">
<div class="card-body">
<div class="media ai-icon">
<span class="mr-3">
<svg id="icon-orders"
xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-file-text">
<path d="M14 2H6a2 2 0 0
0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
<polyline points="14 2 14 8
20 8"></polyline>
<line x1="16" y1="13"
x2="8" y2="13"></line>
<line x1="16" y1="17"
x2="8" y2="17"></line>
<polyline points="10 9 9 9
8 9"></polyline>
</svg>
</span>
<div class="media-body">
<p class="mb-1">Rendez-vous</p>
<h4 class="mb-0">{{ $rendezvousCount }}</h4>
</div>
</div>
</div>
</div>
</div>

<div class="col-xl-4 col-xxl-3 col-lg-3 col-md-6
col-sm-6">
<div class="widget-stat card">
<div class="card-body">
<div class="media ai-icon">
<span class="mr-3">
<svg id="icon-database-widget"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-database">
<ellipse cx="12" cy="5"
rx="9" ry="3"></ellipse>
<path d="M21 12c0 1.66-4
3-9 3s-9-1.34-9-3"></path>
<path d="M3 5v14c0 1.66 4 3
9 3s9-1.34 9-3V5"></path>
</svg>
</span>
<div class="media-body">
<p class="mb-1">Dossiers
médicaux</p>
<h4 class="mb-0">{{ $patientCount }}</h4>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-xxl-4 col-lg-4 col-md-12
col-sm-12">
<div class="card-med">
<div class="card-body">
<div class="text-center">
<div class="profile-photo">
   
@if($user->profile_photo)
        <img src="{{ asset($user->profile_photo) }}" class="img-fluid rounded-circle" alt="">
    @else
        <img src="{{ asset('dashboard1/imgs/doctor.png') }}" class="img-fluid rounded-circle" alt="Photo par défaut">
    @endif
      
</div>
<h3 class="mt-4 mb-1">Dr
{{$user->full_name}}</h4>
<p class="text-muted">Cabinet
Vétérinaire {{$user->full_name}} <br> {{$user->address}} </p>
<p class="text-muted"> {{$user->phone}}
<br>{{$user->email}} </p>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-xxl-8 col-lg-8 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Demandes récentes de rendez-vous</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive recentOrderTable">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Patient</th>
                            <th scope="col">Num</th>
                            <th scope="col">Animal</th>
                            <th scope="col">Date et Heure</th>                         
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rdvs as $rdv)
                        @if($rdv->status ===  'scheduled') <!-- Vérifier si le rendez-vous n'est pas annulé -->
                        <tr>
                            <td>{{ $rdv->id }}</td>
                            <td>{{ $rdv->user->full_name }}</td>
                            <td>{{ $rdv->user->phone }}</td>
                            <td>{{ $rdv->pet_name }}</td>
                            <td>{{ $rdv->appointment_datetime }}</td>
                            <td>  @if($rdv->status == 'scheduled')
                        <span class="badge badge-rounded badge-warning">En attente</span>
                        @elseif($rdv->status == 'confirmed')
                        <span class="badge badge-rounded badge-success">Confirmé</span>
                        @elseif($rdv->status == 'canceled')
                        <span class="badge badge-rounded badge-danger">Annulé</span>
                        @elseif($rdv->status == 'completed')
                        <span class="badge badge-rounded badge-primary">Terminé</span>
                        @endif</td>
                            
                            <td>
                                <div class="dropdown custom-dropdown mb-0">
                                    <div data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-right" style='overflow-y: auto;'>
                                        <a class="dropdown-item" href="{{ route('rendezvous.details', ['id' => $rdv->id]) }}">Détails</a>
                                        <form action="{{ route('rdvs.update-status', $rdv->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="dropdown-item" name="status" value="approuve">Approuver</button>
                                        </form>
                                        <form action="{{ route('rdvs.update-status', $rdv->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="dropdown-item text-danger" name="status" value="refuse">Refuser</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- rendez-vous du jour -->
<div class="col-xl-12 col-xxl-12 col-lg-8 col-md-18 col-sm-18">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ma journée</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive recentOrderTable">
                <table class="table verticle-middle table-responsive-md">
                    <thead>
                        <tr style="color: #7286D3 ">
                            <th scope="col">Num</th>
                            <th scope="col">Patient</th>
                            <th scope="col">Email</th>
                            <th scope="col">Animal</th>
                            <th scope="col">Date</th>
                            <th scope="col">Heure</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rdvsDuJour as $key => $rdvDuJour)
                        @if($rdvDuJour->status === 'confirmed' )
                        <tr>
                        <td>{{ $key + 1 }}</td>
                            <td>{{ $rdvDuJour->user->full_name }}</td>
                            <td>{{ $rdvDuJour->user->email }}</td>
                            <td>{{ $rdvDuJour->animal->pet_name }}</td>
                            <td>{{ \Carbon\Carbon::parse($rdvDuJour->appointment_datetime)->format('Y-m-d') }}</td>
                            <td>{{ \Carbon\Carbon::parse($rdvDuJour->appointment_datetime)->format('H:i') }}</td>
                        
                            <td>
                                {{ $rdvDuJour->heure }}
                                <div class="mt-2">
                                    <form action="{{ route('appointment.update', $rdvDuJour->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" name="status" value="canceled" class="btn btn-danger btn-sm">Annuler</button>
                                        <button type="submit" name="status" value="completed" class="btn btn-success btn-sm">Complété</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--**********************************
Content body end
***********************************-->
@endsection 