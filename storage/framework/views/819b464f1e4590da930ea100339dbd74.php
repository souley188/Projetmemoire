


<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    
    <form method="POST" action="<?php echo e(route('auth.register')); ?>">
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h1>Inscription</h1>
        <?php echo csrf_field(); ?>
        <label>Nom d'utilisateur</label>
        <input type="text" name="name" required>
        <br>
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <label>Nom</label>
        <input type="text" name="nom" required>
        <br>
        <label>Prénom</label>
        <input type="text" name="prenom" required>
        <br>
        <label>Mot de passe</label>
        <input type="password" name="password" required>
        <br>
        <label>Confirmez le mot de passe</label>
        <input type="password" name="password_confirmation" required>
        <br>
        <button type="submit">S'inscrire</button>
        <p>vous avez un compte  <a href="<?php echo e(route('login')); ?>">Connecter Vous ici </a> </p>

    </form>
    
</body>
</html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
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
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            box-sizing: border-box;
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
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 3px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            text-align: center;
            margin-top: 10px;
            color: #555;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/auth/register.blade.php ENDPATH**/ ?>