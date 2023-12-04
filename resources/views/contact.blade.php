@extends('base')
@section('title', "Nous contacter")

@section('content')
    <h1>Ici la page de contact</h1>
    {{-- Menu défilant sur particulier / entreprise / collectivité --}}
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
