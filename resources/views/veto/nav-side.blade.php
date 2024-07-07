<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Petty | Tableau de bord </title>
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16"
href="{{asset('template/assets/images/PetLog.png')}}">
<link rel="stylesheet"
href="{{asset('dashboard1/vendor/jqvmap/css/jqvmap.min.css')}}">
<link rel="stylesheet"
href="{{asset('dashboard1/vendor/chartist/css/chartist.min.css')}}">
<link rel="stylesheet"
href="{{asset('dashboard1/vendor/bootstrap-select/dist/css/bootstrap-se
lect.min.css')}}">
<link rel="stylesheet"
href="{{asset('dashboard1/css/style.css')}}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

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
<a href="/" class="brand-logo">
<img class="logo-ab" style="height: 120px ;
width:120px;" src="{{asset('dashboard1/imgs/petty-dash.png')}}" alt="">
</a>
<div class="nav-control">
<div class="hamburger">
<span class="line"></span><span
class="line"></span><span class="line"></span>
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
<div class="header-left ">

</div>
<ul class="navbar-nav header-right">
<li class="nav-item dropdown
notification_dropdown">
<a class="nav-link bell ai-icon"
href="#" role="button" data-toggle="dropdown">
<svg id="icon-user"
xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-bell">
<path d="M18 8A6 6 0 0 0 6 8c0
7-3 9-3 9h18s-3-2-3-9"></path>
<path d="M13.73 21a2 2 0 0
1-3.46 0"></path>
</svg>
<div class="pulse-css"></div>
</a>
<li class="nav-item dropdown
header-profile">
<a class="nav-link" href="#"
role="button" data-toggle="dropdown">
<div class="profile-photo">
@include('veto.profile_photo')

    
</div>
</a>
<div class="dropdown-menu
dropdown-menu-right">
<a href="/profile"
class="dropdown-item ai-icon">
<svg id="icon-user1"
xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4
4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
<span class="ml-2">Profile
</span>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
  @csrf
  <button type="submit" class="dropdown-item ai-icon" style="background: none; border: none; cursor: pointer;">
    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
      <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
      <polyline points="16 17 21 12 16 7"></polyline>
      <line x1="21" y1="12" x2="9" y2="12"></line>
    </svg>
    <span class="ml-2">Déconnecter</span>
  </button>
</form>

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

<div class="deznav">
<div class="navv ">
<div class="deznav-scroll">
<ul class="metismenu" id="menu">
<li class="nav-label first"></li>
<li><a class="ai-icon" href="/home"
aria-expanded="false">
<svg id="icon-home"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0
1-2-2z"></path><polyline points="9 22 9 12 15 12 15
22"></polyline></svg>
<span class="nav-text">Acceuil</span>
</a>
</li>
<li><a class="has-arrow ai-icon"
href="javascript:void()" aria-expanded="false">
<svg id="icon-users"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4
4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4
0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
<span class="nav-text">Patients</span>
</a>
<ul aria-expanded="false">
<li><a href="/listePatients">Tous les
Patients</a></li>
<li><a href="/ajoutPatient">Ajouter un
Patient</a></li>
</ul>
</li>
<li><a class="has-arrow ai-icon"
href="javascript:void()" aria-expanded="false">
<svg id="icon-file-text"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2
2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20
8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16"
y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8
9"></polyline></svg>
<span class="nav-text">Rendez-vous</span>
</a>
<ul aria-expanded="false">
<li><a href="/rendezVous">Liste rendez-vous</a></li>
<li><a href="/historique">Historique</a></li>
</ul>
</li>

<li class="nav-label">Application</li>
<li><a class="ai-icon" href="/profile"
aria-expanded="false">
<svg id="icon-user-doctors"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4
4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
<span class="nav-text">Profile</span>

<li><a class="ai-icon" href="/calendrier"
aria-expanded="false">
<svg id="icon-pages"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect
x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7"
height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
<span class="nav-text"
href="/calendrier">Calendrier</span>
</a>
</li>
<li><a class="ai-icon" href="{{('/mes-Commandes')}}" aria-expanded="false">
                   <img src="{{asset('dashboard1/imgs/shopping-list.png')}}" class="map-loc" alt="">
                        <span class="nav-text">Liste des commandes</span>
                       </a>
                   </li>
<li class="nav-label">Aide</li>
<li><a class="has-arrow ai-icon"
href="javascript:void()" aria-expanded="false">
<svg id="icom-headphones"
xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0
24 24" fill="none" stroke="currentColor" stroke-width="2"
stroke-linecap="round" stroke-linejoin="round" class="feather
feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path
d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0
0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
<span class="nav-text">Support</span>
</a>
<ul aria-expanded="false">
<li><a href="/FAQ">FAQ</a></li>
<li><a href="/contact">Centre
d'assistance</a></li>
</ul>
</li>

</div>
</div>
</div>
<!--**********************************
Sidebar end
***********************************-->
<main>
@yield('content')
</main>



<!--**********************************
Footer start
***********************************-->
<div class="footer">
<div class="copyright">
<p>Copyright © Designed &amp; Developed by <a href="#"
target="_blank">Sionx</a> 2024</p>
</div>
</div>
<!--**********************************
Footer end
***********************************-->
<!--**********************************
Scripts
***********************************-->
<!-- Required vendors -->
<script
src="{{asset('dashboard1/vendor/global/global.min.js')}}"></script>
<script src="{{asset('dashboard1/js/deznav-init.js')}}"></script>
<script
src="{{asset('dashboard1/vendor/bootstrap-select/dist/js/bootstrap-sele
ct.min.js')}}"></script>
<script src="{{asset('dashboard1/js/custom.min.js')}}"></script>
<!-- Vectormap -->
<script
src="{{asset('dashboard1/vendor/chart.js/Chart.bundle.min.js')}}"></scr
ipt>
<script
src="{{asset('dashboard1/vendor/gaugeJS/dist/gauge.min.js')}}"></script>
<!-- Counter Up -->
<script
src="{{asset('dashboard1/vendor/waypoints/jquery.waypoints.min.js')}}">
</script>
<script
src="{{asset('dashboard1/vendor/jquery.counterup/jquery.counterup.min.j
s')}}"></script>
<!-- Demo scripts -->
<script
src="{{asset('dashboard1/js/dashboard/dashboard.js')}}"></script>
<!-- Svganimation scripts -->
<script
src="{{asset('dashboard1/vendor/svganimation/vivus.min.js')}}"></script>
<script
src="{{asset('dashboard1/vendor/svganimation/svg.animation.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<style>
.deznav-scroll {
    overflow-y: auto; /* Activer le défilement vertical */
    max-height: 80vh; /* Limiter la hauteur maximale de la barre de navigation latérale */
}
</style>
</body>
</html>
