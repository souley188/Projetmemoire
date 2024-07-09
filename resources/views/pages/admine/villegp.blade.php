@extends('admin.dashboard')
@section('content')

    
       
       
<body>
        <div class="form-container">
            <h2>Formulaire de Villes</h2>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <form action="{{ route('villestore.gp') }}" method="post">
                @csrf
                <label for="nom">Entrez le nom de la ville </label>
                <input type="text" id="nom" name="nom_ville" required>

                <label for="adresse">Pays:</label>
                <input type="text" id="adresse" name="pays" required>

                

                <input type="submit" value="Envoyer">
            </form>
        </div>
         <div class="contact-list">
            <h2>Liste des Villes</h2>
            <ul>
            
               @foreach($villes as $ville)
                    <li>
                        <strong>Nom:</strong> {{ $ville->nom_ville }} <br>
                        <strong>Adresse:</strong> {{ $ville->pays }} <br>
                       
                    </li>
                @endforeach
            
         </ul>
        </div>
</body>       
@endsection