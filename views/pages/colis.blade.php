@extends('layouts.principale')
@section('title')
    Suivre un colis
@endsection
@section('content')
<main>
        <section class="tracking-section">
            <h1>Suivre votre colis</h1>
            <p>Veuillez entrer le numéro d'identifiant de votre colis pour suivre son statut.</p>
            <form class="tracking-form">
                <label for="tracking-number">Numéro d'identifiant du colis</label>
                <input type="text" id="tracking-number" name="tracking-number" placeholder="Ex: 1234567890" required>
                <button type="submit">Suivre</button>
            </form>
        </section>
    </main>
@endsection