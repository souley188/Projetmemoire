
<?php $__env->startSection('content'); ?>

<div class="main-contained">
    <div class="form-contained">
    <h2 class="title-ville">Formulaire GP</h2>
    
        <form action="<?php echo e(route('gp.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="city-name">Nom du GP</label>
                <input type="text" id="city-name" name="nom_gp" value="<?php echo e(old('nom_gp') ? old('nom_gp') : ''); ?>"> <br>
                
                <?php $__errorArgs = ['nom_gp'];
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
                
                <label for="country">Ville de Depart</label>
                <select id="country" name="ville_depart_id" value="<?php echo e(old('ville_depart_id') ? old('ville_depart_id') : ''); ?>"> <br>
                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                
                <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->nom_ville); ?></option>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php $__errorArgs = ['ville_depart_id'];
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
            <div class="form-group">
                <label for="country">Ville de D'arrivée</label>
                <select  id="country" name="ville_arrive_id" value="<?php echo e(old('ville_arrive_id') ? old('Date_darrive_id') : ''); ?>"> <br>
                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                
                <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->nom_ville); ?></option>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            
               </select>
                <?php $__errorArgs = ['ville_arrive_id'];
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
            <div class="form-group">
                <label for="country">Date de Depart</label>
                <input type="datetime-local" id="country" name="date_depart" value="<?php echo e(old('date_depart') ? old('date_depart') : ''); ?>"> <br>
                
                <?php $__errorArgs = ['date_depart'];
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
           
            <div class="form-group">
                <label for="country">Date de D'arrivée</label>
                <input type="datetime-local" id="country" name="date_arrive" value="<?php echo e(old('date_arrive') ? old('date_arrive') : ''); ?>"> <br>
                
                <?php $__errorArgs = ['date_arrive'];
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
            <div class="form-group">
                <label for="country">Prix_colis/KG</label>
                <input type="" id="country" name="montant" value="<?php echo e(old('montant') ? old('montant') : ''); ?>"> <br>
                
                <?php $__errorArgs = ['montant'];
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
            <div class="form-group">
                <label for="city-name">Niveau de satisfaction</label>
                <input type="text" id="satisfaction" name="satisfaction" value="<?php echo e(old('satisfaction') ? old('satisfaction') : ''); ?>"> <br>
                
                <?php $__errorArgs = ['satisfaction'];
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
            <div>
                <input type="submit" value="Ajouter">
            </div>
        </form>
    </div>
    <div class="list-contained">
        <table>
            <legend>Liste des GP</legend>
            <thead>
                <tr>
                    <th>Nom du GP</th>
                    <th>Ville de depart</th>
                    <th>Ville d'arrivée</th>
                    <th>Date de depart</th>
                    <th>Date d'arrivée</th>
                    <th>Niveau de satisfaction</th>
                    <th>Prix_colis/kg</th>
                   
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                
               <?php $__currentLoopData = $gps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                    <td><?php echo e($gp->nom_gp); ?></td>
                    <td><?php echo e($gp->ville_depart->nom_ville); ?>  (<?php echo e($gp->ville_depart->pays); ?>)</td>
                    <td><?php echo e($gp->ville_arrive->nom_ville); ?>  (<?php echo e($gp->ville_depart->pays); ?>)    </td>
                    <td><?php echo e($gp->date_depart); ?></td>
                    <td><?php echo e($gp->date_arrive); ?></td>
                    <td><?php echo e($gp->satisfaction); ?></td>
                    <td><?php echo e($gp->montant); ?></td>
                         

                    <td class="table-actions">
                        <a href="<?php echo e(route('gp.edit',$gp)); ?>">Modifier</a>
                        <form action="" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                    
               </tr>
               
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        
                        
                    
                
            </tbody>
        </table>
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
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/Pages/admine/GP.blade.php ENDPATH**/ ?>