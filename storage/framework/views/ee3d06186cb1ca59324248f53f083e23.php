

<?php $__env->startSection('content'); ?>
<main>
<section class="search-section">
<form class="search-form" onsubmit="showConfirmationDialog(event)" method="post" action="<?php echo e(route('confirmegp',$gp)); ?>">
   <?php echo csrf_field(); ?>
   <label> <b>Nom du GP</b> <?php echo e($gp->nom_gp); ?></label>
   <label> <b>Ville de départ </b> <?php echo e($gp->ville_depart->nom_ville); ?>  (<?php echo e($gp->ville_depart->pays); ?>)   </label>
   <label> <b>Ville d'arrivée</b> <?php echo e($gp->ville_arrive->nom_ville); ?>  (<?php echo e($gp->ville_depart->pays); ?>)  </label>
   <label> <b>Date de départ:</b> <?php echo e($gp->date_depart); ?>   </label>
   <label> <b>Date d'arrivée:</b> <?php echo e($gp->date_arrive); ?>   </label>
   <label> <b>Prix du colis/kg:</b><?php echo e($gp->montant); ?>  </label>
   <label> Nombre de Kg du Colis</label>
   <div>
       <input type="number" min="0" max="100000000" id="colis-kg" name="colis-kg" placeholder="Nombre de Kg" required>
   </div>
   <button type="submit"> Soumettre</button>
   <div id="dialogOverlay"></div>
   <div id="confirmationDialog">
       <p>Êtes-vous sûr de vouloir validé votre commande ?</p>
       <button type="button" onclick="confirmYes()">Oui</button>
       <button type="button" onclick="confirmNo()">Non</button>
   </div>
</form>
</section>

<style>
    /* Style pour la boîte de dialogue de confirmation */
    #confirmationDialog {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: white;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }
    #dialogOverlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
</style>

<script>
    function showConfirmationDialog(event) {
        event.preventDefault(); // Empêche le formulaire de se soumettre automatiquement
        document.getElementById('dialogOverlay').style.display = 'block';
        document.getElementById('confirmationDialog').style.display = 'block';
    }

    function confirmYes() {
        document.getElementById('dialogOverlay').style.display = 'none';
        document.getElementById('confirmationDialog').style.display = 'none';
        // Redirige vers une nouvelle page après soumission du formulaire
        document.querySelector('.search-form').submit();
    }

    function confirmNo() {
        alert("Commande annulée.");
        document.getElementById('dialogOverlay').style.display = 'none';
        document.getElementById('confirmationDialog').style.display = 'none';
        // Rester sur la même page
    }
</script>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/commandegp.blade.php ENDPATH**/ ?>