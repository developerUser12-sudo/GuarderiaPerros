<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Story+Script&display=swap" rel="stylesheet">

</head>

<body class="font-sans antialiased ">
  <nav class="navbar navbar-expand-lg verde">
    <div class="container-xxl ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand text-white" href="{{ config('app.url') }}"><img src="" alt="Logo"></a>
      <div class="collapse navbar-collapse d-lg-flex justify-content-between" id="navbarNavDropdown">
        <ul class="navbar-nav gap-3">
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href="{{ route('peludito') }}">Tu peludito</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Galería de fotos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('reservar') }}">Reserva</a>
          </li>
        </ul>
        <div>
          @auth
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path
                      d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                  </svg>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Ajustes</a></li>
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="btn btn-link  align-baseline dropdown-item">
                        Cerrar sesión
                      </button>
                    </form>
                  </li>
                </ul>
              </li>

            </ul>
          @endauth
          @guest
            <a href="{{ route('login') }}" class="mt-2 text-light text-decoration-none">Iniciar sesión</a>
          @endguest
        </div>
      </div>
    </div>
  </nav>
  <main class="d-flex gap-5 flex-column mt-5">
    @yield('content')
  </main>
  <footer class="verde" style="margin-top:50px">
    <div class="row container-fluid gap-5">
      <div class="col-xl-6 col-12 p-3">
        <div class="d-flex flex-row justify-content-between w-75 text-light mb-4">
          <p>Teléfono y WhatsApp:</p>
          <p>Email:</p>
        </div>
        <div>
          <iframe
            src="https://www.google.com/maps/d/u/0/embed?mid=1h9HuMLwYISQ3hSxjW-fYXwI3aXDiypY&ehbc=2E312F&noprof=1"
            width="100%" height="380"></iframe>
        </div>

      </div>
      <div class="col-xl-5 col-12 d-flex flex-column gap-5  ms-lg-auto   justify-content-center">
        <div class="d-flex justify-content-evenly flex-row">
          <div class="d-flex  flex-column gap-5 ">
            <a href="" class="text-decoration-none text-light">Aviso legal</a>
            <a href="" class="text-decoration-none text-light">Política de privacidad</a>
            <a href="" class="text-decoration-none text-light">Política de cookies</a>
          </div>
          <div class="d-flex  flex-column gap-5 ">

            <a href="" class="text-decoration-none text-light">Condiciones de uso</a>
            <a href="" class="text-decoration-none text-light">Términos y condiciones</a>
            <a href="" class="text-decoration-none text-light">Aviso propiedad intelectual</a>
          </div>
        </div>

        <div>
          <p class="text-light text-center">Copyright. Todos los derechos reservados</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>