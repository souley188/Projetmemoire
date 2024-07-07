

<?php $__env->startSection('content'); ?>

<div class="main-container">
    <div class="form-container">
    <h2 class="title-ville">Formulaire Ville</h2>
        <form action="<?php echo e(route('ville.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="city-name">Nom de la ville</label>
                <input type="text" id="city-name" name="nom_ville" value="<?php echo e(old('nom_ville') ? old('nom_ville') : ''); ?>"> <br>
                
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
            <div class="form-group">
                <label for="country">Pays</label>
                <input type="text" id="country" name="pays" value="<?php echo e(old('pays') ? old('pays') : ''); ?>"> <br>
                
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
                <input type="submit" value="Soumettre">
            </div>
        </form>
    </div>

    <div class="list-container">
        <table>
            <legend>Liste des Villes</legend>
            <thead>
                <tr>
                    <th>Nom de la Ville</th>
                    <th>Pays</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($ville->nom_ville); ?></td>
                    <td><?php echo e($ville->pays); ?></td>
                    <td class="table-actions">
                        <a href="<?php echo e(route('ville.edit',$ville)); ?>">Modifier</a>
                        
                            <form action="<?php echo e(route('delete.ville',$ville)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit">Supprimer</button>
                            </form>                       
                    </td>
                    
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <!-- Villes data will be inserted here -->
            </tbody>
        </table>
    </div>
</div>
    <style>
    .table-actions {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.table-actions a,
.table-actions form button {
    background-color: #2a2185;
    color: white;
    padding: 5px 10px;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.table-actions a:hover,
.table-actions form button:hover {
    background-color: #2a2185;
}

.table-actions form {
    display: inline;
    margin: 0;
    padding: 0;
}
</style>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/admine/villes.blade.php ENDPATH**/ ?>