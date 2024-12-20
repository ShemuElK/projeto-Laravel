<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>@yield('title')</title>
        <!--Fonte do google-->

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!---css Bootstrap-->
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!--css da aplicação-->

        <link rel =  "stylesheet" href="/css/styles.css">
        <script src ="/js/scripts.js"></script>

    </head>
    <body> 
        <header>
            <nav class = "navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                   <a href="/" class="navbar-brand">
                    <img src="/img/events.png" alt = "HDC EVENTS">
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
                            <a href="/" class="nav-link">cadastrar</a>
                        </li>
                     </ul>
                </div>
            </nav>
        </header>
        @yield('content')
     <footer>
        <p>HDC EVENTS &copy; 2020</p>
     </footer>
    </body>
</html>
