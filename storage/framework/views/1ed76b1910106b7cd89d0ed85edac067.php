<header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <span class="material-icons-outlined">search</span>
        </div>
        <div class="dropdown">
        <button class="dropbtn">
          <img src= <?php echo e("assets/images/téléchargement.png"); ?> >  <?php if(auth()->guard()->check()): ?>  
          <?php echo e(auth()->user()->prenom); ?>

          <?php endif; ?>
        </button>
    <div class="dropdown-content">
    <a href="login">Log Out</a>
  </div>
       
      </header><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/GP/headergp.blade.php ENDPATH**/ ?>