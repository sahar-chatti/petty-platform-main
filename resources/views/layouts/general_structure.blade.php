
<link rel="stylesheet" href="{{asset('template/style.css')}}">
<body>
    
<header class="position-relative header" id="topHeader" style='.hide {
  display: none !important;
}' >
    <div class="container " >
        <div class="row align-items-center " >
            <div class="col-lg-1 col-4">
                <a href="/" class="header-logo" >
                    <img src="{{asset('template/assets/images/PetLog.png')}}" alt="Infy Care" class="app-logo" loading="lazy" />
                </a>
            </div>
            <div class="col-lg-11 col-8">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-end py-0" >
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav align-items-center py-2 py-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/">Acceuil</a>
                            </li>
                        
                            <li class="nav-item">
                                <a class="nav-link "
                                   href="produit">Produit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "
                                   href="RendezVous"
                                   data-turbo="false">Rendez-vous</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "
                                   href="/veterinaires"
                                   data-turbo="false">Vétérinaires</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link "
                                   href="contact"
                                   data-turbo="false">Contact</a>
                            </li>
                            
                            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Profil</a>
                </li>
                <li class="nav-item">
                    <form action="logout" method="POST">
                        @csrf
                        <button type="submit" class="btn--- " style="text-decoration: none; color: white; ">Se Déconnecter</button>
                    </form>
                </li>
                    @else
                <li class="nav-item">
                    <button type="submit" class="btn---"><a class="nav-button" style="text-decoration: none; color: white; justify-content: center;" href='login'>Se Connecter</a></button>
                </li>
            @endif   </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    
</header>

<main>
@yield('content')
</main>

</div>
    <footer style='background-color:#7286D3' >
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 order-1 order-lg-0">
                <h5 class="text-white mb-4 pb-1">Contactez nous</h5>
                <div class="footer-info">
                    <div class="d-flex align-items-center footer-info__block mb-3 pb-1">
                        <div class="footer-info__footer-icon fs-5 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone text-primary "></i>
                        </div>
                        <a href="tel:+91 9999888774"
                           class="text-decoration-none text-white footer-info__contact-label">
                            +216 29388198
                        </a>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-3 pb-1">
                        <div class="footer-info__footer-icon fs-5 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-envelope text-primary "></i>
                        </div>
                        <a href="mailto:petty@email.com"
                           class="text-decoration-none text-white footer-info__contact-label">
                            petty@email.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-2 order-lg-2">
                <h5 class="text-white mb-4 pb-1">Liens rapides</h5>
                <ul>
                    <li>
                        <a href="#about"
                           class="text-decoration-none  mb-2 d-block fw-light text-white">Apropos nous</a>
                    </li>
                    <li>
                        <a href="contact"
                           class="text-decoration-none  mb-2 d-block fw-light text-white"
                           data-turbo="false">Contactez-nous</a>
                    </li>
                    <li>
                        <a href="FAQ"
                           class="text-decoration-none mb-2 d-block fw-light text-white">FAQs</a>
                    </li>
                   
                </ul>
            </div>
            <div class="col-lg-4 col-12 order-0 order-lg-3 mb-4 mb-lg-0">
                <h5 class="text-white mb-4 pb-1">S'inscrire</h5>
                <div class="footer-subcribe">
                    <form method="POST" action="https://infycare.infyom.com/medical-appointment" accept-charset="UTF-8" id="subscribeForm" class="subscribe-form subscription-form"><input name="_token" type="hidden" value="7XzH6nmQ0AaUL6RmM0YinhEEtQOhoBaSB3KJimwQ">
                    <div class="subscribeForm-message"></div>
                        <div class="input-group mb-md-3">
                            <input class="form-control form-control-transparent" id="email" placeholder="Entrer votre Email" required name="email" type="email">
                            <button type="submit" class="input-group-text" id="basic-addon2">
                                <i class="fa-solid fa-paper-plane text-primary"></i>
                                </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 order-4 border-top-primary text-center mt-lg-5 mt-4">
                <p class="text-white fw-light py-4 mb-0"> Tous droits réservés © 2024 Petty Platform</p>
            </div>
        </div>
    </div>
</footer>
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
  .btn--- {
    margin-top: 10px;
    margin-bottom: 10px;
    padding: 20px 60px;
    background-color: #7286D3;
    color: #ffffff;
    border: none;
    margin-left: 50px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 1em;
    font: Poppins ;
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
.box{

    padding-right: 50px;
background-color: #7286D3;
border-end-end-radius: 70px;
}
.btn-{
    margin-top: 30px;
    padding: 13px 40px;
    background-color: #8EA7E9;
    color: #ffffff;
    border: none;
    margin-left: 100px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 1.2em;
    cursor: pointer;
    transition: background-color 0.3s ease;
}
.btn-- {
    margin-top: 30px;
    padding: 13px 40px;
    background-color: #8EA7E9;
    color: #ffffff;
    border: none;
    margin-left: 100px;
    border-radius: 50px;
    font-weight: bold;
    font-size: 1em;
    cursor: pointer;
    margin-left: -10px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.user{
    font-size: 30px;
    height: 30px;
    width: 30px;
}

.how-it-works{
    background-image: url('template/imgs/petty\ bgg.png');
    margin-top: -100px;
}
.nav--link.active{
    color: #292e95;
    text-decoration: none;
    font-size: 0px;
}
.nav-link.active{
    color: #292e95;
    text-decoration: none;
    font-size: 0px;
    padding-right:20px ;
}



.app-logo{
    height: 120px;
    width: 150px;
   
}
.img-fluid-{

    width:150px ;
    height:150px ;
    border-radius: 50%;
}
.QM{
    font-size: 80px;
    height: 60px;
    width: 60px;
    margin-top: -100px;
}
a{
    font-size: 20px;
}
 
.header {
    transition: background-color 0.3s ease;
   
}

.navbar {
  margin-bottom: 0;
 
}





</style>
<script>
    let lastScrollTop = 0;

window.addEventListener("scroll", function() {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  if (currentScroll > lastScrollTop) {
    // Faites défiler vers le bas
    document.getElementById("topHeader").classList.add("hide");
  } else {
    // Faites défiler vers le haut
    document.getElementById("topHeader").classList.remove("hide");
  }
  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
}, false);

</script>
