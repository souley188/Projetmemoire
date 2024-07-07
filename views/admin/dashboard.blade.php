<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        @include('partials.admin.navbar')

        <!-- ========================= Main ==================== -->
       @include('partials.admin.main')
       <main class="moni">
        @yield('content')
    </main>
          <!-- ======================= Cards ================== -->
  
         
    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>