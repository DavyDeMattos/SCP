@extends('base')
@section('title', "Nous contacter")

@section('content')
    <h1>Ici la page de contact</h1>
    {{-- Menu défilant sur particulier / entreprise / collectivité --}}
    <form action="" method="POST">
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
                    {{-- <label for="inputMail" class="form-label"></label> --}}
                    <input type="email" name="mail" class="form-control" id="inputMail" placeholder="Votre adresse mail" aria-label="E-Mail">
                </div>
                <div class="mb-3">
                    {{-- <label for="inputPhone" class="form-label"></label> --}}
                    <input type="tel" name="phoneNumber" class="form-control" id="inputPhone" placeholder="Votre numéro de téléphone"  aria-label="Phone number">
                </div>
                <label for="timeContact" class="form-label">Quand voulez-vous être contacté ?</label>
                {{-- <select name="timeContact" id="timeContact" class="form-select mb-2" multiple aria-label="When contact">
                    <option value="matin">Matin</option>
                    <option value="apres-midi">Après-midi</option>
                    <option value="soir">Soir</option>
                    <option value="nuit">Nuit</option>
                </select> --}}
                <div>
                    <div class="form-check  form-check-inline">
                        <input name="timeContact-morning" class="form-check-input" type="checkbox" value="matin" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Matin
                        </label>
                    </div>
                    <div class="form-check  form-check-inline">
                        <input name="timeContact-afternoon" class="form-check-input" type="checkbox" value="apres-midi" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Après-midi
                        </label>
                    </div>
                    <div class="form-check  form-check-inline">
                        <input name="timeContact-evening" class="form-check-input" type="checkbox" value="soir" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                            Soir
                        </label>
                    </div>
                    <div class="form-check  form-check-inline">
                        <input name="timeContact-night" class="form-check-input" type="checkbox" value="nuit" id="defaultCheck4">
                        <label class="form-check-label" for="defaultCheck4">
                            Nuit
                        </label>
                    </div>
                </div>
                <label for="howContact" class="form-label">Mode de contact privilégié</label>
                <div>
                    <div class="form-check  form-check-inline">
                        <input name="howContact-telephone" class="form-check-input" type="checkbox" value="telephone" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Téléphone
                        </label>
                    </div>
                    <div class="form-check  form-check-inline">
                        <input name="howContact-mail" class="form-check-input" type="checkbox" value="mail" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Mail
                        </label>
                    </div>
                    <div class="form-check  form-check-inline">
                        <input name="howContact-Face" class="form-check-input" type="checkbox" value="face-a-face" id="defaultCheck3">
                        <label class="form-check-label" for="defaultCheck3">
                            Face-à-face
                        </label>
                    </div>
                </div>
                {{-- <select name="howContact" id="howContact" class="form-select" multiple aria-label="How Contact">
                    <option value="telephone">Téléphone</option>
                    <option value="mail">Mail</option>
                    <option value="face-a-face">Face-à-face</option>
                </select> --}}
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
