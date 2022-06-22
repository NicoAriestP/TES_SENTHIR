<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Blog ini berisi informasi informasi menarik yang diupdate harian mulai dari programming,gaming,lifestyle dan masih banyak lagi." />
    <meta name="author" content="Nico Ariest Putra" />
    <title>Nico Blog | {{ $title }}</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ url('/css/styles.css') }}" rel="stylesheet" />
    
  </head>
  <style>
    body {
      margin: 0;
    }
  </style>
  <body>
    @include('partials.navbar')
    @include('partials.header')
    @yield('container')
    @include('partials.footer')
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ url('/js/scripts.js') }}"></script>

  </body>
</html>
