 <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">GP</span>
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="{{route('dashboard.gp')}}">
              <span class="material-icons-outlined">settin</span> Dashboard
            </a>
          </li>
          
          <li class="sidebar-list-item">
            <a href="{{route('annonce.gp')}}">
              <span class="material-icons-outlined">forum</span> Passer Annonces
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{route('contactgp.gp')}}">
              <span class="material-icons-outlined">phone</span> Contact GP
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="{{route('affichetout.store')}}">
              <span class="material-icons-outlined">poll</span> Gestion des Commandes
            </a>
          </li>
           <li class="sidebar-list-item">
            <a href="{{route('reclamations.index')}}">
              <span class="material-icons-outlined">settin</span> Reclamation
            </a>
          </li>
         <li class="sidebar-list-item">
            <a href="{{route('logout')}}">
              <span class="material-icons-outlined">s</span> Se Deconnecter
            </a>
          </li>
        </ul>
      </aside>