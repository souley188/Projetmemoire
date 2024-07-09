@extends('layouts.principale')
@section('title')
    Cherchez un GP
@endsection
@section('content')

<main>
    <section class="search-section">
        <h1>Chercher un GP</h1>
        
            <div class="location-filters">
                <div>
                    <label for="city-depart">Ville de départ</label>
                    <input type="text" id="city-depart" name="city-depart" placeholder="Ville de départ">
                </div>
                <div>
                    <label for="city-arrival">Ville d'arrivée</label>
                    <input type="text" id="city-arrival" name="city-arrival" placeholder="Ville d'arrivée">
                </div>
                <div>
                    <label for="date-depart">Date de départ</label>
                    <input type="date" id="date-depart" name="date-depart" placeholder="Date de départ">
                </div>
                <div>
                    <label for="date-arrival">Date d'arrivée</label>
                    <input type="date" id="date-arrival" name="date-arrival" placeholder="Date d'arrivée">
                </div>
            </div>
            <button type="submit">Rechercher</button>
        </form>
    </section>
</main>  

<div class="contact-list">
    <h2>Liste des GP disponibles</h2>
    <div class="list-container">
        @foreach ($gps as $gp )
        <div class="card" onclick="window.location='{{ route('commande.gp.detail', ['id' => $gp->id]) }}';">
            <div class="card-content">
                <div class="gp-info">
                    <strong>Nom:</strong> {{ $gp->user->user_gp->nom_gp }}
                </div>
                <div class="gp-travel">
                    <span class="label"><i class="fas fa-map-marker-alt"></i> Trajet:</span> 
                    {{ $gp->ville_depart->nom_ville }} ({{ $gp->ville_depart->pays }}) 
                    <i class="fas fa-arrow-right"></i> 
                    {{ $gp->ville_arrive->nom_ville }} ({{ $gp->ville_arrive->pays }})
                </div>
                <div class="gp-dates">
                    <span class="label"><i class="fas fa-calendar-alt"></i> Date:</span> 
                    {{ $gp->date_depart }} <i class="fas fa-arrow-right"></i> {{ $gp->date_arrive }}
                </div>
                <div class="gp-price">
                    <span class="label"><i class="fas fa-dollar-sign"></i> Prix du colis/kg:</span> 
                    {{ $gp->montant }}
                </div>
            </div>
            <a href="{{ route('commande.gp') }}" class="order-button"><button>Passer une Commande</button></a>
        </div>
        @endforeach
    </div>
</div>

<style>
    .contact-list {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: auto;
        margin: 10px;
    }

    .contact-list h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .list-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px; /* Espacement entre les éléments */
        justify-content: start;
    }

    .card {
        background-color: #f9f9f9;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        width: 300px; /* Largeur des cartes */
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card-content {
        margin-bottom: 20px;
    }

    .gp-info, .gp-travel, .gp-dates, .gp-price {
        margin-bottom: 10px;
    }

    .label {
        font-weight: bold;
        color: #007BFF;
    }

    .order-button {
        display: block;
        text-align: center;
        margin-top: 10px;
    }

    .order-button button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .order-button button:hover {
        background-color: #0056b3;
    }

    .fas {
        margin-right: 5px;
    }
</style>

<!-- Ajout des icônes FontAwesome -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

@endsection
