<!DOCTYPE html>
<html lang="en">


<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Petty |  Tableau de Bord </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('template/assets/images/PetLog.png')}}">
    <link rel="stylesheet" href="{{asset('dashboard1/vendor/jqvmap/css/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard1/vendor/chartist/css/chartist.min.css')}}">
	<link rel="stylesheet" href="{{asset('dashboard1/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard1/css/style.css')}}">
    <script src="https://cdn.lordicon.com/lordicon.js"></script>


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
            <a href="{{('/')}}" class="brand-logo">
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
                            
                        </div>

                        <ul class="navbar-nav header-right">
    <li class="nav-item dropdown notification_dropdown">
        <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
            <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg>
            @php
                $unreadAppointmentNotificationsCount = auth()->user()->changedAppointments()->where('is_read', false)->count();
                $unreadOrderNotificationsCount = auth()->user()->orderNotifications()->where('is_read', false)->count();
                $totalUnreadNotifications = $unreadAppointmentNotificationsCount + $unreadOrderNotificationsCount;
            @endphp
            @if ($totalUnreadNotifications > 0)
                <span class="badge badge-danger">{{ $totalUnreadNotifications }}</span>
            @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-notification" aria-labelledby="navbarDropdown">
            @php
                $changedAppointments = auth()->user()->changedAppointments()->where('is_read', false)->get();
                $orderNotifications = auth()->user()->orderNotifications()->where('is_read', false)->get();
            @endphp
            @if ($changedAppointments->isNotEmpty() || $orderNotifications->isNotEmpty())
                @forelse ($changedAppointments as $appointment)
                    <a class="dropdown-item" href="{{ route('rendezvous.show', ['id' => $appointment->id]) }}">
                        Le statut de votre rendez-vous de l'animal {{ $appointment->pet_name }} a été mis à jour.
                    </a>
                @empty
                    <!-- Pas de notifications de rendez-vous -->
                @endforelse

                @forelse ($orderNotifications as $notification)
                    <a class="dropdown-item" href="{{ route('orderNotification.read', ['notificationId' => $notification->id, 'bookingId' => $notification->booking_id]) }}">
                        @if ($notification->booking->booking_status == 'confirmed')
                            Votre commande #{{ $notification->booking_id }} a été confirmée. 
                        @elseif ($notification->booking->booking_status == 'canceled')
                            Votre commande #{{ $notification->booking_id }} a été annulée. 
                        @endif
                    </a>
                @empty
                    <!-- Pas de notifications de commande -->
                @endforelse
            @else
                <a class="dropdown-item" href="#">
                    Pas de nouvelles notifications.
                </a>
            @endif
        </div>
    </li>





