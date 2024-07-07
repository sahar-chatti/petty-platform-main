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
    <title>    FAQ
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
    <section class="home-section" style="background-image: url('template/imgs/petty_bg.png');width: 100%;position: relative;
    display: inline-block;
    vertical-align: middle;
    height: 700px;">
         <div class="container">
        <div class="row justify-content-center">
            <div class="col text-center" style="margin-top:100px;">
                <!-- Déplacer le texte sous la barre de navigation -->
                <h2 class="petty">Page <a class="p" style='text-decoration: none; color: #FFD0D0;'>FAQ</a></h2>
            </div>
        </div>
    </div>
    </section>
</div>
<style>
  .about-us {
    padding: 50px 0;
    background-color: #FFF2F2;
  }
  .section-heading h6 {
    color: #7286D3;
    font-weight: bold;
    font-size: 16px;
    text-transform: uppercase;
    margin-bottom: 10px;
  }
  .section-heading h2 {
    color: #7286D3;
    font-size: 36px;
    margin-bottom: 20px;
  }
  .section-heading p {
    color: #8EA7E9;
    font-size: 18px;
  }
  .accordion-button {
    background-color: #E5E0FF;
    color: #7286D3;
    font-weight: bold;
  }
  .accordion-button:focus {
    box-shadow: none;
  }
  .accordion-button:not(.collapsed) {
    color: #FFF2F2;
    background-color: #7286D3;
  }
  .accordion-body {
    background-color: #E5E0FF;
    color: #7286D3;
    border: 1px solid #7286D3;
  }
  .section-heading {
    text-align: left;
    margin-bottom: 30px;
  }
</style>

<div class="section about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 align-self-center">
        <div class="section-heading">
          <h6>À Propos Petty</h6>
          <h2>Qu'est-ce qui fait de Petty la meilleure plateforme pour vos animaux de compagnie ?</h2>
          <p>Découvrez ce qui distingue Petty des autres plateformes et commencez dès aujourd'hui votre parcours vers une meilleure gestion de la santé et du bien-être de vos animaux de compagnie.</p>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Par où commencer sur Petty?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Découvrez les fonctionnalités de la plateforme Petty où vous pouvez prendre des rendez-vous vétérinaires, acheter des produits pour animaux, et gérer les dossiers médicaux de vos animaux de compagnie. Explorez nos offres dès maintenant et lancez-vous vers une meilleure gestion de la santé de vos animaux!
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Comment travaillons-nous ensemble sur Petty?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Découvrez les fonctionnalités collaboratives de la plateforme Petty qui facilitent la communication entre les propriétaires d'animaux et les vétérinaires, ainsi que la gestion efficace des rendez-vous et des traitements.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Pourquoi choisir Petty pour vos animaux de compagnie?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Petty offre une multitude de services de qualité, y compris des consultations vétérinaires, des produits pour animaux de compagnie, et une gestion facile des dossiers médicaux, pour assurer la santé et le bien-être de vos animaux.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Recevons-nous le meilleur support sur Petty?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                L'équipe de support de Petty est toujours là pour répondre à vos questions et résoudre vos problèmes, afin de vous garantir la meilleure expérience possible pour vous et vos animaux.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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