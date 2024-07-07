<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SamaGP - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="../css/app.css">
    <style>
        /* Style pour la boîte d'alerte */
        .alert {
            padding: 10px;
            margin:20px auto;
            border: 1px solid transparent;
            border-radius: 4px;

        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
    </style>

</head>
<body>


    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <b>
    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div></b>
<?php endif; ?>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/layouts/principale.blade.php ENDPATH**/ ?>