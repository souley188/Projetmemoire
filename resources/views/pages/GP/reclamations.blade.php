<!-- resources/views/pages/reclamation_detail.blade.php -->

@extends('pages.GP.gpdashboard')
@section('content')
<style>
    /* public/css/reclamation.css */

.container {
    background-color: #f9f9f9;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h1 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.container p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
    margin-bottom: 8px;
}

.container p:first-child {
    font-weight: bold;
    color: #222;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    .container h1 {
        font-size: 20px;
    }
    .container p {
        font-size: 14px;
    }
}

</style>
  @foreach($reclamations as $reclamation)
    <div class="container">
        <h1>Réclamation {{ $reclamation->id }}</h1>
        <p> Nom d'utilisation:    malick</p>
        <p>Message:  {{ $reclamation->message }}</p>
        <p>Commande associée : {{ $reclamation->commande_id }}</p>
        <!-- Ajoutez d'autres détails si nécessaire -->
    </div>
    @endforeach
@endsection
