

<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Utilisateur : Gratuité Partielle</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Gratuité Partielle</h1>
        </header>
        <section class="contact-info">
            <h2>Informations de Contact</h2>
            <p><strong>Email :</strong> marie@gmail.com</p>
            <p><strong>Numéro de Téléphone :</strong> +33 1 23 45 67 89</p>
        </section>
        <section class="user-reviews">
            <h2>Avis des Utilisateurs</h2>
            <div class="review">
                <h3>Jean Dupont</h3>
                <p class="rating">★★★★★</p>
                <p>J'ai trouvé ce service  très utile. Il m'a permis de tester le service sans engagement et de décider si cela correspondait à mes besoins. Le seul inconvénient est qu'il y a quelques fonctionnalités limitées.</p>
            </div>
            <div class="review">
                <h3>Marie Dubois</h3>
                <p class="rating">★★★★★</p>
                <p>c'est une bonne initiative, mais il serait mieux d'avoir plus de temps pour tester les fonctionnalités avancées. Sinon, le service client est réactif et agréable.</p>
            </div>
            <div class="review">
                <h3>Paul Martin</h3>
                <p class="rating">★★★★★</p>
                <p>Excellent service ! ça m'a convaincu d'opter pour le plan complet. C'est un excellent moyen d'essayer avant de s'engager.</p>
            </div>
        </section>
    </div>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

header {
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    color: #ddd;
}

.contact-info, .user-reviews {
    margin-bottom: 20px;
}

.contact-info h2, .user-reviews h2 {
    color: #555;
    border-bottom: 2px solid #eee;
    padding-bottom: 10px;
    margin-bottom: 10px;
}

.contact-info p, .user-reviews p {
    color: #333;
}

.user-reviews .review {
    margin-bottom: 15px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fafafa;
}

.user-reviews .review h3 {
    margin: 0;
    color: #333;
}

.user-reviews .rating {
    color: #ff9800;
    margin-bottom: 10px;
}

    </style>
</body>
</html>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/GP/gpshow.blade.php ENDPATH**/ ?>