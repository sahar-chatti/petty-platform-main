<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from infycare.infyom.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 12:33:05 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>    <link href="{{asset('template/rappasoft/laravel-livewire-tables/core.min.css') }}" rel="stylesheet" />  
<link href="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.css') }}" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>    S'inscrire
 | Petty </title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('template/assets/images/PetLog.png')}}"  type="image/png">
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
    <script src="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.min.js') }}"  ></script></head>

<body style='background-color:#8EA7E9'
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed">
<div class="d-flex flex-column flex-root">
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
            <div class="d-flex flex-column flex-column-fluid align-items-center justify-content-center p-2">
        <div class="col-12 text-center">
            <a href="/" class="image mb-7 mb-sm-10">
                <img alt="Logo" src="{{asset('template/assets/images/logoPetty.png') }}" class="img-fluid" style="width:150px;" loading="lazy">
            </a>
        </div>
        <div class="width-540">
                                </div>
        <div class="bg-white rounded-15 shadow-md width-540 px-5 px-sm-7 py-10 mx-auto">
            <h1 class="text-center mb-7" style='color:#7286D3'>Propriétaire animal</h1>
            <!--<form method="POST" action="https://infycare.infyom.com/register" >
                <input type="hidden" name="_token" value="1YndV7H61YvdDslse2VS2YfXyZ1pUF2jdQg3hGGO" autocomplete="off">                <div class="row">
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="formInputFirstName" class="form-label">
                            Nom et Prénom:<span class="required"></span>
                        </label>
                        <input name="Full_name" type="text" class="form-control" id="Full_name" aria-describedby="full_name" placeholder="nom et prenom" value="" required>
                    </div>
                    <div class="col-md-6 mb-sm-7 mb-4">
                        <label for="last_name" class="form-label">
                            Téléphone:<span class="required"></span>
                        </label>
                        <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phone" placeholder="+216 ** *** ***" required value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-sm-7 mb-4">
                        <label for="email" class="form-label">
                            Email:<span class="required"></span>
                        </label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email@petty.com" value="" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-sm-7 mb-4">
                        <label for="address" class="form-label">
                            Adresse:<span class="required"></span>
                        </label>
                        <input name="address" type="text" class="form-control" id="address" aria-describedby="address" placeholder="votre adresse" value="" required>
                    </div>
                </div>
                <div class="mb-5 fv-row">
                    <div class="row">
                        <div class="col-md-6 mb-sm-7 mb-4 position-relative">
                            <label for="password" class="form-label">
                                Mot de passe:<span class="required"></span>
                            </label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="*********" aria-describedby="password" required>
                            <span
                                class="position-absolute d-flex align-items-center top-0 mt-7 bottom-0 end-0 me-6 input-icon input-password-hide cursor-pointer text-gray-600 change-type">
                                <i class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                        <div class="col-md-6 mb-sm-7 mb-4 position-relative">
                            <label for="password_confirmation" class="form-label">
                                Confirmer le Mot de passe:<span class="required"></span>
                            </label>
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmer mot de passe" id="password_confirmation" aria-describedby="confirmPassword" required>
                            <span
                                class="position-absolute d-flex align-items-center top-0 mt-7 bottom-0 end-0 me-6 input-icon input-password-hide cursor-pointer text-gray-600 change-type">
                                <i class="fas fa-eye-slash"></i>
                            </span> 
                        </div>
                    </div>

                    <div class="mb-sm-7 mb-4 form-check">
                        <input type="checkbox" class="form-check-input" name="toc" value="1" required/>
                        <span class="text-gray-700 me-2 ml-1">J'accepte
									<a href="terms-conditions.html"
                                       class="ms-1 link-primary">Termes et Conditions</a>.
                        </span>
                    </div>

                                            <div class="form-group mb-4 captcha-customize">
                            <div class="g-recaptcha" id="g-recaptcha"
                                data-sitekey="6LfPRTkpAAAAABVXthZO9kofnkcpHGcfEAp4PwAQ"
                                data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback">
                            </div>
                        </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Inscription</button>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <span class="text-gray-700 me-2">Vous-avez déjà un compte?</span>
                        <a href="login.html" class="link-info fs-6 text-decoration-none">
                        Connectez-vous ici
                        </a>
                    </div>
                </div>
            </form>-->
            @yield('contenu')
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

<!-- Mirrored from infycare.infyom.com/register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2024 12:33:05 GMT -->
</html>

