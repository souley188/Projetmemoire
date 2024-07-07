<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SamaGP</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>
        <section class="welcome-section">
            <h1>Bienvenue sur SamaGP</h1>
            <p>Nous vous aidons à régulariser et suivre vos colis de manière efficace et rapide. Avec SamaGP, vous pouvez facilement suivre vos envois, déposer une réclamation, et rechercher les informations nécessaires pour vos GP.</p>
            
        </section>
    </main>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        // Add any JavaScript or animations here
    </script>
</body>
</html>
<?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/test.blade.php ENDPATH**/ ?>