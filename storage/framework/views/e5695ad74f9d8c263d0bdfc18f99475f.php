<table>
        
        <thead>
            <tr>
                
                <th>Utilisateur</th>
                <th>Nom GP</th>
                <th> Villes </th>
                <th>Date de depart -- Date d'arrivée</th>
                <th>Nom destinataire</th>
                <th>Kilo</th>
                <th>Etats</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $commandes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commande): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
         
        <td><?php echo e($commande->user->name); ?></td>
        <td><?php echo e($commande->gp->nom_gp); ?></td>
        <td><?php echo e($commande->gp->ville_depart->nom_ville); ?> -> <?php echo e($commande->gp->ville_arrive->nom_ville); ?></td>
        <td><?php echo e(date('d-m-Y', strtotime($commande->gp->date_depart))); ?> -> <?php echo e(date('d-m-Y', strtotime($commande->gp->date_arrive))); ?></td>
        <td><?php echo e($commande->colis->nom_destinataire); ?></td>
        <td><?php echo e($commande->kilo); ?></td>
        <td><?php echo e($commande->etape); ?></td>
        <td>

                 <!-- Utilisez PUT ou PATCH selon votre route -->
                 
        
    </button>
    <div class="dropdown">
    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">
        Options
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php if($commande->etape == 'en_attente'): ?>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition'])); ?>">METTRE EN PRÊT A LIVRER</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler'])); ?>">ANNULER LA COMMANDE</a>
        <?php elseif($commande->etape == 'en_expedition'): ?>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente'])); ?>">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler'])); ?>">ANNULER LA COMMANDE</a>
        <?php elseif($commande->etape == 'livrer'): ?>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente'])); ?>">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition'])); ?>">METTRE EN EXPÉDITION</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler'])); ?>">ANNULER LA COMMANDE</a>
        <?php elseif($commande->etape == 'annuler'): ?>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_attente'])); ?>">METTRE EN ATTENTE</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'en_expedition'])); ?>">METTRE EN EXPÉDITION</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'livrer'])); ?>">METTRE A LIVRER</a>
            <a class="dropdown-item" href="<?php echo e(route('changer.etat', ['id' => $commande->id, 'nouvel_etat' => 'annuler'])); ?>">ANNULER LA COMMANDE</a>
        <?php endif; ?>
    </div>
</div>



            
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>Pas de donnée</p>
<?php endif; ?>
    </tbody>
</table><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/components/admin/table_commande.blade.php ENDPATH**/ ?>