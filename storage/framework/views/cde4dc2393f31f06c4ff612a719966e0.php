

<?php $__env->startSection('content'); ?>

<div class="main-container">
    <div class="form-containes">
    <h2 class="title-ville">Formulaire Ville</h2>
        <form action="<?php echo e(route('ville.update',$ville)); ?>" method="post">
            <?php echo method_field('PUT'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-groups">
                <label for="city-name">Nom de la ville</label>
                <input type="text" id="city-name" name="nom_ville" value="<?php echo e(old('nom_ville') ? old('nom_ville') : $ville->nom_ville); ?>"> <br>
                
                <?php $__errorArgs = ['nom_ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="change">
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span>
                <style>
                    .change{
                        color: red;
                    }
                </style>
            </div>
            <div class="form-groups">
                <label for="country">Pays</label>
                <input type="text" id="country" name="pays" value="<?php echo e(old('pays') ? old('pays') : $ville->pays); ?>"> <br>
                
                <?php $__errorArgs = ['pays'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="change">
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </span>
            </div>
            <div>
                <input type="submit" value="Modifier">
            </div>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/admine/ville-update.blade.php ENDPATH**/ ?>