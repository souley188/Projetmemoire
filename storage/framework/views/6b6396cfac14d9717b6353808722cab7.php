
<?php $__env->startSection('content'); ?>
<main>

    
    <title>Formulaire d'envoi de colis</title>
    <style>
        /* Styles CSS facultatifs pour la mise en page */
    
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 30%;
            padding: 8px;
            text-align: center;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #2a2185;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        button:hover {
            background-color: #2a2185;
        }
    </style>



    <h2>Formulaire d'envoi de colis</h2>
    <?php if(session('success')): ?>
        <div style="color: green; text-align: center;">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <form  action="<?php echo e(route('depot.store')); ?>" method="post">
    <?php echo csrf_field(); ?>
   
    <input type="hidden" name="gp_id" value="<?php echo e($gps->id); ?>"> <!-- Remplacez par la valeur correcte de gp_id -->
    <input type="hidden" name="user_id" value="<?php echo e(auth()->user()->id); ?>"> <!-- Utilise l'ID de l'utilisateur connecté -->
        <h3>Informations de l'expéditeur :</h3>
        <label for="expediteur_nom">Nom :</label>
        <input type="text" id="expediteur_nom" name="expediteur_nom" required>

        <label for="expediteur_prenom">Prénom :</label>
        <input type="text" id="expediteur_prenom" name="expediteur_prenom" required>

        <label for="expediteur_email">Email :</label>
        <input type="email" id="expediteur_email" name="expediteur_email" required>

        <label for="expediteur_telephone">Numéro de téléphone :</label>
        <input type="tel" id="expediteur_telephone" name="expediteur_telephone" required> 

        <h3>Informations du destinataire :</h3>
        <label for="destinataire_nom">Nom :</label>
        <input type="text" id="destinataire_nom" name="destinataire_nom" required>

        <label for="destinataire_prenom">Prénom :</label>
        <input type="text" id="destinataire_prenom" name="destinataire_prenom" required>

        <label for="destinataire_email">Email :</label>
        <input type="email" id="destinataire_email" name="destinataire_email" required>

        <label for="destinataire_telephone">Numéro de téléphone :</label>
        <input type="tel" id="destinataire_telephone" name="destinataire_telephone" required>

        <h3>Détails du colis :</h3>
        <label for="poids_colis">Nombre de kg :</label>
        <input type="number" id="poids_colis" name="poids_colis" min="1" required>

        <h3>Mode de paiement :</h3>
        <label for="mode_paiement">Paiement par espèces : <input type="checkbox" id="mode_paiement" name="mode_paiement"></label>
       

        <button type="submit">Envoyer le colis</button>
    </form>
    </main>
    

    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/GP/depotcolis.blade.php ENDPATH**/ ?>