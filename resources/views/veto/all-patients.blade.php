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
<h4>Tous les patients</h4>
</div>
</div>
<div class="col-sm-6 p-md-0 justify-content-sm-end
mt-2 mt-sm-0 d-flex">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a
href="javascript:void(0)">Patients</a></li>
<li class="breadcrumb-item active"><a
href="javascript:void(0)">Tous les Patients</a></li>
</ol>
</div>
</div>
<div class="row">
@foreach ($patients as $patient)
    <div class="col-xl-4 col-lg-4 col-md-6">
        <div class="card">
            <div class="text-center py-4 px-5 overlay-box">
                <div class="profile-photo">
                    <img src="{{ asset($patient->animal->photo) }}" width="100" class="img-fluid rounded-circle" alt="">
                </div>
                <h3 class="mt-3 mb-1 text-white">{{ $patient->animal->pet_name }}</h3>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <span class="mb-0">Propriétaire</span>
                    <strong class="text-muted">{{ $patient->petOwner->full_name }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span class="mb-0">Èspèce</span>
                    <strong class="text-muted">{{ $patient->animal->espece }}</strong>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span class="mb-0">Race</span>
                    <strong class="text-muted">{{ $patient->animal->race }}</strong>
                </li>
</ul>
             <div class="card-footer border-0 mt-0">
                 <a href="{{ route('medical.folder', $patient->animal->id) }}" class="btn btn-primary btn-lg btn-block">
                <h4 class="m-0 text-white">Voir le dossier</h4>
                </a>
             </div>
             </div>
    </div>
    @endforeach
</div>

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