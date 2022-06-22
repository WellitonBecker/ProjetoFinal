<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>@yield('title')</title>

        
    </head>
    <body class="antialiased">
        <head>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="img/logo.jpg" alt="HDC Events">
                    </a>
                    <ul class="navbar-nav">
                        @if(isset($_SESSION['menus']))
                            @foreach($_SESSION['menus'] as $menu)
                                <li class="nav-item">
                                    <a href="../{{ $menu->caminho }}" class="nav-link">{{ $menu->nome }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </nav>
        </head>
        <div class="container">
            @yield('conteudo')
        </div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
            <div class="div-footer">
                <p>Projeto Final Laravel &copy; 2022</p>
                <p>Welliton Luiz Becker</p>
            </div>
        </footer>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
