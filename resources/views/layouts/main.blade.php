<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- CSS BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
          <a href="/" class="navbar-brand">
            <img src="/img/hdcevents_logo.svg" alt="HDC Events">
          </a>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="/" class="nav-link">Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/events/create" class="nav-link">Criar Eventos</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Entrar</a>
            </li>
            <li class="nav-item">
              <a href="/" class="nav-link">Cadastrar</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  @yield('content')
  <footer>
    <p>HDC Events &copy; 2023</p>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
