@extends('veto.nav-side')
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
                            <h4>Liste des rendez-vous</h4>
                        </div>
                    </div>
</div>
        <div class="col-xl-12 col-xxl-12 col-lg-8 col-md-18
col-sm-18">
<div class="card">
<div class="card-header">
<h4 class="card-title">Mes rendez-vous</h4>
</div>
<div class="card-body">
<div class="table-responsive
recentOrderTable">
<table class="table verticle-middle
table-responsive-md">
<thead>
<tr style="color: #7286D3 ">
<th scope="col">Num</th>
<th
scope="col">Patient</th>
<th scope="col">email</th>
<th scope="col">Animal</th>
<th scope="col">Date</th>
<th scope="col">Heure</th>
</tr>
</thead>
<tbody>
@foreach($rdvs as $key => $rdv)
@if($rdv->status === 'confirmed' )
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $rdv->user->full_name }}</td>
        <td>{{ $rdv->user->email }}</td>
        <td>{{ $rdv->animal->pet_name }}</td>
        <td>{{ \Carbon\Carbon::parse($rdv->appointment_datetime)->format('Y-m-d') }}</td>
        <td>{{ \Carbon\Carbon::parse($rdv->appointment_datetime)->format('H:i') }}</td>
        <td>{{ $rdv->heure }}</td>
        <td>
                <a href="{{ route('medical.folder', $rdv->animal->id) }}" class="btn btn-primary">Dossier</a>
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
</div>
</div>
</div>
</div></div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection