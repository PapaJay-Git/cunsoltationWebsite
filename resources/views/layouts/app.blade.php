
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <!-- CDN ASSETS -->
  <link rel="stylesheet" href="./cdn-assets/css/google-poppins.css">
  <link rel="stylesheet" href="./cdn-assets/css/google-archivo.css">
  <link rel="stylesheet" href="./cdn-assets/css/animate.min.css"/>
  <script src="./cdn-assets/js/ScrollMagic.min.js"></script>
  <script src="./cdn-assets/js/debug.addIndicators.min.js"></script>
  <!-- CDN ASSETS -->

  <!-- TAILWDIND OUTPUT -->
  @vite('resources/css/app.css')

  <link rel="stylesheet" href="./cdn-assets/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="./cdn-assets/owlcarousel/owl.theme.default.min.css">
  <!-- TAILWDIND OUTPUT -->

  <!-- CUSTOM CSS -->
  <link href="./css/styles.css" rel="stylesheet">
  <link href="./css/hamburger.css" rel="stylesheet">
  <!-- CUSTOM CSS -->

</head>
<body class="poppins-light">

    <main>
        @yield('mainContent')
        <x-footer-component />
    </main>

    <script src="./cdn-assets/js/jquery-3.6.4.min.js"></script>
<script src="./cdn-assets/owlcarousel/owl.carousel.min.js"></script>
<script src="./js/scroll-magic.js"></script>
<script src="./js/hamburger.js"></script>
</body>
</html>
