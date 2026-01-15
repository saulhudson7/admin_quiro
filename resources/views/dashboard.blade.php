<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SHINE</title>

  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical"
    data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- TOP BAR -->
    <div class="app-topstrip bg-dark py-3 px-3 w-100 d-lg-flex justify-content-between align-items-center">
      <a href="#">
        <img src="{{ asset('images/logos/logo-wrappixel.svg') }}" width="150" alt="Logo">
      </a>
    </div>

    <!-- SIDEBAR -->
    <aside class="left-sidebar">
      <div>
        <div class="brand-logo d-flex justify-content-between align-items-center">
          <a href="#" class="logo-img">
            <img src="{{ asset('assets/images/logoquiropractic.jpeg') }}" alt="Logo" width="160">
          </a>
          <div class="close-btn d-xl-none sidebartoggler" id="sidebarCollapse">
            <i class="ti ti-x"></i>
          </div>
        </div>

        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
          <ul id="sidebarnav">

            <li class="nav-small-cap">
              <span class="hide-menu">Home</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="#">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link has-arrow" href="javascript:void(0)">
                <i class="ti ti-layout-grid"></i>
                <span class="hide-menu">Front Pages</span>
              </a>
              <ul class="collapse first-level">
                <li class="sidebar-item"><a class="sidebar-link" href="#">Homepage</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="#">About Us</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="#">Blog</a></li>
                <li class="sidebar-item"><a class="sidebar-link" href="#">Contact</a></li>
              </ul>
            </li>

            <li class="nav-small-cap">
              <span class="hide-menu">Auth</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-login.html">
                <i class="ti ti-login"></i>
                <span class="hide-menu">Login</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="./authentication-register.html">
                <i class="ti ti-user-plus"></i>
                <span class="hide-menu">Register</span>
              </a>
            </li>

          </ul>
        </nav>
      </div>
    </aside>

    <!-- MAIN -->
    <div class="body-wrapper">
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" data-bs-toggle="dropdown" href="#">
                <img src="{{ asset('assets/images/profile/user-1.jpg') }}"
                  width="35" height="35" class="rounded-circle" alt="User">
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="#">Perfil</a>
                <a class="dropdown-item" href="#">Cuenta</a>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="dropdown-item text-danger" type="submit">Cerrar sesión</button>
                </form>
              </div>
            </li>
          </ul>
        </nav>
      </header>

      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <h1>Hola, {{ Auth::user()->name }}</h1>
        </div>
      </div>
    </div>

  </div>

  <!-- SCRIPTS -->
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
</body>
</html>
