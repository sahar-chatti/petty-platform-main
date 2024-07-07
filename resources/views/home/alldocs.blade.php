@extends('layouts.general_structure')
@section('content')

<head>    <link href="{{asset('/template/rappasoft/laravel-livewire-tables/core.min.css')}}" rel="stylesheet" />     <link href="{{asset('/template/rappasoft/laravel-livewire-tables/thirdparty.css" rel="stylesheet')}}" />
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
    <title>    Liste vétérinaire
 | Petty </title>
    <script src="{{asset('/template/messages.js')}}"></script>
    <script src="{{asset('/template/assets/front/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/template/js/front-third-party11f6.js?id=91dab509a31c81494ee9')}}"></script>
    <script src="{{asset('/template/js/front-pagesfc8a.js?id=9b3b606e09bfe65c0be5')}}"></script>
    <script src="{{asset('/template/assets/js/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
    
    <script src="http://js.stripe.com/v3/"></script>
    <script src="../checkout.razorpay.com/v1/checkout.js"></script>
    <script src='../www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
   

</script>
    
<script src="{{asset('/template/rappasoft/laravel-livewire-tables/core.min.js')}}"  ></script> <script src="{{asset('/template/rappasoft/laravel-livewire-tables/thirdparty.min.js')}}"  ></script></head>

<body>
<div class="contact-page">
        <!-- start hero section -->
        <section class="hero-content-section bg-white p-t-100 p-b-100">
            <div class="container p-t-30">
                <div class="col-12">
                    <div class="hero-content text-center">
                        <h1 class="mb-3" style='color: #7286D3'>
                           Liste des vétérinaires 
                        </h1>

                    </div>
                </div>
            </div>
            @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
           @endif
        </section>
        <!-- end hero section -->


        <!--**********************************
            Content body start
        ***********************************-->
   
        <div class="container p-t-30">
        <div class="row">
        @foreach ($veterinarians as $veterinarian)
        <div class="col-md-4">
            <div class="card" style="width: 20rem;">
                <img src="{{ asset($veterinarian->profile_photo) }}" alt="Photo du vétérinaire" class="card-img-top img-fluid" style="max-height: 250px;">
                <div class="card-body p-3">
                    <h3 style='color:#7286D3'>{{ $veterinarian->full_name }}</h3>
                    <p>Email : {{ $veterinarian->email }}</p>
                    <p>Téléphone : {{ $veterinarian->phone }}</p>
                    <p>Ville : {{ $veterinarian->address }}</p>
                    <p>Adresse : {{ $veterinarian->gouvernement }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </div>
        <!--**********************************
            Content body end
        ***********************************-->

<style>
    .card {
    border: 0;
    border-radius: 50px 0 50px 0;
    margin-bottom: 50;
}
</style>
      


@endsection
