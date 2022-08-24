<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
   <!-- Poppins Font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
   <!-- Font Awesome CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Swiper CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
   <!-- leaflet CSS -->
   <link rel="stylesheet" href="{{ asset('assets/home/css/leaflet.css') }}">
   <!-- favicon -->
   <link rel="shortcut icon" href="{{ asset('assets/home/img/logo-white.svg') }}" type="image/x-icon">
   <!-- Optional CSS -->
   @stack('css')

   <title>YWSI</title>
</head>

<body>
   <!-- Navbar -->
   @include('layouts.navbar')

   <!-- Content -->
   @yield('content')

   <!-- Footer -->
   @include('layouts.footer')

   <!-- Jquery -->
   <script src="{{ asset('assets/home/js/jquery-3.6.0.min.js') }}"></script>
   <!-- Bootstrap JS -->
   <script src="{{ asset('assets/home/js/bootstrap.bundle.min.js') }}"></script>
   <!-- Font Awesome JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
      integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <!-- Swiper JS -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
   <!-- leaflet JS -->
   <script src="{{ asset('assets/home/js/leaflet.js') }}"></script>
   <!-- Optional JS -->
   @stack('js')

   <script>
      if (window.location.pathname == '/') {
         const navbar = document.querySelector('#navbar')
         window.onscroll = function() {
            scrollFunction()
         };

         function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
               navbar.classList.add('bg-white', 'shadow')
               navbar.classList.remove('bg-transparent', 'navbar-dark')
            } else {
               navbar.classList.add('bg-transparent', 'navbar-dark')
               navbar.classList.remove('bg-white', 'shadow')
            }
         }

         // When the user clicks on the button, scroll to the top of the document
         function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
         }
      }
   </script>
</body>

</html>
