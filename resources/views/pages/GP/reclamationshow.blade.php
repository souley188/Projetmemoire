<!-- resources/views/pages/reclamations.blade.php -->
@extends('pages.GP.gpdashboard')
@section('content')
    <h1>Liste des réclamations</h1>
    
    <ul>
        @foreach ($commandes as $commande)
            @foreach ($commande->reclamations as $reclamation)
                <li>
                    <a href="{{ route('reclamation.show', ['id']) }}">
                        Réclamation {{ $reclamation->id }}
                    </a>
                </li>
            @endforeach
        @endforeach
    </ul>
@endsection
