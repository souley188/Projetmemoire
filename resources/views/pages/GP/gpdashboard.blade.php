<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="grid-container">

      @include('pages.GP.header')

      <!-- Sidebar -->
      @include('pages.GP.sidebar')
      <!-- End Sidebar -->
    <main>
        @yield('content')
    </main>
      <!-- Main -->
     
    </div>

    <!-- Scripts -->
    <!-- Custom JS -->
    <script>
        // SIDEBAR TOGGLE

let sidebarOpen = false;
const sidebar = document.getElementById('sidebar');

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}

    </script>
    <style>
        body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  background-color: rgb(247, 246, 252);
  color: rgb(70, 71, 81);
  font-family: 'Open Sans', sans-serif;
}
.dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown img{
    width: 30px;
    border-radius: 50%;
    
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  
  .dropdown-content a:hover {background-color: #ddd;}
  
  
  .dropdown:hover .dropdown-content {display: block;}
  

  .dropdown:hover .dropbtn {background-color: #2a2185;}
.material-icons-outlined {
  vertical-align: middle;
  line-height: 1px;
  font-size: 30px;
}

.text-secondary {
  color: rgb(70, 71, 81);
}

.text-blue {
  color: rgb(29, 38, 154);
}

.background-blue {
  background-color: rgb(29, 38, 154);
}

.text-red {
  color: rgb(213, 0, 0);
}

.background-red {
  background-color: rgb(213, 0, 0);
}

.text-green {
  color: rgb(46, 125, 50);
}

.background-green {
  background-color: rgb(46, 125, 50);
}

.text-orange {
  color: rgb(255, 111, 0);
}

.background-orange {
  background-color: rgb(255, 111, 0);
}

.grid-container {
  display: grid;
  grid-template-columns: 260px 1fr 1fr 1fr;
  grid-template-rows: 0.2fr 3fr;
  grid-template-areas:
    'sidebar header header header'
    'sidebar main main main';
  height: 100vh;
}

/* ---------- HEADER ---------- */

.header {
  grid-area: header;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 30px 0 30px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.menu-icon {
  display: none;
}

/* ---------- SIDEBAR ---------- */

#sidebar {
  grid-area: sidebar;
  height: 100%;
  background-color: rgb(29, 38, 154);
  color: rgb(255, 255, 255);
  overflow-y: auto;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

.sidebar-title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 20px 20px 20px;
  margin-bottom: 30px;
}

.sidebar-title > span {
  display: none;
}

.sidebar-brand {
  margin-top: 15px;
  font-size: 30px;
  font-weight: 700;
}

.sidebar-brand > .material-icons-outlined {
  font-size: 50px;
}

.sidebar-list {
  padding: 0;
  margin-top: 15px;
  list-style-type: none;
}

.sidebar-list-item {
  padding: 20px 20px 20px 20px;
  font-size: 18px;
}

.sidebar-list-item:hover {
  background-color: rgba(255, 255, 255, 0.2);
  cursor: pointer;
}

.sidebar-list-item > a {
  text-decoration: none;
  color: rgb(180, 184, 244);
}

.sidebar-responsive {
  display: inline !important;
  position: absolute;
}

/* ---------- MAIN ---------- */

.main-container {
  grid-area: main;
  overflow-y: auto;
  padding: 20px 20px;
}

.main-title {
  display: flex;
  justify-content: space-between;
}

.main-cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 20px;
  margin: 20px 0;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 25px;
  color: rgb(255, 255, 255);
  border-radius: 30px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card:first-child {
  background-color: rgb(213, 0, 0);
}

.card:nth-child(2) {
  background-color: rgb(46, 125, 50);
}

.card:nth-child(3) {
  background-color: rgb(255, 111, 0);
}

.card:nth-child(4) {
  background-color: rgb(29, 38, 154);
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-inner > span {
  font-size: 50px;
}

.products {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.product-card {
  height: 350px;
  background-color: rgb(255, 255, 255);
  padding: 25px;
  border-radius: 30px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.product-description {
  padding-top: 50px;
}

.product-button {
  background-color: rgb(29, 38, 154);
  color: rgb(255, 255, 255);
  padding: 20px;
  border-radius: 30px;
}

.product-button > .material-icons-outlined {
  font-size: 50px;
}

.social-media {
  height: 350px;
  padding: 10px;
}

.product {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.product-icon {
  color: rgb(255, 255, 255);
  width: 48px;
  height: 48px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 20px;
}

.product-icon > .bi {
  font-size: 25px;
}

/* ---------- MEDIA QUERIES ---------- */

/* Medium <= 992px */
@media screen and (max-width: 992px) {
  .grid-container {
    grid-template-columns: 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      'header'
      'main';
  }

  #sidebar {
    display: none;
  }

  .menu-icon {
    display: inline;
  }

  .sidebar-title > span {
    display: inline;
  }
}

/* Small <= 768px */
@media screen and (max-width: 768px) {
  .main-cards {
    grid-template-columns: 1fr;
    gap: 10px;
    margin-bottom: 0;
  }

  .products {
    grid-template-columns: 1fr;
    margin-top: 30px;
  }
}

/* Extra Small <= 576px */
@media screen and (max-width: 576px) {
  .header-left {
    display: none;
  }
}

    </style>
  </body>
</html>