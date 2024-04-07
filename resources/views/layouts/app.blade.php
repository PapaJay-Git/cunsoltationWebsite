
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>
  <!-- CDN ASSETS -->
  <link rel="stylesheet" href="./cdn-assets/css/google-poppins.css">
  <link rel="stylesheet" href="./cdn-assets/css/google-kreon.css">
  <link rel="stylesheet" href="./cdn-assets/css/google-archivo.css">
  <link rel="stylesheet" href="./cdn-assets/css/animate.min.css"/>
  <script src="./cdn-assets/js/ScrollMagic.min.js"></script>
  <script src="./cdn-assets/js/debug.addIndicators.min.js"></script>
  <link rel="icon" type="image/png" href="./images/logo.png">
  <!-- CDN ASSETS -->

  <!-- TAILWDIND OUTPUT -->
  @vite('resources/css/app.css')

    <link rel="stylesheet" href="./cdn-assets/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="./cdn-assets/owlcarousel/owl.theme.default.min.css">
  <!-- TAILWDIND OUTPUT -->

  <!-- CUSTOM CSS -->
  <link href="./css/styles.css?v={{ config("app.scripts_version") }}" rel="stylesheet">
  <link href="./css/hamburger.css?v={{ config("app.scripts_version") }}" rel="stylesheet">
  <!-- CUSTOM CSS -->

</head>
<body class="poppins-light scroll-smooth">

    <main>
        @yield('mainContent')
        <x-footer-component />
    </main>

    <script src="./cdn-assets/js/jquery-3.6.4.min.js?v={{ config("app.scripts_version") }}"></script>
    <script src="./cdn-assets/owlcarousel/owl.carousel.min.js?v={{ config("app.scripts_version") }}"></script>
    <script src="./js/scroll-magic.js?v={{ config("app.scripts_version") }}"></script>
    <script src="./js/hamburger.js?v={{ config("app.scripts_version") }}"></script>
</body>
</html>
