<table>
        
        <thead>
            <tr>
                
                <th>Utilisateur</th>
                <th>Nom GP</th>
                <th> Villes </th>
                <th>Date de depart -- Date d'arrivée</th>
                <th>Kilo</th>
                <th>Etats</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    @forelse ($commandes as $commande)
    <tr>
         
        <td>{{ $commande->user->name }}</td>
        <td>{{ $commande->gp->user->user_gp->nom_gp }}</td>
        <td>{{ $commande->gp->ville_depart->nom_ville }} -> {{ $commande->gp->ville_arrive->nom_ville }}</td>
        <td>{{date('d-m-Y', strtotime($commande->gp->date_depart))  }} -> {{ date('d-m-Y', strtotime($commande->gp->date_arrive))  }}</td>
        <td>{{ $commande->poids_colis }}</td>
        <td>{{ $commande->etat }}</td>
        <td>

                 <!-- Utilisez PUT ou PATCH selon votre route -->
                 
        
    </button>
    <div class="dropdown">
    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
        Options
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        @if($commande->etat == 'en_attente')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition']) }}">METTRE EN PRÊT A LIVRER</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @elseif($commande->etat == 'en_expedition')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente']) }}">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @elseif($commande->etat == 'livrer')
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente']) }}">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition']) }}">METTRE EN EXPÉDITION</a>
            <a class="dropdown-item" href="{{ route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler']) }}">ANNULER LA COMMANDE</a>
        @elseif($commande->etat == 'annuler')
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
<style >
    .dropbtn {
  margin: 10px;
  background-color:white;
  color: #000; 
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown img{
  width: 30px;
  border-radius: 50%;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}


.dropdown-content a:hover {background-color: #ddd;}


.dropdown:hover .dropdown-content {display: block;}


.dropdown:hover .dropbtn {background-color: #2a2185;}
</style>