</a>
<li class="nav-item dropdown
header-profile">
<a class="nav-link" href="#"
role="button" data-toggle="dropdown">
<div class="profile-photo">
@include('user.profil_photo')

    
</div>
</a>
<div class="dropdown-menu
dropdown-menu-right">
<a href="/profile-utilisateur"
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
        <div class="navv " >
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first"></li>

                    <li><a class="ai-icon" href="{{('/home')}}" aria-expanded="false">
						<svg id="icon-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
							<span class="nav-text">Acceuil</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="{{('/profile-utilisateur')}}" aria-expanded="false">
						<svg id="icon-users" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
							<span class="nav-text">Profile</span>
						</a>
                    </li>
                    <li><a class="ai-icon" href="{{('/mes-animaux')}}" aria-expanded="false">
                        <img src="{{asset('dashboard1/imgs/animal.svg')}}" class="map-loc" alt="">
                        <span class="nav-text">Mes animaux</span>
                       </a>
                   </li>
                   <li><a class="ai-icon" href="{{('/mesCommandes')}}" aria-expanded="false">
                   <img src="{{asset('dashboard1/imgs/shopping-list.png')}}" class="map-loc" alt="">
                        <span class="nav-text">Liste des commandes</span>
                       </a>
                   </li>
                   <li><a class="ai-icon" href="{{('/no-gps')}}" aria-expanded="false">
                        <img src="{{asset('dashboard1/imgs/map-location.svg')}}" class="map-loc" alt="">
                        <span class="nav-text">Position sur Maps</span>
                       </a>
                   </li>
                   <li><li class="nav-label">Rendez-vous</li>
                   <a class="ai-icon" href="{{('/RendezVous')}}" aria-expanded="false">
                   <lord-icon
                      src="https://cdn.lordicon.com/abfverha.json"
                        trigger="hover"
                      colors="primary:#ffffff"
                       style='width:24 ;height:24; 'class="map-loc" >
                   </lord-icon>
                    <span class="nav-text">Ajouter rendez-vous</span>
                   </a>


                    <a class="ai-icon" href="{{('/mes-rendezVous')}}" aria-expanded="false">
                   <lord-icon
                      src="https://cdn.lordicon.com/abfverha.json"
                        trigger="hover"
                      colors="primary:#ffffff"
                       style='width:24 ;height:24; 'class="map-loc" >
                   </lord-icon>
                    <span class="nav-text">Mes rendez-vous</span>
                   </a>
                     </li>

                   
                    <li class="nav-label">Aide</li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<svg id="icom-headphones" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-headphones"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg>
							<span class="nav-text">Support</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="/FAQ">FAQ</a></li>
                            <li><a href="/contact">Centre d'assistance</a></li>
                        </ul>
                    </li>


                    

            </div>
        </div>

        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


     <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Sionx</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		@yield('content')


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
<!--**********************************
Footer start
***********************************-->
<div class="footer">
<div class="copyright">
<p>Copyright © Designed &amp; Developed by <a href="https://sionx.tn/"
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
    <script src="{{asset('dashboard1/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('dashboard1/js/deznav-init.js')}}"></script>
	<script src="{{asset('dashboard1/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard1/js/custom.min.js')}}"></script>

    <!-- Vectormap -->
    <script src="{{asset('dashboard1/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard1/vendor/gaugeJS/dist/gauge.min.js')}}"></script>

	<!-- Counter Up -->
    <script src="{{asset('dashboard1/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('dashboard1/vendor/jquery.counterup/jquery.counterup.min.js')}}"></script>

	<!-- Demo scripts -->
    <script src="{{asset('dashboard1/js/dashboard/dashboard.js')}}"></script>

	<!-- Svganimation scripts -->
    <script src="{{asset('dashboard1/vendor/svganimation/vivus.min.js')}}"></script>
    <script src="{{asset('dashboard1/vendor/svganimation/svg.animation.js')}}"></script>

    <!------------ to pdf ------>
    <script src="{{asset('dashboard1/js/pdf.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    
        @if (Auth::check())
    <script>
        // Vérifier les nouveaux rendez-vous toutes les 5 secondes
setInterval(() => {
    // Effectuer une requête AJAX pour vérifier les nouveaux rendez-vous
    fetch('/check-appointments')
        .then(response => response.json())
        .then(data => {
            // Filtrer les rendez-vous non lus
            const unreadAppointments = data.changedAppointments.filter(appointment => !appointment.is_read);

            // Mettre à jour les notifications dans la navbar
            const navbarDropdown = document.getElementById('navbarDropdown');
            const dropdownMenu = navbarDropdown.nextElementSibling;

            // Réinitialiser le contenu du dropdown
            dropdownMenu.innerHTML = '';

            // Mettre à jour le badge de notification
            const changedAppointmentsCount = unreadAppointments.length;
            navbarDropdown.innerHTML = `
                <i class="fa fa-bell"></i>
                ${changedAppointmentsCount > 0 ? `<span class="badge badge-danger">${changedAppointmentsCount}</span>` : ''}
            `;

            // Mettre à jour les rendez-vous dont le statut a changé dans le dropdown
            unreadAppointments.forEach(appointment => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `
                    <a class="dropdown-item" href="/rendezvous.show">
                        Le statut de votre rendez-vous (ID: ${appointment.id}) a été mis à jour.
                    </a>
                `;
                dropdownMenu.appendChild(listItem);
            });

            // Afficher un message si aucun rendez-vous avec un statut modifié non lu n'est disponible
            if (changedAppointmentsCount === 0) {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<a class="dropdown-item" href="#">Pas de notification.</a>`;
                dropdownMenu.appendChild(listItem);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la récupération des rendez-vous :', error);
        });
}, 5000); // intervalle de 5 secondes (5000 millisecondes)



    </script>
@endif

    
    <style>
.deznav-scroll {
    overflow-y: auto;
    max-height: 80vh; 
}

[data-header-position="fixed"] .content-body {
    padding-top: 20px;
    
}
.notification_dropdown .dropdown-menu-right {
    min-width: 275px;
    padding: rem 0 1rem;
    top: 100px;
}
</style>
</body>

</html>