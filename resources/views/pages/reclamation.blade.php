@extends('layouts.principale')
@section('title')
    Reclamation
@endsection
@section('content')
<main>
        <section class="reclamation-section">
            <h1>Réclamation</h1>
            <p>Veuillez remplir le formulaire ci-dessous pour soumettre votre réclamation.</p>
            @foreach ($errors->all() as $erro )
            <li>{{ $erro }}</li>
                
            @endforeach
            <form class="reclamation-form" method="post" >
            @csrf
            
                <label for="tracking-number">Numéro d'identifiant du colis</label>
               
                <select name="commande_id">
                @foreach ($commandes as $commande )
                    <option value="{{$commande->id}}">{{$commande->code}} - ({{ $commande->gp->ville_depart->nom_ville }} -> {{$commande->gp->ville_arrive->nom_ville  }} ) </option>
                    @endforeach
                </select>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Décrivez votre réclamation" rows="5" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

@endsection