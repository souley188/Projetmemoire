
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Style pour la bordure et l'alignement */
        .options-container {
            width: 100%;
            display: flex;
            border: 2px solid #ccc;
            padding: 10px;
            justify-content: space-around; /* Pour aligner les éléments */
        }
        .moni {
            width: 100%;
            margin: 0px;
        }
        h1{
            margin: 10px;
        }
        a {
            color:black ;
            text-decoration: none; /* Pour enlever la soulignement des liens */
            padding: 5px 10px;
            border-radius: 5px;
        }
        /* Style pour l'option sélectionnée */
        .selected {
            border: 2px solid blue;
            background-color: #2a2185;
            color:#fff;
            
        }
    </style>
    <title>Liste d'options</title>
</head>
<body>
    <h1>Liste des Commandes</h1>
    <div class="options-container">
        <div class="option"><a href="<?php echo e(route('toutcommande')); ?>" onclick="selectOption(event)">tout</a></div>
        <div class="option"><a href="<?php echo e(route('attentecommande')); ?>" onclick="selectOption(event)">en attente</a></div>
        <div class="option"><a href="<?php echo e(route('livrercommande')); ?>" onclick="selectOption(event)">livrer</a></div>
        <div class="option"><a href="<?php echo e(route('annulercommande')); ?>" onclick="selectOption(event)">annuler</a></div>
    </div>

    <script>
        function selectOption(event) {
            // Supprime la classe 'selected' de tous les éléments
            document.querySelectorAll('.option a').forEach(function(element) {
                element.classList.remove('selected');
            });
            // Ajoute la classe 'selected' à l'élément cliqué
            event.target.classList.add('selected');

            // Redirige vers la nouvelle page
            window.location.href = route('toutcommande') ;  }
    </script>
</body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/admine/colis.blade.php ENDPATH**/ ?>