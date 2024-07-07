<header>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
        <nav>
            <div class="logo">
                <img src="<?php echo e(asset('assets/images/ejidz469qf05wyna.svg')); ?>" alt="Logo de SamaGP" class="logo-img">
                <span> <a href="/">SamaGP</a></span>
            </div>
            <ul class="nav-links">
                <li ><a href="<?php echo e(route('toutcommandeUser')); ?>" class="<?php echo e(request()->routeIs('toutcommandeUser') ? 'toutcommandeUser' : ''); ?>" >Suivre un colis</a></li>
                <li><a href="<?php echo e(route('reclamation')); ?>" class="<?php echo e(request()->routeIs('reclamation') ? 'active-link' : ''); ?>">Réclamation</a></li>
                <li><a href="<?php echo e(route('cherchez-gp')); ?>" class="<?php echo e(request()->routeIs('cherchez-gp') ? 'active-link' : ''); ?>">Chercher un GP</a></li>
            </ul>
            <div class="dropdown">
        <button class="dropbtn">
          <img src= <?php echo e("assets/images/téléchargement.png"); ?> >  <?php if(auth()->guard()->check()): ?>  
          <?php echo e(auth()->user()->prenom); ?>

          <?php endif; ?>
        </button>
    <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="#">Mes Commandes</a>
    <a href="login">Log Out</a>
  </div>
</div>
           
        </nav>
</header><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/partials/header.blade.php ENDPATH**/ ?>