
<?php $__env->startSection('title'); ?>
    Suivre un colis
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
        <section class="tracking-section">
            <h1>Suivre votre colis</h1>
            <p>Veuillez entrer le numéro d'identifiant de votre colis pour suivre son statut.</p>
            <form class="tracking-form">
                <label for="tracking-number">Numéro d'identifiant du colis</label>
                <input type="text" id="tracking-number" name="tracking-number" placeholder="Ex: 1234567890" required>
                <button type="submit">Suivre</button>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/colis.blade.php ENDPATH**/ ?>