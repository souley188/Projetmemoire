<table>
        
        <thead>
            <tr>
               
                <th>Utilisateur</th>
                <th>Nom GP</th>
                <th> Villes </th>
                <th>Date de depart -- Date d'arrivée</th>
                <th>Kilos</th>
                <th>Etats</th>
                
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
       
    </tr>
    @empty
    <p>Pas de donnée</p>
@endforelse
    </tbody>
</table>