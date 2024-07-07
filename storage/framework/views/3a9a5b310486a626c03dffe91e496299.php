
<?php $__env->startSection('title'); ?>
    Cherchez un GP
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
    <section class="search-section">
        <h1>Chercher un GP</h1>
        <form class="search-form">
            <input type="text" id="search-bar" name="search-bar" placeholder="Rechercher un GP">
            <div class="location-filters">
                <div>
                    <label for="city-depart">Ville de départ</label>
                    <input type="text" id="city-depart" name="city-depart" placeholder="Ville de départ">
                </div>
                <div>
                    <label for="city-arrival">Ville d'arrivée</label>
                    <input type="text" id="city-arrival" name="city-arrival" placeholder="Ville d'arrivée">
                </div>
                <div>
                    <label for="date-depart">Date de départ</label>
                    <input type="date" id="date-depart" name="date-depart" placeholder="Date de départ">
                </div>
                <div>
                    <label for="date-arrival">Date d'arrivée</label>
                    <input type="date" id="date-arrival" name="date-arrival" placeholder="Date d'arrivée">
                </div>
            </div>
            <button type="submit">Rechercher</button>
        </form>
    </section>
</main>  
<div class="list-container">
    <table>
        <legend>Liste des GP</legend>
        <thead>
            <tr>
                <th>Nom du GP</th>
                <th>Trajet</th>
                <th>Prix colis/kg</th>
                <th>Niveau de Satisfaction</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $gps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                    <td> 
                        <a href="<?php echo e(route('info.gp', ['id' => $gp->id])); ?>">
                            <?php echo e($gp->nom_gp); ?> 
                        </a>
                    </td>
                    <td>
                        <?php echo e($gp->ville_depart->nom_ville); ?> (<?php echo e($gp->ville_depart->pays); ?>) -> 
                        <?php echo e($gp->ville_arrive->nom_ville); ?> (<?php echo e($gp->ville_arrive->pays); ?>) <br>
                        <?php echo e($gp->date_depart); ?> -> <?php echo e($gp->date_arrive); ?>

                    </td>
                    <td><?php echo e($gp->montant); ?></td>
                    <td><?php echo e($gp->satisfaction); ?></td>
                    <td>
                        <button> <a href="<?php echo e(route('depotcolis')); ?>"> Enregistrer un depot</a></button>
                    </td>
               </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/Pages/cherchez-gp.blade.php ENDPATH**/ ?>