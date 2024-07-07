
<?php $__env->startSection('title'); ?>
    Reclamation
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
        <section class="reclamation-section">
            <h1>Réclamation</h1>
            <p>Veuillez remplir le formulaire ci-dessous pour soumettre votre réclamation.</p>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $erro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($erro); ?></li>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <form class="reclamation-form" method="post" >
            <?php echo csrf_field(); ?>
            
                <label for="tracking-number">Numéro d'identifiant du colis</label>
               
                <select name="commande_id">
                <?php $__currentLoopData = $commandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($commande->id); ?>"><?php echo e($commande->code); ?> - (<?php echo e($commande->gp->ville_depart->nom_ville); ?> -> <?php echo e($commande->gp->ville_arrive->nom_ville); ?> ) </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Décrivez votre réclamation" rows="5" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </section>
    </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/reclamation.blade.php ENDPATH**/ ?>