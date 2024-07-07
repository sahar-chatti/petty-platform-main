<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Petty - Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard1/images/favicon.png')}}">
	<link rel="stylesheet" href="{{asset('dashboard1/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard1/css/style.css')}}">


</head>

<body>

<!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-ab" style="height: 120px ; width:120px;" src="{{asset('dashboard1/imgs/petty-dash.png')}}" alt="">

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">

                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Recherche" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
										<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
										<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
									</svg>
                                    <div class="pulse-css"></div>
                                </a>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="{{asset('dashboard1/imgs/sahar.jpg')}}" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profil </span>
                                    </a>

                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Déconnecter </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        ***********************************-->
        <div class="deznav">
        <div class="navv " >
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first"></li>

                    <li><a class="ai-icon" href="{{('/')}}" aria-expanded="false">
						<svg id="icon-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
							<span class="nav-text">Acceuil</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="{{('/doctors')}}" aria-expanded="false">
						<svg id="icon-users" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
							<span class="nav-text">Vétérinaires</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="{{('/my-folder')}}" aria-expanded="false">
						<svg id="icon-file-text" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
							<span class="nav-text">Dossier médical</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="{{('/myAnimals')}}" aria-expanded="false">
                        <img src="{{asset('dashboard1/imgs/animal.svg')}}" class="map-loc" alt="">
                        <span class="nav-text">Mes animaux</span>
                       </a>
                   </li>
                   <li><a class="ai-icon" href="{{('/no-gps')}}" aria-expanded="false">
                    <img src="{{asset('dashboard1/imgs/rdv.svg')}}" class="map-loc" alt="">
                    <span class="nav-text">Mes rendez-vous</span>
                   </a>
                     </li>

                    <li><a class="ai-icon" href="{{('/no-gps')}}" aria-expanded="false">
                        <img src="{{asset('dashboard1/imgs/map-location.svg')}}" class="map-loc" alt="">
                        <span class="nav-text">Position sur Maps</span>
                       </a>
                   </li>


                    <li class="nav-label">Application</li>
                    <li><a class="ai-icon" href="{{('/calendar')}}" aria-expanded="false">
							<svg id="icon-pages" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
							<span class="nav-text" href="app-calender.html">Calendrier</span>
						</a>
                    </li>


                    <li class="nav-label">Aide</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg id="icom-headphones" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
							<span class="nav-text">Support</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="help-center.html">Centre d'assistance</a></li>
                        </ul>
                    </li>


                    <li><a href="{{('/lock-screen-user')}}" >
                        <svg id="icon-widget" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg>

                        <span class="nav-text">Verrouillage d'écran </span>
						</a>

                    </li>

            </div>
        </div>

        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
           <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body" >
            <div  id="invoice">
            <div class="container-fluid" >
                <div class="row page-titles mx-0" >
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Bonjour !</h4>

                        </div>
                    </div>
                </div>

                <!-- row -->
                <div class="col-xl-14 col-xxl-14 col-sm-14">
                    <div class="card-med">
                        <br><br>
                         <div class="message--">
                             <h1 > Merci d'ajouter vos animaux ! </h1>
                             <a href={{url('/')}}><button type="button" style="cursor: pointer;" class="btn-- ">Commencer</button></a>
                         </div>
                           <div>
                                <img src="{{asset('dashboard1/imgs/noanim.png')}}" class="noanim" alt="">
                              </div>




                    </div>
                </div>
         <!--**********************************
           event
        ***********************************-->


            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://sionx.tn/" target="_blank">Sionx</a> 2024
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('dashboard1/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('dashboard1/js/deznav-init.js')}}"></script>
	<script src="{{asset('dashboard1/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard1/js/custom.min.js')}}"></script>

	<!-- Demo scripts -->
    <script src="{{asset('dashboard1/js/dashboard/dashboard-2.js')}}"></script>

	<!-- Svganimation scripts -->
    <script src="{{asset('dashboard1/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('dashboard1/vendor/svganimation/svg.animation.js')}}"></script>


      <!------------ to pdf ------>
      <script src="{{asset('dashboard1/js/pdf.js')}}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</body>

</html>

