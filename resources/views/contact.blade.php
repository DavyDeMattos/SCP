@extends('base')
@section('title', "Nous contacter")

@section('content')
    <h1>Ici la page de contact</h1>
    {{-- Menu défilant sur particulier / entreprise / collectivité --}}
    <select class="form-select" aria-label="Client Type">
        <option selected>Vous êtes</option>
        <option value="1">Particulier</option>
        <option value="2">Entreprise</option>
        <option value="3">Collectivité</option>
    </select>
    <div class="mb-3">
        <label for="inputName" class="form-label"></label>
        <input type="text" class="form-control" id="inputName" placeholder="Votre nom de famille" aria-label="Last name">
    </div>
    <div class="mb-3">
        <label for="inputFirstname" class="form-label"></label>
        <input type="text" class="form-control" id="inputFirstname" placeholder="Votre prénom"  aria-label="First name">
    </div>
    <div class="mb-3">
        <label for="inputMail" class="form-label">Adresse Mail</label>
        <input type="email" class="form-control" id="inputMail" placeholder="nom@example.com" aria-label="E-Mail">
    </div>
    <div class="mb-3">
        <label for="inputPhone" class="form-label">Numéro de téléphone</label>
        <input type="tel" class="form-control" id="inputPhone" placeholder="Votre numéro de téléphone"  aria-label="Phone number">
    </div>
    {{-- Menu défilant sur matin / soir / nuit --}}
    <select class="form-select" multiple aria-label="When contact">
        <option selected>Quand voulez-vous être contacté</option>
        <option value="1">Matin</option>
        <option value="2">Après-midi</option>
        <option value="3">Soir</option>
        <option value="4">Nuit</option>
    </select>
    {{-- Menu défilant sur téléphone / mail / face-à-face --}}
    <select class="form-select" multiple aria-label="How Contact">
        <option selected>Mode de contact privilégié</option>
        <option value="1">Téléphone</option>
        <option value="2">Mail</option>
        <option value="3">Face-à-face</option>
    </select>
    {{-- Zone d'intervention --}}
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Laissez nous un message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
@endsection
