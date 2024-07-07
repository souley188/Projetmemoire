<table>
        
        <thead>
            <tr>
                <th>ID Commande</th>
                <th>Utilisateur</th>
                <th>Nom GP</th>
                <th> Villes </th>
                <th>Date de depart -- Date d'arrivée</th>
                <th>Kilo</th>
                <th>Etats</th>
                
            </tr>
        </thead>
        <tbody>
    @forelse ($commandes as $commande)
    <tr>
        <td>{{ $commande->code }}</td>
        <td>{{ $commande->user->name }}</td>
        <td>{{ $commande->gp->nom_gp }}</td>
        <td>{{ $commande->gp->ville_depart->nom_ville }} -> {{ $commande->gp->ville_arrive->nom_ville }}</td>
        <td>{{date('d-m-Y', strtotime($commande->gp->date_depart))  }} -> {{ date('d-m-Y', strtotime($commande->gp->date_arrive))  }}</td>
        <td>{{ $commande->kilo }}</td>
        <td>{{ $commande->etape }}</td>
       
    </tr>
    @empty
    <p>Pas de donnée</p>
@endforelse
    </tbody>
</table>