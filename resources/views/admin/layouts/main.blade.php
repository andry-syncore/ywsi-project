<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Poppins Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- SB Admin CSS -->
   <link rel="stylesheet" href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
   <!-- favicon -->
   <link rel="shortcut icon" href="{{ asset('storage/img/logo-white.svg') }}" type="image/x-icon">

   <title>Dashboard</title>
</head>

<body id="page-top">

   <div id="wrapper">
      @include('admin.layouts.sidebar')

      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">

            @include('admin.layouts.topbar')

            <div class="container-fluid">
               @yield('content')
            </div>
         </div>

         @include('admin.layouts.footer')
      </div>
   </div>

   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>

   <!-- Jquery -->
   <script src="{{ asset('assets/home/js/jquery-3.6.0.min.js') }}"></script>
   <!-- Jquery Easing -->
   <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
   <script src="{{ asset('assets/admin/vendor/jquery-easing/jquery.easing.compatibility.js') }}"></script>
   <!-- Bootstrap JS -->
   <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- SB Admin JS -->
   <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>
   <!-- Idle JS -->
   <script src="{{ asset('assets/admin/js/js-idle.min.js') }}"></script>
   <!-- Font Awesome JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
      integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script>

      // auto logout
      idle({
         onIdle: function() {
            fetch('/web-admin/logout', {
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  method: 'POST'
               })
               .then(res => res.text())
               .then(res => {
                  window.location.href = '/web-admin'
               })
         },
         idle: 1800000,
      }).start();

   </script>
</body>

</html>
