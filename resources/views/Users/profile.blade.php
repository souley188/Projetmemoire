

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            margin-top: 180px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .container div {
            margin-bottom: 15px;
        }

        .container form {
            margin-top: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }

        .error-list {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .error-list ul {
            list-style-type: none;
            padding: 0;
        }

        .error-list li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile</h1>

        @if ($errors->any())
            <div class="error-list">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <h2>Current Information</h2>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Nom:</strong> {{ $user->nom }}</p>
            <p><strong>Prénom:</strong> {{ $user->prenom }}</p>
        </div>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="name">New Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}">
            </div>
            <div>
                <label for="email">New Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}">
            </div>
            <div>
                <label for="nom">New Nom:</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom', $user->nom) }}">
            </div>
            <div>
                <label for="prenom">New Prénom:</label>
                <input type="text" id="prenom" name="prenom" value="{{ old('prenom', $user->prenom) }}">
            </div>
            <div>
                <label for="password">New Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <div>
                <label for="password_confirmation">Confirm New Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation">
            </div>
            <div>
                <button type="submit">Update Profile</button>
            </div>
        </form>
    </div>
</body>
</html>
