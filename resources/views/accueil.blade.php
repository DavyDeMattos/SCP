@extends('base')
@section('title', "Agence SCP | Accueil")
{{-- TODO Changer description et Keywords --}}
@section('description', "Agence SCP. Détective privé au service de ses clients")
@section('keywords', "Détective privé, prestation particulier, prestation entreprise, prestation collectivité")

@section('content')
    <h1>Ici l'accueil</h1>
    <div class="container">
        <h2>Présentation de l'agence SCP</h2>
        <p>L’Agence S.C.P est spécialisée dans le renseignement, la recherche et la collecte de preuves. Diplomé de l’Ecole Supérieure des Agents de Recherches Privées (l’ESARP) et agréé par le Conseil National des Activités Privées de Sécurité (CNAPS, Établissement publique sous tutelle du Ministère de l’Intérieur), les Agents de Recherches Privées « Détectives privés » sommes aujourd’hui très <a href="{{route("reglementation")}}">réglementés</a> dans l’exercice de notre activité. </p>
        <p>Implantés dans le Loir-et-Cher (41), nous intervenons 24h/24 et 7j/7 dans l’ensemble de la région Centre afin de défendre les intérêts de nos clients devant une juridiction ; qu’ils soient des particuliers, des professionnels ou des collectivités ; ou uniquement pour lever tout doute sur une situation devenue insupportable.</p>
    </div>
    {{-- TODO breakpoint sur les prestations --}}
    <div class="container text-center bg-dark bg-gradient p-4 rounded-1">
        <h2 class="text-light">Prestations</h2>
        <div class="row justify-content-md-center ">
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card mx-auto">
                    <img src="https://i0.wp.com/assotgb.org/wp-content/uploads/2018/09/particulier_icon_circular.png?w=512&ssl=1" class="card-img-top m-auto card-img-client h-50" alt="Photo représentant les particuliers" style="max-width: fit-content; max-height: 250px;">
                    <div class="card-body h-50">
                      <h3 class="card-title">Particulier</h3>
                      <p class="card-text">Si vous êtes un particulier, vous êtes concerné par cette section.</p>
                      <a href="{{route("prestation.show", [ "slug" => "particulier" ])}}" class="btn btn-primary">Aller voir les prestations</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card mx-auto">
                    <img src="https://www.lafrancequiose.fr/wp-content/uploads/2021/12/presentation-d-entreprise-1024x571.jpg" class="card-img-top m-auto card-img-client h-50" alt="Photo représentant les entreprises" style="max-width: fit-content; max-height: 250px;">
                    <div class="card-body h-50">
                      <h3 class="card-title">Entreprise</h3>
                      <p class="card-text">Si vous êtes une entreprise, vous êtes concerné par cette section.</p>
                      <a href="{{route("prestation.show", [ "slug" => "entreprise" ])}}" class="btn btn-primary">Aller voir les entreprises</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card mx-auto">
                    <img src="https://www.point-comm.fr/images/point_comm/metier-consultant-collectivite-locale.jpg" class="card-img-top m-auto card-img-client h-50" alt="Photo représentant les collectivités" style="max-width: fit-content; max-height: 250px;">
                    <div class="card-body h-50">
                      <h3 class="card-title">Collectivités</h3>
                      <p class="card-text">Si vous êtes une collectivité, vous êtes concerné par cette section.</p>
                      <a href="{{route("prestation.show", [ "slug" => "collectivite" ])}}" class="btn btn-primary">Aller voir les collectivités</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-secondary my-3 py-3 rounded-1" style="background-image: url({{asset('images/pic02.jpg')}});background-size: cover;">
        <h2 class="mb-3">Actualités</h2>
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card ">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Voici l'article n°7</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Voici l'article n°8</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Voici l'article n°9</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="width: 5%;">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="width: 5%;">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
@endsection

