<table>
        
        <thead>
            <tr>
                <th>ID Commande</th>
                <th>Utilisateur</th>
                <th>Nom GP</th>
                <th> Villes </th>
                <th>Date de depart -- Date d'arrivée</th>
                <th>Kilo</th>
                <th>Etats</th>
                
            </tr>
        </thead>
        <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $commandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        <td><?php echo e($commande->code); ?></td>
        <td><?php echo e($commande->user->name); ?></td>
        <td><?php echo e($commande->gp->nom_gp); ?></td>
        <td><?php echo e($commande->gp->ville_depart->nom_ville); ?> -> <?php echo e($commande->gp->ville_arrive->nom_ville); ?></td>
        <td><?php echo e(date('d-m-Y', strtotime($commande->gp->date_depart))); ?> -> <?php echo e(date('d-m-Y', strtotime($commande->gp->date_arrive))); ?></td>
        <td><?php echo e($commande->kilo); ?></td>
        <td><?php echo e($commande->etape); ?></td>
       
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>Pas de donnée</p>
<?php endif; ?>
    </tbody>
</table><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/components/admin/table_commandeUser.blade.php ENDPATH**/ ?>