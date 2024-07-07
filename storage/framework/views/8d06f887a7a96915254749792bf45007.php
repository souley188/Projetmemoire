

<?php $__env->startSection('title'); ?>
    Bienvenue
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section class="welcome-section">
    <div class="welcome-content">
        <div class="welcome-text">
            <h1 >Bienvenue sur SamaGP</h1>
            <p class = "text">Nous vous aidons à régulariser et suivre vos colis de manière efficace et rapide.Avec <b>SamaGP</b> , vous pouvez facilement suivre vos envois, déposer une réclamation, et rechercher les informations nécessaires pour vos GP.</p>
        </div>
        <div class="image">
            <img src="<?php echo e(asset('assets/images/images (2).jpeg')); ?>" alt="image d'accueil">
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/index.blade.php ENDPATH**/ ?>