<div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="dropdown">
        <button class="dropbtn">
          <img src=<?php echo e("assets/images/profile.png"); ?> >  <?php if(auth()->guard()->check()): ?>  
          <?php echo e(auth()->user()->prenom); ?>

          <?php endif; ?>
        </button>
    <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="#">Administration</a>
    <a href="#">Log Out</a>
  </div>
</div>
            </div><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/partials/admin/main.blade.php ENDPATH**/ ?>