<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from infycare.infyom.com/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 12:33:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>    <link href="{{asset('template/rappasoft/laravel-livewire-tables/core.min.css')}}" rel="stylesheet" />     <link href="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.css')}}" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>    Mot de passe oublié
 | Petty</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('template/assets/images/petLog.png')}}"  type="image/png">
    <meta name="csrf-token" content="1YndV7H61YvdDslse2VS2YfXyZ1pUF2jdQg3hGGO">
    <!-- Fonts -->
    <!-- General CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css')}}">

    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>

    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/third-party.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/pagesa0de.css?id=387be576be001eb8d46d')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css')}}">

    <!-- CSS Libraries -->
    <script src="{{asset('template/rappasoft/laravel-livewire-tables/core.min.js')}}"  ></script> <script src="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.min.js')}}"  ></script></head>

<body style='background-color:#8EA7E9'
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
<div class="d-flex flex-column flex-root">
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
            <div class="d-flex flex-column flex-column-fluid align-items-center mt-12 p-4">
        <div class="col-12 text-center">
            <a href="index.html" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{asset('template/assets/images/logoPetty.png')}}" class="img-fluid" style="width:150px;" loading="lazy" >
            </a>
        </div>
        <div class="width-540">
        </div>
        <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto mx-auto">
            <h1 class="text-center mb-7">Vous-avez oublié votre mot de passe ?</h1>
            <div class="fs-4 mb-4 text-center mb-5">Aucun problème. Veuillez simplement nous fournir votre adresse e-mail, 
                et nous vous enverrons un lien de réinitialisation de mot de passe par e-mail, 
                qui vous permettra d'en choisir un nouveau.</div>
           <form class="form w-100" method="POST" action="https://infycare.infyom.com/forgot-password">
                <input type="hidden" name="_token" value="1YndV7H61YvdDslse2VS2YfXyZ1pUF2jdQg3hGGO" autocomplete="off">                <div class="row">
                    <div class="mb-4">
                        <label for="email" class="form-label">
                            Email:<span class="required"></span>
                        </label>
                        <input id="email" class="form-control form-control-solid" type="email"
                               value=""
                               required autofocus name="email" autocomplete="off" placeholder="Email"/>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="form-group col-sm-12 d-flex text-start align-items-center">
                        <button type="submit" class="btn " style='background-color:#E5E0FF'>
                            <span class="indicator-label" > Email Password Reset Link</span>
                        </button>

                        <a href="login.html"
                           class="btn btn-secondary my-0 ms-5 me-0" style='background-color:#FFF2F2;'>Cancel</a>
                    </div>
                </div>
            </form>
          
        </div>
    </div>
    </div>
</div>

<footer>
    <div class="container-fluid padding-0">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-6">
                <div class="copyright text-center text-muted">
                Tous droits réservés &copy; 2024 <a href="index.html"
                                                                  class="font-weight-bold ml-1"
                                                                      target="_blank">Veterinarian Appointment Management</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{asset('template/backend/js/vendor.js')}}"></script>
    <script src="{{asset('template/assets/js/auto_fill/auto_fill7769.js?id=2ce01d55e867c3ab0651')}}"></script>
    
    <script src="{{asset('template/js/custom-authe17e.js?id=a1deaa141688f6cfdf5d')}}"></script>
    <script src='../www.google.com/recaptcha/api.js'></script>
        <script>
    $(document).ready(function () {
        $('.alert').delay(5000).slideUp(300);
    });
</script>
</body>

<!-- Mirrored from infycare.infyom.com/forgot-password by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 12:33:35 GMT -->
</html>

