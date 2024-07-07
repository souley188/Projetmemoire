
<?php $__env->startSection('title'); ?>
    cherchez un GP
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
        <section class="search-section">
            <h1>Chercher un GP</h1>
            <form class="search-form">
                <input type="text" id="search-bar" name="search-bar" placeholder="Rechercher un GP">
                <div class="location-filters">
                    <div>
                        <label for="country-depart">Pays de depart</label>
                        <input type="text" id="country" name="country" placeholder="Pays">
                    </div>
                    <div>
                        <label for="city-depart">Ville de départ</label>
                        <input type="text" id="city-depart" name="city-depart" placeholder="Ville de départ">
                    </div>
                    <div>
                        <label for="country-arrival">Pays d'arrivée</label>
                        <input type="text" id="city-arrival" name="city-arrival" placeholder="Ville d'arrivée">
                    </div>
                    <div>
                        <label for="city-arrival">Ville d'arrivée</label>
                        <input type="text" id="city-arrival" name="city-arrival" placeholder="Ville d'arrivée">
                    </div>
                </div>
                <button type="submit">Rechercher</button>
            </form>
            </section>
    </main>  
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
                    <th>Prix_colis/kg</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                
              
            <?php $__currentLoopData = $gps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                    <td><?php echo e($gp->nom_gp); ?></td>
                    <td><?php echo e($gp->ville_depart->nom_ville); ?>  (<?php echo e($gp->ville_depart->pays); ?>)</td>
                    <td><?php echo e($gp->ville_arrive_id); ?></td>
                    <td><?php echo e($gp->date_depart); ?></td>
                    <td><?php echo e($gp->date_arrive); ?></td>
                    <td><?php echo e($gp->montant); ?></td>
                    
               </tr>
               
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
               
               
                        
                        
                        
                    
                
            </tbody>
        </table>
    </div>
     
     

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/cherchez-gp.blade.php ENDPATH**/ ?>