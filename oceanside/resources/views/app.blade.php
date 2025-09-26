<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <title>Oceanside Rentals</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Oceanside Rentals </a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('rentals.list') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Login</a>
              <li class="nav-item active">
                
        <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
      </li>
    </ul>
  </div>
</nav>
</header>

</head>


<body class="m-5">

</body>


@yield('content')