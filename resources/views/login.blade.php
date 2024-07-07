<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>  
    <link href="{{asset('template/rappasoft/laravel-livewire-tables/core.min.css') }}" rel="stylesheet" />   
    <link href="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.css') }}" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>    Connexion
 | Petty</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('template/assets/images/PetLog.png')}}" type="image/png">
    <meta name="csrf-token" content="1YndV7H61YvdDslse2VS2YfXyZ1pUF2jdQg3hGGO">
    <!-- Fonts -->
    <!-- General CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/third-party.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/pagesa0de.css?id=387be576be001eb8d46d') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css') }}">

    <!-- CSS Libraries -->
    <script src="{{asset('template/rappasoft/laravel-livewire-tables/core.min.js') }}"  ></script> 
    <script src="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.min.js') }}"  ></script>
</head>

<body style='background-color:#8EA7E9'
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
<div class="d-flex flex-column flex-root">
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
            <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-4">
        <div class="col-12 text-center">
            <a href="/" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{asset('template/assets/images/logoPetty.png') }}" class="img-fluid" style="width:150px;" loading="lazy">
            </a>
        </div>
        <div class="width-540">
                                </div>
        <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7" style='color:#7286D3'>Se connecter</h1>
            @if(session('error'))
    <div class="alert alert-danger" >
        {{ session('error') }}
    </div>
@endif
           <!-- <form method="POST" action="https://infycare.infyom.com/login">
                <input type="hidden" name="_token" value="1YndV7H61YvdDslse2VS2YfXyZ1pUF2jdQg3hGGO" autocomplete="off">    
                            <div class="mb-sm-7 mb-4">
                    <label for="email" class="form-label">
                        Email:<span class="required"></span>
                    </label>
                    <input name="email" type="email" class="form-control" id="email"   required >
                </div>

                <div class="mb-sm-7 mb-4 position-relative">
                    <div class="d-flex justify-content-between">
                        <label for="password" class="form-label">Mot de passe:<span
                                    class="required"></span></label>
                                                    <a href="forgot-password.html" class="link-info fs-6 text-decoration-none">
                                Mot de passe oublié?
                            </a>
                                            </div>
                    <input name="password" type="password" class="form-control" id="password" required placeholder="Enter Password">
                    <span class="position-absolute d-flex align-items-center top-0 bottom-0 end-0 mt-7 me-4 input-icon input-password-hide cursor-pointer text-gray-600 change-type">
                        <i class="fas fa-eye-slash"></i>
                    </span>
                </div>

                <div class="mb-sm-7 mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me">
                    <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                </div>
                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                    <button type="button" class="btn btn-warning w-100 admin-login mt-5" tabindex="4">Admin</button>
                    <div class="row justify-content-between mt-5">
                        <div class="col-6">
                            <button type="button" class="btn btn-success w-100 doctor-login" tabindex="4">Vétérinaire</button>
                        </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-danger w-100 patient-login" tabindex="4">Propriétaire animal</button>
                            </div>
                        </div>
                    </div>
                <div class="d-flex align-items-center mb-10 mt-4">
                    <span class="text-gray-700 me-2">Nouveau ici?</span>
                    <a href="register.html" class="link-info fs-6 text-decoration-none">
                        Créer un nouveau compte
                    </a>
                </div>
            </form>-->
            @yield('content')
        </div>
    </div>
    </div>
</div>

<footer>
    <div class="container-fluid padding-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6">
                <div class="copyright text-center text-muted">
                Tous droits réservés &copy; 2024 <a href="/"
                 class="font-weight-bold ml-1"target="_blank">Veterinarian Appointment Management</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{asset('template/backend/js/vendor.js') }}"></script>
    <script src="{{asset('template/assets/js/auto_fill/auto_fill7769.js?id=2ce01d55e867c3ab0651') }}"></script>
    
    <script src="{{asset('template/js/custom-authe17e.js?id=a1deaa141688f6cfdf5d') }}"></script>
    <script src='../www.google.com/recaptcha/api.js'></script>
        <script>
    $(document).ready(function () {
        $('.alert').delay(5000).slideUp(300);
    });
</script>
</body>

<!-- Mirrored from infycare.infyom.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 12:33:05 GMT -->
</html>

