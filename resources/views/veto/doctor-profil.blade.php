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
<h4>Bonjour  docteur </h4>
</div>
</div>
<div class="col-sm-6 p-md-0 justify-content-sm-end
mt-2 mt-sm-0 d-flex">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a
href="javascript:void(0)">Profil</a></li>
</ol>
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
@if($user)
    
    @if($user->profile_photo)
        <img src="{{ asset($user->profile_photo) }}" class="img-fluid rounded-circle" alt="" style='margin-left: initial; width: 150px;
    height: 150px;'>
    @else
        <img src="{{ asset('dashboard1/imgs/doctor.png') }}" class="img-fluid rounded-circle" alt="Photo par défaut">
    @endif
@else
    <p>Aucun utilisateur n'est connecté.</p>
@endif
</div>

</div>

</div>
<div class="profile-info">
<div class="row
justify-content-center">
<div class="col-xl-8">
<div class="row">
<div class="col-xl-4
col-sm-4 border-right-1 prf-col">
<div
class="profile-name">
<h4
class="text-primary">{{ $user->full_name }}</h4>
<p>{{ $user->specialty }}</p>
</div>
</div>
<div class="col-xl-4
col-sm-4 border-right-1 prf-col">
<div
class="profile-email">
<h4
class="text-muted">Email</h4>
<p>{{ $user->email}}</p>
</div>
</div>
<div class="col-xl-4
col-sm-4 prf-col">
<div
class="profile-call">
<h4
class="text-muted">Téléphone</h4>
<p> +216 {{ $user->phone }}</p>
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
<div class="row">
    <div class="col-xl-12 col-xxl-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Informations du compte</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('veterinarian.updateProfile') }}" method="post" enctype="multipart/form-data">
                    @csrf <!-- Ajoutez ceci pour inclure le jeton CSRF -->
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label class="form-label" for="edit-name">Nom et prénom</label>
                            <input type="text" value="{{ $user->full_name }}" class="form-control" id="edit-name" name="full_name">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-email">Email</label>
                            <input type="email" value="{{ $user->email }}" class="form-control" id="edit-email" name="email">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-phone">Téléphone</label>
                            <input type="text" value="{{ $user->phone }}" class="form-control" id="edit-phone" name="phone">
                        </div>
                        <div class="form-group">
                            
                     <label>Gouvernorat</label>
        <select class="form-control" id="inputState" name="address">
        
        <option value="Ben Arous">Ben Arous</option>
        <option value="Manouba">Manouba</option>
        <option value="Ariana">Ariana</option>
        <option value="Tunis">Tunis</option>
        <option value="Nabeul">Nabeul</option>
        <option value="Sousse">Sousse</option>
        <option value="Monastir">Monastir</option>
        <option value="Mahdia">Mahdia</option>
        <option value="Sfax">Sfax</option>
        <option value="Gabes">Gabes</option>
        <option value="Béja">Béja</option>
        <option value="Jandouba">Jandouba</option>
        <option value="Tozeur">Tozeur</option>
        <option value="Gbelli">Gbelli</option>
        <option value="Kasserine">Kasserine</option>
        <option value="Gafsa">Gafsa</option>
        <option value="Sidi Bouzid">Sidi Bouzid</option>
        <option value="Kairouan">Kairouan</option>
        <option value="Bizerte">Bizerte</option>
        <option value="Kef">Kef</option>
        <option value="Tataouin">Tataouin</option>
        <option value="Zaghouan">Zaghouan</option>
        <option value="Medenine">Medenine</option>
    </select>
</div>
                        </div>
                        <div class="form-group">
    <label for="profile_photo">Changer la photo de profil</label>
    <input type="file" class="form-control-file" id="profile_photo" name="profile_photo">
</div>
                        
                    </div>
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                        <button type="button" class="btn">Annuler</button>
                    </div>
                </form>
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