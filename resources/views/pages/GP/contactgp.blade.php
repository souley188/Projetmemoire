@extends('pages.GP.gpdashboard')
@section('content')
<main>
    <style>
        main {
            margin: 80px;
            margin-top: -00px;
            padding: 0px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: flex-start;

        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container, .contact-list {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: 10px;
        }
        .form-container h2, .contact-list h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .contact-list ul {
            list-style-type: none;
            padding: 0;
        }
        .contact-list li {
            background-color: #f9f9f9;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>

    <body>
        <div class="form-container">
            <h2>Formulaire de Contact</h2>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <form action="{{ route('contactgp.gp') }}" method="post">
                @csrf
                <label for="nom">Entrez le nom </label>
                <input type="text" id="nom" name="nom"  >

                <label for="adresse">Adresse:</label>
                <input type="text" id="adresse" name="adresse"  required>

                <label for="telephone">Numéro de téléphone:</label>
                <input type="tel" id="telephone" name="telephone" required>

                <input type="submit" value="Envoyer">
            </form>
        </div>

        <div class="contact-list">
            <h2>Liste des Contacts</h2>
            <ul>
               @foreach($contacts as $contact)
                    <li>
                        <strong>Nom:</strong> {{ $contact->nom }} <br>
                        <strong>Adresse:</strong> {{ $contact->adresse }} <br>
                        <strong>Téléphone:</strong> {{ $contact->telephone }}
                    </li>
                @endforeach
            </ul>
        </div>
    </body>
</main>
@endsection
