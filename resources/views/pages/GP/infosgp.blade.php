@extends('pages.GP.gpdashboard')
@section('content')
<main>
    <style>
        main{
            margin: 80px;
            margin-top: -60px;
            
            padding: 0px;
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            margin: 180px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .form-container h2 {
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
    </style>

<body>
    @if(!isset($user_gp))
    <div class="form-container">
    <h4>Pour commencer entrez les informations de votre gp</h4>
        <h2>Formulaire de Contact</h2>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <form action="{{ route('contactgp.store') }}" method="post">
            @csrf
            <label for="nom">Entrez le nom de votre GP</label>
            <input type="text" id="nom"  name="nom_gp"  required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="numero">Numéro de téléphone:</label>
            <input type="tel" id="numero" name="telephone" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address"  required>

            <input type="submit" value="Envoyer">
        </form>
    </div>
    @else
        <div class="form-container">
        <h2>Modifier les information de ,votre GP</h2>
        <form action="submit_form.php" method="post">
            <label for="nom">Entrez le nom de votre GP</label>
            <input type="text" id="nom" name="nom" value="{{$user_gp->nom_gp}}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{$user_gp->email}}" required>

            <label for="numero">Numéro de téléphone:</label>
            <input type="tel" id="numero" name="numero" value="{{$user_gp->telephone}}" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{$user_gp->address}}"  required>


            <input type="submit" value="Modifier">
        </form>
    </div>
    @endif
</body>
</main>
@endsection