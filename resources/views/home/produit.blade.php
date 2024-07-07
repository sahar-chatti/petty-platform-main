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
    <title>    Produit
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
 <!-- start hero section -->
 <section class="hero-content-section bg-white p-t-100 p-b-100">
            <div class="container p-t-30">
                <div class="col-12">
                    <div class="hero-content text-center">
                        <h1 class="mb-3" style='color: #7286D3'>
                            Réserver un collier intelligent
                        </h1>

                    </div>
                </div>
            </div>
            @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
           @endif
        </section>
        <!-- end hero section -->

                              <!-- start Booking section -->
                              <section class="appointmnet-section p-t-100 p-b-100">
    <div class="container">
        <div class="box">
            <div class="row align-items-center">
                <div id="carouselExampleControls" class="carousel slide col-lg-6 align-self-end d-none d-lg-block" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('template/imgs/services/img1.jpg')}}" class="d-block w-100" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('template/imgs/services/img2.jpg')}}" class="d-block w-100" alt="Second slide">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{asset('template/imgs/services/img5.jpg')}}" class="d-block w-100" alt="Third slide">
                        </div>
                        <!-- Add more carousel items here -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="col-lg-6 contact-form">
                    <h2 class="pb-2 text-white text-center mb-4 pb-3">Collier intelligent !</h2>
                    <p class="text-white  mb-4 pb-3">
                        Le collier parfait pour garder votre chat en sécurité en utilisant la technologie GPS. 
                        Fini les colliers qui pourraient gêner les repas de votre chat.
                        <br>
                        Fabriqué avec un cuir végétalien finement travaillé
                        <br>
                        Poche sécurisée pour la puce GPS
                        <br>
                        Large sangle pour un confort maximal et moins de pression sur le cou de votre animal
                        <br>
                        <br>
                        <div>
                        <strong style="color:white; font-size: 30px;">Prix : {{ $produit->prix }} dinar</strong>
                              @if ($produit->stock === 0)
                              <span class="alert alert-warning">Rupture de stock</span>
                                 @endif
                            </div>

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        
                        <!-- start Booking section -->
<section class="appointmnet-section p-t-100 p-b-100">
<div class="container" >
<div class="box">
<div class="row align-items-center">
<div class="col-lg-6 align-self-end d-none d-lg-block">
<img src="{{asset('template/imgs/services/booking.png')}}"
alt="Book An accessory" class="img-fluid object-image-cover" loading="lazy" />
</div>
<div class="col-lg-6 contact-form">
    <h2 class="pb-2 text-white text-center mb-4 pb-3">Réserver votre accessoire !</h2>
    <form action="/book-product" method="POST" turbo:load>
        @csrf
    


        @if ($produit->stock === 0)
            <div class="alert-custom">
                Désolé, le produit n'est pas disponible pour le moment. Veuillez essayer plus tard.
            </div>
        @else
            <input type="hidden" id="produit_id" name="produit_id" value="{{ $produit->id }}">
            <div class="row">
                <br>
                <br>
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class="contact-form__input-block">
                        <input type="email" name="email" class="form-control required form-control-transparent" placeholder="Email" required>
                    </div>
                </div>
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class="contact-form__input-block">
                        <input type="quantity" name="quantity" class="form-control required form-control-transparent" placeholder="Quantité" required>
                    </div>
                </div>

                <div class="col-lg-12 text-center mt-4">
                    <button type="submit" class="btn-">Confirmer</button>
                </div>
            </div>
        @endif
    </form>
</div>



</body>


</html>

<style>
.alert-custom {
    padding: 0.75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: 0.25rem;
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.home--{

}
.home---{
    background-image: url('./imgs/petty_bg.png');
}
.top{
    margin-top: 350px;
}
.btn  {
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

  .btn:hover  {
    background-color: #FFF2F2; /* Change background color on hover */
    cursor: pointer; /* Change cursor to pointer on hover */
  }
  .ahla{
   background-image: url('./imgs/petty\ bgg.png');
  }
.card---{
 background-color: rgb(255, 255, 255);

}
.img{
    display: block;
    width: 330px;
    height: 220px;
    margin-left: -px;
    margin-top: -20px;
    border-end-end-radius: 50px ;;
    background-color: #FFF;
    border: 5px solid #FFF;
    object-fit: cover;
}
.img--{
    display: block;
    width: 180px;
    height: 180px;
    margin-left: 50px;
    text-align: center;
    margin-right: 20px;
    margin-top: -15px;
    border-end-end-radius: 50px ;;
    background-color: #FFF;
    border: 5px solid #FFF;
    object-fit: cover;
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
</style>
@endsection