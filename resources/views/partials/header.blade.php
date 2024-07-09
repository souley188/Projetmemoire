<header>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
        <nav>
            <div class="logo">
                <img src="{{asset('assets/images/ejidz469qf05wyna.svg')}}" alt="Logo de SamaGP" class="logo-img">
                <span> <a href="/">SamaGP</a></span>
            </div>
            <ul class="nav-links">
                <li ><a href="{{route('toutcommandeUser')}}" class="{{ request()->routeIs('toutcommandeUser') ? 'active-link' : '' }}" >Suivre un colis</a></li>
                <li><a href="{{ route('reclamation') }}" class="{{ request()->routeIs('reclamation') ? 'active-link' : '' }}">Réclamation</a></li>
                <li><a href="{{ route('cherchez-gp') }}" class="{{ request()->routeIs('cherchez-gp') ? 'active-link' : '' }}">Chercher un GP</a></li>
            </ul>
            <div class="dropdown">
                @auth 
                    @if(auth()->user()->role == "user")
                    <button class="dropbtn">
                      <img src= {{asset("assets/images/téléchargement.png")}} >   
                            {{auth()->user()->prenom}}
                      
                    </button>
                    <div class="dropdown-content">
                        <a href="{{route('profile.show')}}">Profile</a>
                        <a href="#">Mes Commandes</a>
                        <a href="{{route('logout')}}">Log Out</a>
                   </div>
                   @elseif(auth()->user()->role == "gp")
                   <button class="dropbtn">
                      <img src= {{asset("assets/images/téléchargement.png")}} >   
                            {{auth()->user()->prenom}}
                      
                    </button>
                    <div class="dropdown-content">
                        <a href="{{route('profile.show')}}">Profile(GP)</a>
                        <a href="{{route('dashboard.gp')}}">Tableau de bord</a>
                        <a href="{{route('logout')}}">Log Out</a>
                   </div>
                   @else
                    <button class="dropbtn">
                      <img src= {{asset("assets/images/téléchargement.png")}} >   
                            {{auth()->user()->prenom}}
                      
                    </button>
                    <div class="dropdown-content">
                        <a href="{{route('profile.show')}}">Profile(Admin)</a>
                        <a href="#">Tableau de bord</a>
                        <a href="{{route('logout')}}">Log Out</a>
                   </div>
                   @endif
                @endauth
                @guest
                    <button > <a href="{{route('login')}}"> Inscription / Connexion</a></button>
                @endguest
            </div>
           
        </nav>
</header>