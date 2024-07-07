@extends('layouts.general_structure')
@section('content')
<head>  
      <link href="{{asset('/template/rappasoft/laravel-livewire-tables/core.min.css')}}" rel="stylesheet" />     <link href="{{asset('/template/rappasoft/laravel-livewire-tables/thirdparty.css" rel="stylesheet')}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Clinic Appointment Management" />
    <link rel="icon" href="{{asset('template/assets/images/petLog.png')}}"  type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- META ============== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- OG -->
    <meta name="robots" content="index, follow">

    <!-- Google Fonts -->
    <link rel="preconnect" href="http://fonts.googleapis.com/">
    <link rel="preconnect" href="http://fonts.gstatic.com/" crossorigin>
    <link
        href="http://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="{{asset('/template/css/front-third-party17a5.css?id=ef9167daaab74cccef41')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('/template/css/front-pagese16f.css?  id=a50fd38a2369e2ca1e4f')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="{{asset('/template/assets/css/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/template/assets/css/intlTelInput.css')}}">


    <link rel="stylesheet" href="{{asset('template/style.css')}}">

    <!-- Document Title ===================== -->
    <title>    Acceuil
 | Petty </title>
    <script src="{{asset('/template/messages.js')}}"></script>
    <script src="{{asset('/template/assets/front/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/template/js/front-third-party11f6.js?id=91dab509a31c81494ee9')}}"></script>
    <script src="{{asset('/template/js/front-pagesfc8a.js?id=9b3b606e09bfe65c0be5')}}"></script>
    <script src="{{asset('/template/assets/js/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script data-turbo-eval="false">
        let currencyIcon = '$'
        let isSetFirstFocus = false
        let csrfToken = "7XzH6nmQ0AaUL6RmM0YinhEEtQOhoBaSB3KJimwQ"
        let defaultCountryCodeValue = "lu"
    </script>
    <script src="http://js.stripe.com/v3/"></script>
    <script src="../checkout.razorpay.com/v1/checkout.js"></script>
    <script src='../www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
   

</script>
    <script data-turbo-eval="false">
        let appointmentStripePaymentUrl = 'appointment-stripe-charge.html';
        let stripe = '';
         stripe = Stripe('pk_test_pBPeDoURc1oUVav3sXDDw3Ss');
        let manually = "1";
        let paystack = "3";
        let paypal = "4";
        let stripeMethod = "2";
        let razorpayMethod = "5";
        let authorizeMethod = "6";
        let paytmMethod = "7";
        let checkLanguageSession = 'en'
            Lang.setLocale(checkLanguageSession);
        let options = {
            'key': "rzp_test_SjGMMN12JLEKQU",
            'amount': 0, //  100 refers to 1
            'currency': 'INR',
            'name': "Petty Platform",
            'order_id': '',
            'description': '',
            'image': 'https://infycare-demo.nyc3.digitaloceanspaces.com/58/infyCare-logo.png', // logo here
            'callback_url': "https://infycare.infyom.com/razorpay-payment-success",
            'prefill': {
                'email': '', // recipient email here
                'name': '', // recipient name here
                'contact': '', // recipient phone here
                'appointmentID': '', // appointmentID here
            },
            'readonly': {
                'name': 'true',
                'email': 'true',
                'contact': 'true',
            },
            'theme': {
                'color': '#4FB281',
            },
            'modal': {
                'ondismiss': function() {
                    $('.book-appointment-message').css('display', 'block');
                    let response =
                        '<div class="gen alert alert-danger">Appointment created successfully and payment not completed.</div>';
                    $('.book-appointment-message').html(response).delay(5000).hide('slow');
                    setTimeout(function() {
                        location.reload();
                    }, 1500);
                },
            },
        }
    </script>
<script src="{{asset('/template/rappasoft/laravel-livewire-tables/core.min.js')}}"  ></script> 
<script src="{{asset('/template/rappasoft/laravel-livewire-tables/thirdparty.min.js')}}"  ></script></head>


<body>
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible position-fixed top- start-50 translate-middle-x" style="top: 100px;" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="waywa">
    <section class="home-section" style="background-image: url('template/imgs/petty_bg.png'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Déplacer le texte sous la barre de navigation -->
                    <h2 class="petty" >La <br> meilleure adresse pour  <a class="p" style='text-decoration: none; color: #FFD0D0;' >Ton animal </a> </h2><br>
                   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class='btn mb-lg-5 col-xl-4 col-md-6'>
                        <a style='text-decoration: none; font-size: 30px; color:white;' href='register'>Rejoindre!</a>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- start about section -->
<section class="about-section p-b-65" id='about'>
    <div class="container">
    <div class="text-center mb-lg-5 mb-4 p-2">
            <h1 >Qui sommes nous?</h1>
        </div>
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-7">
                <div class="about-right-content mb-md-5 mb-4 mb-xl-0 text-center text-xl-start">
                    <h2 class="pb-2" style="color: #7286D3">Bienvenue chez "PETTY" plateforme !</h2>
                    <p class="paragraph pb-1" style='font: size 35px;'>
                        Bienvenue sur notre plateforme !<br>
                        Nous sommes un espace en ligne conçu pour faciliter la vie des propriétaires d'animaux et
                        des professionnels de la santé animale.<br>Notre mission est de créer un environnement
                        où la santé et le bien-être de nos compagnons à quatre pattes sont prioritaires.
                    </p>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="d-flex justify-content-center justify-content-md-end">
                    <img src="{{asset('template/imgs/services/3pet.png')}}" alt="Book An accessory" class="img-fluid object-image-cover" loading="lazy" />
                </div>
            </div>
        </div>
    </div>
</section>


<!--our services -->
<div class="ahla">
<section class="appointmnet-section p-t-100 p-b-100" id="services">
<div class="container">
<div class="text-center mb-lg-5 mb-4">
<h1 class="">Nos services</h1>
</div>
<div class="row justify-content-center">
<div class="col-xl-4 col-md-6">
<div class="card mx-lg-2 h-100 text-md-start text-center">
<div class="card-body " >
<div class="card---">
<img class="img" src="{{asset('template/imgs/services/img1.jpg')}}" alt="" >
<h4 class="card-title fs-5">
Suivi GPS en temps réel :
</h4>
<p class="paragraph mb-0">
Le suivi GPS en direct vous permet de voir toutes les farces ludiques de
votre animal de compagnie, des ébats de parc aux zoomies de jardin. Recevez une alerte
s’ils errent trop loin et poussez un soupir de soulagement en sachant qu’ils
sont en sécurité.
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 mt-md-0 mt-4">
<div class="card mx-lg-2 h-100 text-md-start text-center">
<div class="card-body">
<div class="card---">
<img class="img" src="{{asset('template/imgs/services/img(2).png')}}" alt="" >
<h4 class="card-title fs-5">
Dossier médical sécurisé :
</h4>
<p class="paragraph mb-0">
Stockez en toute sécurité les dossiers de vaccination, les alertes aux
allergies, les notes du vétérinaire et même les rappels . Tous ces éléments sont facilement
accessibles, à tout moment et en tout lieu. C'est leur centre de santé personnalisé !
</p>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 mt-xl-0 mt-4 pt-xl-0 pt-lg-3">
<div class="card mx-lg-2 h-100 text-md-start text-center">
<div class="card-body">
<div class="card---">
<img class="img" src="{{asset('template/imgs/services/img3.jpg')}}" alt="" >
<h4 class="card-title fs-5">
Contactez des vétérinaires instantanément :
</h4>
<p class="paragraph mb-0">
Vous êtes préoccupé par la santé de votre animal de compagnie ? Pas de soucis !
 Contactez des vétérinaires certifiés pour des conseils professionnels, 
 des consultations et même pour fixer des rendez-vous, le tout à travers notre application.
  C'est comme avoir un vétérinaire personnel à portée de main !
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</div>
<!-- end our services -->

<!-- start appointment section -->
<section class="about-section p-b-100" id='appointment'>
<div class="container">
<div class="row align-items-center flex-column-reverse flex-xl-row">
<div class="col-xxl-6 col-xl-5 after-rectangle-shape position-relative
about-left-content left-shape">
<div class="row position-relative z-index-1" style="color: #7286D3">
<div class="col-xl-6 col-md-3 about-block" >
<div class="about-image-box rounded-20 bg-white">
<img src="{{asset('template/imgs/services/vet3.jpg')}}" alt="About"
class="rounded-20" loading="lazy" />
</div>
</div>
<div class="col-xl-6 col-md-3 about-block">
<div class="about-image-box rounded-20 bg-white">
<img src="{{asset('template/imgs/services/vet2.jpg')}}" alt="About"
class="rounded-20" loading="lazy" />
</div>
</div>
<div class="col-xl-6 col-md-3 about-block">
<div
class="about-content-box rounded-20 bg-white d-flex
align-items-center justify-content-center h-100">
<div class="text-center">
<h2 class="number-big" style="color: #7286D3">20</h2>
<p class="mb-0">Véterinaires</p>
</div>
</div>
</div>
<div class="col-xl-6 col-md-3 about-block">
<div class="about-image-box bg-white rounded-20">
<img src="{{asset('template/imgs/services/vet1.jpg')}}" alt="About"
class="rounded-20" loading="lazy" />
</div>
</div>
</div>
</div>
<div class="col-xxl-6 col-xl-7">
<div class="about-right-content mb-md-5 mb-4 mb-xl-0 text-center text-xl-start">
<h2 class="pb-2" style="color: #7286D3">Réservez votre rendez-vous en toute simplicité</h2>
<p class="paragraph pb-1">
Simplifiez la prise de rendez-vous vétérinaire avec notre plateforme en ligne,
 Petty. Réservez facilement des consultations pour vos compagnons à quatre pattes et
  profitez de l'expertise de nos vétérinaires certifiés en quelques clics !
</p>
<ul class="d-flex ps-0 mb-4 pb-2 justify-content-center justify-content-xl-start
flex-wrap">
<li class="mb-2">Aide d'urgence</li>
<li class="mb-2">Médecins qualifiés</li>
<li class="mb-2">Les meilleurs professionnels</li>
</ul>
<a href="RendezVous"
class="btn " style='text-decoration:none' data-turbo="false">Réservez maintenant </a>
</div>
</div>
</div>
</div>
</section>
<!-- end about section -->

<!-- start how-it-work section -->
<section class="how-work-section p-t-100 p-b-100" id='produit'>
<div class="how-it-works">
<br>

<div class="container">

<div class="text-center mb-lg-5 mb-4">
<h1 class="">Comment suivre ton animal !</h1>
</div>
 <div class="row justify-content-center">
    <div class="col-xl-4 col-md-6">
        <div class="card mx-lg-2 h-100 text-md-start text-center">
            <div class="card-body">
                <h3 class="cardnumber " > 1 </h3>
                <img src="{{asset('template/imgs/services/step1.jpg')}}" class="img--" alt="">
                <h4 class="card-title fs-5"> Passer une commande </h4>
                <p class="paragraph mb-0">
                   Une fois que vous avez saisi vos informations, vous pouvez confirmer
                   votre commande et recevrez un e-mail de confirmation ..
                </p>
            </div>
        </div>
    </div>
<div class="col-xl-4 col-md-6 mt-md-0 mt-4">
<div class="card mx-lg-2 h-100 text-md-start text-center">
<div class="card-body">
<h3 class="cardnumber">
2
</h3>
<img src="{{asset('template/imgs/services/step2.avif')}}" class="img--"
alt="">
<h4 class="card-title fs-5">
Recevoir la commande
</h4>
<p class="paragraph mb-0">
Une fois expédiée, vous recevez votre commande à l'adresse donnée,
payant à la livraison.
</p>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6 mt-xl-0 mt-4 pt-xl-0 pt-lg-3">
<div class="card mx-lg-2 h-100 text-md-start text-center">
<div class="card-body">
<h3 class="cardnumber">
3
</h3>
<img src="{{asset('template/imgs/services/step3.jpg')}}" class="img--"
alt="">
<h4 class="card-title fs-5">
Commencer
</h4>
<p class="paragraph mb-0">
Vous démarrez le suivi , vous pouvez visualiser les déplacements de
votre animal et recevoir des notifications en temps réel.
</p>
</div>
</div>
</div>
</div>
<div style="display: flex; justify-content: center;">
  <button class='btn mb-lg-5 col-xl-4 col-md-12'>
    <a style='text-decoration: none; color:white' href='produit'>voir produit</a>
  </button>
</div>
</div>
</div>
</section>
<!-- end how-it-work section -->

<!-- start contact form section -->
<section class="contact-section bg-secondary p-t-100 p-b-100">
<div class="col-12">
                    <div class="hero-content text-center">
                        <h1 class="mb-3" style='color: #7286D3'>
                            Contactez nous
                        </h1>

                    </div>
                </div>
                <br><br>
            <div class="container">
                <div class="bg-white rounded-20 box-shadow main-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 d-none d-md-block">
                            <div class="card bg-primary contect-information" style="background-color: #7286D3">

                                <div class="card-body " style="background-color: #7286D3">
                                    <div class="">
                                    <h4 class="text-white mb-4 pb-2"> Contactez-nous pour plus d'information</h4>
                                    <div class="text-white">
                                        <h5 class="mb-3"> localisation</h5>
                                        <p class="paragraph text-white">Immeuble almajd 3éme étage N 21, Avenue 27 octobre Mareth , Gabès, Tunisie.</p>
                                    </div>
                                    <div class="text-white">
                                        <h5 class="mb-3">Email &  Téléphone</h5>
                                        <a href=" mailto:infycare@email.com" class="text-decoration-none text-white d-block">
                                            petty@email.com
                                        </a>
                                        <a href="  tel:+   +216 29388198"
                                           class="text-decoration-none text-white d-block">
                                           +216 29388198
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-9 col-md-8 ps-md-4 pe-md-4">
                            <br>
                            <br>
                            <form id="enquiryForm" action="{{ url('/contact') }}" 
                                   method="POST">
                                  @csrf
                                  
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form__input-block">
                                            <input class="form-control" id="name" placeholder="Nom et prénom" required name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form__input-block">
                                            <input class="form-control" id="email" placeholder="Email" required name="email" type="email">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="contact-form__input-block">
                                            <input class="form-control" id="subject" placeholder="Sujet" required maxlength="121" name="subject" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form__input-block">
                                            <textarea class="form-control form-textarea" id="message" placeholder="Message" required name="message" cols="50" rows="10"></textarea>
                                        </div>
    </div>
                                    <div class="col-lg-12 text-end mt-10" style="display: flex; justify-content: center; ">
                                        <button type="submit" class="btn " >Envoyer </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact form section -->

</body>

<style>

.home--{

}
.home---{
    background-image: url('./imgs/petty_bg.png');
}
.top{
    margin-top: 350px;
}
.btn {
    margin-top: 30px;
    padding: 13px 40px;
    background-color: #7286D3;
    color: #ffffff;
    border: none;
    margin-left: 100px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .cardnumber{
    -webkit-text-stroke: 6px transparent;
    background: linear-gradient(#8EA7E9, #8EA7E9);
    -webkit-background-clip: text;
    background-size: cover;
    color: #fff;
    font-size: 100px;
    font-weight: 700;
    line-height: 85px;
    text-transform: capitalize;
}

  .btn:hover {
    background-color: #FFF2F2; /* Change background color on hover */
    cursor: pointer; /* Change cursor to pointer on hover */
  }
  .ahla{
   background-image: url('./imgs/petty\ bgg.png');
  }

  .content_1 {
text-align: left;
margin-top: 50px;
margin-bottom: 130px;
/* Adjust as needed */
}
/* Styles for the headings */
.petty {
font-size:5em ;
color: #f7f7f7;
font-weight: bolder;
margin-top: 180px;

text-align: left;
margin-left:60px ;
margin-right: 500px;
line-height: 0.8;
}
.h1{
    color:#464f57;
}
.content h2 {
font-size: 1.5em;
color: #464f57;
margin-top: 50px;
margin-left: 60px;
font-weight: bold;
font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
sans-serif;
}
/* Styles for the paragraph */
.p {
    font-size:0.9em ;
    line-height: 0.9;
color: #FFD0D0;
margin-left: 60px;
font-weight: bold;
text-decoration: none;
}
/* Styles for the homepage container */
.homepage-container {
position: relative;
}
.waywa{
margin-top: -50px;
z-index: -1;
background-size: 100%;
background-image: url('template/assets/imgs/petty_bg.png');
}

.card--{
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .25rem;
}
.card-body
{
    border-end-end-radius: 70px;
}
.contact-form__input-block {
    margin-bottom: 20px; /* Changer l'espace entre les lignes */
}
.contact-form__input-block input,
.contact-form__input-block textarea {
    padding: 10px; /* Changer le padding */
}
  </style>
@endsection 