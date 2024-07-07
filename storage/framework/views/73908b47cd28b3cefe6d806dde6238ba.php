
<aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-oulined"></span> GP
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="<?php echo e(route('main.gp')); ?>">
              <span class="material-icons-outlined">dashboard</span> Dashboard
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">forum</span> Reclamation
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="<?php echo e(route('showcolis')); ?>">
              <span class="material-icons-outlined">phone</span> Gestion de Colis
            </a>
          </li>
          
          <li class="sidebar-list-item">
            <a href="<?php echo e(route('depotcolis')); ?>">
              <span class="material-icons-outlined">poll</span> Dépot
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="#">
              <span class="material-icons-outlined">settings</span> Settings
            </a>
          </li>
        </ul>
      </aside><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/GP/sidebargp.blade.php ENDPATH**/ ?>