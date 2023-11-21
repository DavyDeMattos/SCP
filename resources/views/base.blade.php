<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header><img src="../assets/logo_blanc.jpg" alt="Logo de l'agence">
    <nav>
        <ul>
            <li><a href="{{route("accueil")}}">Accueil</a></li>
            <li><a href="{{route("prestation")}}">
                Prestations
                    <ul>
                        <li><a href="{{route("particulier")}}">Particulier</a></li>
                        <li><a href="{{route("entreprise")}}">Entreprise</a></li>
                        <li><a href="{{route("collectivite")}}">Collectivités</a></li>
                    </ul>
            </a>
            </li>
            <li><a href="#">Déontologie</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav></header>
    <div class="container">
        @yield('content')
    </div>
    <footer>Ici vous trouverez le footer</footer>
</body>
</html>
