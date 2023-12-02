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
<body style="background-color:#DFDFE1;">

@inject('provider', 'App\Http\Controllers\ProviderController')
@php
    $providerNames = $provider->indexOfNames();
    $routeName = request()->route()->getName();
@endphp

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-tertiary fixed-top " data-bs-theme="dark" style="background-image: url({{asset('images/bg02.jpg')}});background-size: cover;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route("accueil")}}">
                <img src="{{asset('images/logo_noir.png')}}" alt="Logo de l'agence" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li >
                    <div class="btn-group">
                        <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'prestation')]) href="{{route("prestation.index")}}" role="button" aria-expanded="false">
                            Prestations
                        </a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split bg-body-tertiary" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="container text-center  mt-5 pt-5">
        @yield('content')
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start">
        <div class="widget_wrapper py-3" style="background-image: url({{asset('images/bg04.jpg')}});background-size: cover; color:white">
            <div class="container">
                <form action="" method="POST">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <select class="form-select" aria-label="Client Type">
                                <option selected>Vous êtes</option>
                                <option value="1">Particulier</option>
                                <option value="2">Entreprise</option>
                                <option value="3">Collectivité</option>
                            </select>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="inputName" class="form-label"></label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Votre nom de famille" aria-label="Last name">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="inputFirstname" class="form-label"></label>
                                    <input type="text" class="form-control" id="inputFirstname" placeholder="Votre prénom"  aria-label="First name">
                                </div>
                            </div>
                            <div class="mb-3">
                                {{-- <label for="inputMail" class="form-label"></label> --}}
                                <input type="email" class="form-control" id="inputMail" placeholder="Votre adresse mail" aria-label="E-Mail">
                            </div>
                            <div class="mb-3">
                                {{-- <label for="inputPhone" class="form-label"></label> --}}
                                <input type="tel" class="form-control" id="inputPhone" placeholder="Votre numéro de téléphone"  aria-label="Phone number">
                            </div>
                            <select class="form-select mb-2" multiple aria-label="When contact">
                                <option selected>Quand voulez-vous être contacté ?</option>
                                <option value="1">Matin</option>
                                <option value="2">Après-midi</option>
                                <option value="3">Soir</option>
                                <option value="4">Nuit</option>
                            </select>
                            <select class="form-select" multiple aria-label="How Contact">
                                <option selected>Mode de contact privilégié</option>
                                <option value="1">Téléphone</option>
                                <option value="2">Mail</option>
                                <option value="3">Face-à-face</option>
                            </select>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-around col-lg-8 col-md-6 col-12">
                            <div class="col-lg-7 col-md-12 col-12 ">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="Laissez nous un message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="col-lg-4 col-12 btn btn-outline-light btn-lg btn-block">Submit</button>
                        </div>
                        {{-- <div class="col-lg-4 col-md-6 col-sm-12">
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
                        </div> --}}
                    </div>
                </form>
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
