@extends('layouts.principale')
@section('title')
    Cherchez un GP
@endsection
@section('content')
<main>
    <section class="search-section">
        <h1>Chercher un GP</h1>
        <form class="search-form">
            <input type="text" id="search-bar" name="search-bar" placeholder="Rechercher un GP">
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
<div class="list-container">
    <table>
        <legend>Liste des GP</legend>
        <thead>
            <tr>
                <th>Nom du GP</th>
                <th>Trajet</th>
                <th>Prix colis/kg</th>
                <th>Niveau de Satisfaction</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gps as $gp)
               <tr>
                    <td> 
                        <a href="{{ route('info.gp', ['id' => $gp->id]) }}">
                            {{ $gp->nom_gp }} 
                        </a>
                    </td>
                    <td>
                        {{ $gp->ville_depart->nom_ville }} ({{ $gp->ville_depart->pays }}) -> 
                        {{ $gp->ville_arrive->nom_ville }} ({{ $gp->ville_arrive->pays }}) <br>
                        {{ $gp->date_depart }} -> {{ $gp->date_arrive }}
                    </td>
                    <td>{{ $gp->montant }}</td>
                    <td>{{ $gp->satisfaction }}</td>
                    <td>
                        <button> <a href="{{route('depotcolis')}}"> Enregistrer un depot</a></button>
                    </td>
               </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
