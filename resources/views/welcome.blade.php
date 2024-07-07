<!DOCTYPE html>
<html dir="ltr" lang="en">


<<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>    <link href="{{asset('template/rappasoft/laravel-livewire-tables/core.min.css" rel="stylesheet')}}" />     <link href="{{asset('template/rappasoft/laravel-livewire-tables/thirdparty.css')}}" rel="stylesheet" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Clinic Appointment Management" />
    <link rel="icon" type="image/png" sizes="16x16"
href="{{asset('template/assets/images/petLog.png')}}">    <meta name="viewport" content="width=device-width, initial-scale=1" />

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


    <link href="{{asset('template/css/front-third-party17a5.css?id=ef9167daaab74cccef41')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('template/css/front-pagese16f.css?id=a50fd38a2369e2ca1e4f')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"href="{{asset('template/assets/css/bootstrap-datepicker/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/intlTelInput.css')}}">

   <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}">
    <!-- Document Title ===================== -->
    <title>    Doctors
 | Clinic Appointment Management</title>
    <script src="messages.js"></script>
    <script src="{{asset('template/assets/front/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/js/front-third-party11f6.js?id=91dab509a31c81494ee9')}}"></script>
    <script src="{{asset('template/js/front-pagesfc8a.js?id=9b3b606e09bfe65c0be5')}}"></script>
    <script src="{{asset('template/assets/js/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
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
            'name': "Clinic Appointment Management",
            'order_id': '',
            'description': '',
            'image': 'https://infycare-demo.nyc3.digitaloceanspaces.com/58/infyCare-logo.png', // logo here
            'callback_url': ",
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
<script src="{{asset('rappasoft/laravel-livewire-tables/core.min.js')}}"  ></script> <script src="{{asset('rappasoft/laravel-livewire-tables/thirdparty.min.js')}}"  ></script></head>



<body>

            <div class="our-team-page">
        <!-- start hero section -->
        <section class="hero-content-section bg-white p-t-100 p-b-100">
            <div class="container p-t-30">
                <div class="col-12">
                    <div class="hero-content text-center">
                        <h1 class=>
                            Liste Vétérinaires
                        </h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->

        <!-- end our-team section -->
        <section class="our-team-section ">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/rymbl.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3">Dr Rym BelHadj Farhat</h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    Rue El Aghaliba | 20144209 <br>
                                    derriére ONAS Hiboun - Mahdia
                                </label>
                                <ul class="social-media d-flex justify-content-center" > </ul>
                                <a style="background-color: #7286D3" href="medical-appointment.html"
                                class="btn" id="btn">
                                 <span style="color: white">Voir plus</span>
                             </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/senda.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3">DR Senda  </h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                   Rue 02 mars 1934 | 90300116<br>
                                   Mahdia - 4100
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>  <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/minhlavet.jpg')}}" alt="drmarwen" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3">Dr Marwen </h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    Mnihla vet | 50 982 126<br>
                                    Ettadhamen Mnihla, Tunisia
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>
                                                                                                                                            <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/la falaise.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3">Clinique la falaise</h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    Près de manel ghomrassi make up artist |29 923 001 <br>
                                    Monastir - 5000
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>
                                                                                                                                            <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/hamzamemmi.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3" >Dr Hamza Memmi</h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    Rue Mohamed Ali | 94013013 <br>
                                    Ksar Hellal 5070
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>  <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/montplaisir.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3">Clinique Vétérinaire Montplaisir</h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    3 Rue du Hijaz| 54695276 <br>
                                     Tunis 1002
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>  <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/alakhzema.PNG')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3"> Dr Alaa Ebrahim Charfeddine</h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    khzema gharbia Rue Imam Boukhari| 98718521 <br>
                                     Sousse 4071
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>  <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/anastrabelsi.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-"style="color:#7286D3">DR Anas Trabelsi</h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                   khzema|  96 230 912  <br>Sousse
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>
                                                                                                                                            <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                        <div class="col-xl-4 col-md-6 our-team-block d-flex align-items-stretch">
                        <div class="card mx-lg-2 flex-fill">
                            <div class="card-body text-center d-flex flex-column">
                                <div class="card-image mb-4 rounded-circle">
                                    <img src="{{asset('template/imgs/veto/seifbardo.jpg')}}" alt="Infy Care" class="img-fluid rounded-circle object-image-cover" loading="lazy" />
                                </div>
                                <h4 class="text-" style="color:#7286D3">DR Seifeddine Issaoui </h4>
                                <label class="designation-label pb-4 mb-3 d-block">
                                    10 Rue El Mouahidine|23423765 <br> Tunis 2000
                                </label>
                                <ul class="social-media d-flex justify-content-center" >
                                                                                                                                            </ul>
                                                                                                                                            <a style="background-color: #7286D3" href="medical-appointment.html"
                                                                                                                                            class="btn" id="btn">
                                                                                                                                             <span style="color: white">Voir plus</span>
                                                                                                                                         </a>
                            </div>
                        </div>
                    </div>
                                    </div>
            </div>
        </section>
        <!-- end our-team section -->
    </div>

</body>


<!-- Mirrored from infycare.infyom.com/medical-doctors by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2024 12:47:48 GMT -->
</html>
