<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-hide-small w3-center" style="width: 7rem;">
  <!-- Avatar image in top left corner -->
  <img src="{{ asset('raf-logo.png') }}" class="p-2" style="width:100%;height:5rem">
  <a href="{{ route('index') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-large"></i>
    <p>Index</p>
  </a>
  <a href="{{ route('katalog') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-large"></i>
    <p>Katalog</p>
  </a>
  <a href="{{ route('kontakt') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-large"></i>
    <p>Kontakt</p>
  </a>

  @if(!Auth::check())
    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-large"></i>
      <p>Login</p>
    </a>

    <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-envelope w3-large"></i>
      <p>Register</p>
    </a>
  @else
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="w3-bar-item w3-button w3-padding-large w3-hover-black d-flex flex-column">
        <i class="fa fa-envelope w3-large"></i>
        Logout
      </button>
    </form>
  @endif

  @if(Auth::check() && (Auth::user()->role === 'admin' || Auth::user()->role === 'editor'))
    <a href="{{ route('admin.index') }}" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
      <i class="fa fa-home w3-large"></i>
      <p>Admin home</p>
    </a>
  @endif
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#index" class="w3-bar-item w3-button" style="width:25% !important">Index</a>
    <a href="#katalog" class="w3-bar-item w3-button" style="width:25% !important">Katalog</a>
    <a href="#kontakt" class="w3-bar-item w3-button" style="width:25% !important">Kontakt</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo">Proizvodnja borovnica</h1>
  </header>

  <div class="container">
    @yield('content')
  </div>

<!-- END PAGE CONTENT -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>
</html>
