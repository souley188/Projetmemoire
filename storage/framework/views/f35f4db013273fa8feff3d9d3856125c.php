
<?php $__env->startSection('contents'); ?>


    <main class="main-container">
    <title>Formulaire d'envoi de colis</title>
    <style>
        /* Styles CSS facultatifs pour la mise en page */
    
        .main-container{
           text-align: center;
           font-family: Arial, sans-serif;
            width: 600px;
            margin: 170px ;

            
            
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 50%;
            padding: 8px;
            text-align: center;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>



    <h2>Formulaire d'envoi de colis</h2>
    <form  action="<?php echo e(route('depot.store')); ?>" method="post">
    <?php if(session('success')): ?>
        <div style="color: green; text-align: center;">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
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


<?php echo $__env->make('pages.GP.gpdashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/Pages/GP/depotcolis.blade.php ENDPATH**/ ?>