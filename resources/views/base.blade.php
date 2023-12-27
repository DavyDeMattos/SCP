<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content=@yield('description')>
    <meta name="keywords" content=@yield('keywords')>
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
                    <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'reglementation')]) href="{{route("reglementation")}}">Réglementation</a>
                </li>
                <li class="nav-item">
                    <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'actualites')]) href="{{route("actualites")}}">Actualités</a>
                </li>
                <li class="nav-item">
                    {{-- TODO --}}
                    <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'actualites')]) href="{{route("actualites")}}">Zones d'interventions</a>
                </li>
                <li class="nav-item">
                    <a class="btn nav-link" href="#form-contact">Contact</a>
                    {{-- <a @class(['btn nav-link', 'active' => str_starts_with($routeName, 'mail/contact')]) href="{{route("mail.contact")}}">Contact</a> --}}
                </li>
            </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container text-center  mt-5 pt-5">
        @yield('content')
    </div>
    <footer class="bg-body-tertiary text-center text-lg-start" id="footer">
        <div class="widget_wrapper py-3" style="background-image: url({{asset('images/bg04.jpg')}});background-size: cover; color:white">
            <div class="container">
                <form action="{{route("mail.submit")}}" method="POST" id="form-contact">
                    @csrf
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4 col-md-6 col-12">
                            <label for="clientType" class="form-label">Vous êtes</label>
                            <select name="clientType" id="clientType" class="form-select" aria-label="Client Type">
                                <option value="particulier">Particulier</option>
                                <option value="entreprise">Entreprise</option>
                                <option value="collectivité">Collectivité</option>
                            </select>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="inputName" class="form-label"></label>
                                    <input type="text" name="lastName" class="form-control" id="inputName" placeholder="Votre nom de famille" aria-label="Last name">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="inputFirstname" class="form-label"></label>
                                    <input type="text" name="firstName" class="form-control" id="inputFirstname" placeholder="Votre prénom"  aria-label="First name">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="mail" class="form-control" id="inputMail" placeholder="Votre adresse mail" aria-label="E-Mail">
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phoneNumber" class="form-control" id="inputPhone" placeholder="Votre numéro de téléphone"  aria-label="Phone number">
                            </div>
                            <label for="timeContact" class="form-label">Quand voulez-vous être contacté ?</label>
                            <div>
                                <div class="form-check  form-check-inline">
                                    <input name="timeContactMorning" class="form-check-input" type="checkbox" value="matin" id="morningCheck">
                                    <label class="form-check-label" for="morningCheck">
                                        Matin
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input name="timeContactAfternoon" class="form-check-input" type="checkbox" value="apres-midi" id="afternoonCheck">
                                    <label class="form-check-label" for="afternoonCheck">
                                        Après-midi
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input name="timeContactEvening" class="form-check-input" type="checkbox" value="soir" id="eveningCheck">
                                    <label class="form-check-label" for="eveningCheck">
                                        Soir
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input name="timeContactNight" class="form-check-input" type="checkbox" value="nuit" id="nightCheck">
                                    <label class="form-check-label" for="nightCheck">
                                        Nuit
                                    </label>
                                </div>
                            </div>
                            <label for="howContact" class="form-label">Mode de contact privilégié</label>
                            <div>
                                <div class="form-check  form-check-inline">
                                    <input name="howContactTelephone" class="form-check-input" type="checkbox" value="telephone" id="phoneCheck">
                                    <label class="form-check-label" for="phoneCheck">
                                        Téléphone
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input name="howContactMail" class="form-check-input" type="checkbox" value="mail" id="mailCheck">
                                    <label class="form-check-label" for="mailCheck">
                                        Mail
                                    </label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input name="howContactFace" class="form-check-input" type="checkbox" value="face-a-face" id="faceCheck">
                                    <label class="form-check-label" for="faceCheck">
                                        Face-à-face
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap align-items-center justify-content-around col-lg-8 col-md-6 col-12">
                            <div class="col-lg-7 col-md-12 col-12 ">
                                <div class="form-group mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="15" placeholder="Laissez nous un message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="col-lg-4 col-12 btn bg-primary-subtle btn-lg btn-block">Submit</button>
                        </div>
                    </div>
                </form>
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
        <div class="copyright_area bg-secondary bg-gradient"style="--bs-bg-opacity: .5;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2023 All rights reserved.</p>
                        </div>
                        <div>
                            <a href="#">Mentions légales</a>
                            <a href="#">CGU</a>
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
