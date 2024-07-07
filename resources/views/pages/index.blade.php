@extends('layouts.principale')

@section('title')
    Bienvenue
@endsection

@section('content')
<section class="welcome-section">
    <div class="welcome-content">
        <div class="welcome-text">
            <h1 >Bienvenue sur SamaGP</h1>
            <p class = "text">Nous vous aidons à régulariser et suivre vos colis de manière efficace et rapide.Avec <b>SamaGP</b> , vous pouvez facilement suivre vos envois, déposer une réclamation, et rechercher les informations nécessaires pour vos GP.</p>
        </div>
        <div class="image">
            <img src="{{asset('assets/images/images (2).jpeg')}}" alt="image d'accueil">
        </div>
    </div>
</section>
@endsection

