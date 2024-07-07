<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    
    <form method="POST" action="{{ route('login') }}">
    <h1>Connexion</h1>
        @csrf
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <label>Mot de passe</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
        <p>vous n'avez pas de compte  <a href="{{route('register')}}">Inscrivez vous ici </a> </p>
    </form>
</body>
</html>
<style>
    /* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
    margin: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

p {
    text-align: center;
}

a {
    color: #007BFF;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>