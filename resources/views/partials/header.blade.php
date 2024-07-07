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
                <li ><a href="{{ route('toutcommandeUser') }}" class="{{ request()->routeIs('toutcommandeUser') ? 'toutcommandeUser' : '' }}" >Suivre un colis</a></li>
                <li><a href="{{ route('reclamation') }}" class="{{ request()->routeIs('reclamation') ? 'active-link' : '' }}">Réclamation</a></li>
                <li><a href="{{ route('cherchez-gp') }}" class="{{ request()->routeIs('cherchez-gp') ? 'active-link' : '' }}">Chercher un GP</a></li>
            </ul>
            <div class="dropdown">
        <button class="dropbtn">
          <img src= {{"assets/images/téléchargement.png"}} >  @auth  
          {{auth()->user()->prenom}}
          @endauth
        </button>
    <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="#">Mes Commandes</a>
    <a href="login">Log Out</a>
  </div>
</div>
           
        </nav>
</header>