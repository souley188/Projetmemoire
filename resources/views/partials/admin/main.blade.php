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
          <img src={{"assets/images/profile.png"}} >  @auth  
          {{auth()->user()->prenom}}
          @endauth
        </button>
    <div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="#">Administration</a>
    <a href="#">Log Out</a>
  </div>
</div>
            </div>