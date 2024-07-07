@extends('layouts.general_structure')
@section('content')
<head>    <link href="{{asset('/template/rappasoft/laravel-livewire-tables/core.min.css')}}" rel="stylesheet" />     <link href="{{asset('/template/rappasoft/laravel-livewire-tables/thirdparty.css" rel="stylesheet')}}" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Clinic Appointment Management" />
    <link rel="icon" href="{{asset('/template/assets/images/PettyLogo.png')}}" type="image/png">
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
    <title>    Contact
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
                            Contactez-nous
                        </h1>

                    </div>
                </div>
            </div>
            @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
           @endif
        </section>
        <!-- end hero section -->

        <!-- start contact form section -->
<section class="contact-section bg-secondary p-t-100 p-b-100">

                <br><br>
            <div class="container">
                <div class="bg-white rounded-20 box-shadow main-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 d-none d-md-block">
                            <div class="card bg-primary contect-information" style="background-color: #7286D3">

                                <div class="card-body " style="background-color: #7286D3">
                                    <div class="">
                                    <h4 class="text-white mb-4 pb-2"> Contactez-nous pour plus d'informations</h4>
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

        <!-- start contact information section -->
        <section class="information-section p-t-100 p-b-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body d-flex flex-column">
                                <div class="contact-icon-box d-flex align-items-center justify-content-center mb-4">
                                    <i class="fa-solid fa-phone text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-3 pt-2">  Numéro de téléphone </h4>
                                <a href=" tel:+216 29388198" class="text-decoration-none text-gray-100 d-block fw-light">
                                    +216 29388198
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-md-0 mt-4">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body d-flex flex-column">
                                <div class="contact-icon-box d-flex align-items-center justify-content-center mb-4">
                                    <i class="fa-solid fa-envelope text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-3 pt-2">Adresse Email</h4>
                                <a href=" mailto:petty@email.com" class="text-decoration-none text-gray-100 d-block fw-light">
                                    petty@email.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-xl-0 mt-4 pt-xl-0 pt-lg-3">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body d-flex flex-column">
                                <div class="contact-icon-box d-flex align-items-center justify-content-center mb-4">
                                    <i class="fa-solid fa-location-dot text-primary fs-3"></i>
                                </div>
                                <h4 class="mb-3 pt-2">Adresse</h4>
<p class="paragraph mb-0">
    Immeuble almajd 3ème étage N 21, Avenue 27 octobre Mareth , Gabès, Tunisie.
</p>
<p class="mb-0">
    <a href="https://www.google.com/maps?q=Immeuble+almajd+3ème+étage+N+21,+Avenue+27+octobre+Mareth+,+Gabès,+Tunisie" target="_blank">Voir sur Google Maps</a>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact information section -->
    </div>

</body>


</html>





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