<table>
        
        <thead>
            <tr>
                
                <th>Utilisateur</th>
                <th>Nom GP</th>
                <th> Villes </th>
                <th>Date de depart -- Date d'arrivée</th>
                <th>Nom destinataire</th>
                <th>Kilo</th>
                <th>Etats</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    @forelse ($commandes as $commande)
    <tr>
         
        <td>{{ $commande->user->name }}</td>
        <td>{{ $commande->gp->nom_gp }}</td>
        <td>{{ $commande->gp->ville_depart->nom_ville }} -> {{ $commande->gp->ville_arrive->nom_ville }}</td>
        <td>{{date('d-m-Y', strtotime($commande->gp->date_depart))  }} -> {{ date('d-m-Y', strtotime($commande->gp->date_arrive))  }}</td>
        <td>{{$commande->colis->nom_destinataire}}</td>
        <td>{{ $commande->kilo }}</td>
        <td>{{ $commande->etape }}</td>
        <td>

                 <!-- Utilisez PUT ou PATCH selon votre route -->
                 
        
    </button>
    <div class="dropdown">
    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
        Options
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        @if($commande->etape == 'en_attente')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition']) }}">METTRE EN PRÊT A LIVRER</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @elseif($commande->etape == 'en_expedition')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente']) }}">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @elseif($commande->etape == 'livrer')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente']) }}">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition']) }}">METTRE EN EXPÉDITION</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @elseif($commande->etape == 'annuler')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente']) }}">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition']) }}">METTRE EN EXPÉDITION</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'livrer']) }}">METTRE A LIVRER</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @endif
    </div>
</div>



            
        </td>
    </tr>
    @empty
    <p>Pas de donnée</p>
@endforelse
    </tbody>
</table>