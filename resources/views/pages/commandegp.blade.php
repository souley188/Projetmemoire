@extends('layouts.principale')
@section('content')

<style>
/* CSS pour styliser l'affichage des GPs */

main {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    padding: 20px;
}

main h2 {
    text-align: center;
    color: #343a40;
}

.gp-container {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    padding: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
}

.gp-container:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.gp-container p {
    margin: 8px 0;
    color: #495057;
}

.gp-container h2 {
    font-size: 1.2rem;
    color: #007bff;
    margin-top: 20px;
}

.error-list {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 4px;
    padding: 10px;
    margin-top: 20px;
}

.error-list ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.error-list li {
    margin: 5px 0;
}

form {
    margin-top: 20px;
}

form label {
    display: block;
    margin-bottom: 8px;
    color: #495057;
}

form input[type="number"],
form input[type="checkbox"] {
    margin-bottom: 10px;
}

form button {
    background-color: #007bff;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form button:hover {
    background-color: #0056b3;
}

/* Style spécifique pour la section 'affiche' */

.affiche {
    background-color: #f1f1f1;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.affiche p {
    margin: 6px 0;
    font-size: 1.1rem;
}

</style>

<main>
    <h2>Passer une Commande</h2>

    @foreach ($gps as $gp )
    <div class="gp-container">
        <div class="affiche">
            <p>Nom: {{ $gp->user->user_gp->nom_gp }}</p>
            <p>Trajet: {{ $gp->ville_depart->nom_ville }} ({{ $gp->ville_depart->pays }}) -> {{ $gp->ville_arrive->nom_ville }} ({{ $gp->ville_arrive->pays }})</p>
            <p>Date: {{ $gp->date_depart }} -> {{ $gp->date_arrive }}</p>
            <p>Prix du colis/kg: {{ $gp->montant }}</p> <br>
            <h2>Contact Réception</h2>
            <p>Nom: {{ $gp->contact_gp->nom }}</p>
            <p>Adresse: {{ $gp->contact_gp->adresse }}</p>
            <p>Téléphone: {{ $gp->contact_gp->telephone }}</p>
        </div>

        @if ($errors->any())
        <div class="error-list">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        <form action="{{ route('commandestore.gp') }}" method="post">
            @csrf
            <input type="hidden" name="gp_id" value="{{ $gp->id }}">
            <input type="hidden" name="gp_id" value="{{ $gp->user->id }}">
            <label for="colis">Le nombre de kg de colis</label> <br>
            <input type="number" min="0" name="poids_colis" id="colis" value="{{ old('poids_colis') }}"> <br>
            <label for="paiementespeces">Paiement par espèce 
                <input type="checkbox" name="paiement_especes" id="paiementespeces" {{ old('paiement_especes') ? 'checked' : '' }}>
            </label> <br>
            <button type="submit">Confirmer</button>
        </form>
    </div>
    @endforeach
</main>
@endsection
