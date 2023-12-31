<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body style="background-image: url({{asset('images/pic08.jpg')}});background-size: cover;">

@inject('provider', 'App\Http\Controllers\ProviderController')
@php
    $providerNames = $provider->indexOfNames();
    $routeName = request()->route()->getName();
@endphp

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-tertiary" data-bs-theme="dark" style="background-image: url({{asset('images/bg02.jpg')}});background-size: cover;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route("accueil")}}">
                <img src="{{asset('images/logo_noir.png')}}" alt="Logo de l'agence" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li >
                    <div class="btn-group">
                        <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'prestation')]) href="{{route("prestation.index")}}" role="button" aria-expanded="false">
                            Prestations
                        </a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            @foreach ($providerNames as $provider)
                                <li><a class="dropdown-item" href="{{ route('prestation.show', ['slug' => $provider->genre])}}">{{$provider->name}}</a></li>
                            @endforeach
                        </ul>
                      </div>
                  </li>
                <li class="nav-item">
                    <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'deontologie')]) href="{{route("deontologie")}}">Déontologie</a>
                </li>
                <li class="nav-item">
                    <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'actualites')]) href="{{route("actualites")}}">Actualités</a>
                </li>
                <li class="nav-item">
                    <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'contact')]) href="{{route("contact")}}">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container text-center">
        @yield('content')
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="widget_wrapper py-3" style="background-image: url({{asset('images/bg04.jpg')}});background-size: cover; color:white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="widget widegt_about">
                            <div class="widget_title">
                                <img src="assets/images/logo_1.png" class="img-fluid" alt="">
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate repellendus id ea expedita! Error impedit nesciunt non ea omnis ducimus?</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f">Ici FB</i></a></li>
                                <li><a href="#"><i class="fab fa-twitter">Ici Twitter</i></a></li>
                                <li><a href="#"><i class="fab fa-instagram">Ici Instagram</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_link">
                            <div class="widget_title">
                                <h4>Liens</h4>
                            </div>
                            <ul>
                                <li><a href="#">A propos de nous</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Actualités</a></li>
                                <li><a href="#">Nous contacter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_contact">
                            <div class="widget_title">
                                <h4>Contactez nous</h4>
                            </div>
                            <div class="contact_info">
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                        <img src="#" alt="Logo d'un téléphone">
                                    </div>
                                    <div class="info">
                                        <p><a href="tel:+33606060606">06-06-06-06-06</a></p>
                                        <p><a href="tel:+33707070707">07-07-07-07-07</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <img src="#" alt="Logo d'un mail">
                                    <div class="info">
                                        <p><a href="mailto:adresse@mail.com">adresse@mail.com</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>Agence SCP<br>34 rue du mystère<br>37200 <span>Etrangeville.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_area bg-secondary bg-gradient"style="--bs-bg-opacity: .5;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2023 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
