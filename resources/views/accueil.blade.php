@extends('base')
@section('title', "Agence SCP")

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
                    <img src="https://i0.wp.com/assotgb.org/wp-content/uploads/2018/09/particulier_icon_circular.png?w=512&ssl=1" class="card-img-top" alt="Photo représentant les particuliers">
                    <div class="card-body">
                      <h5 class="card-title">Particulier</h5>
                      <p class="card-text">Si vous êtes un particulier, vous êtes concerné par cette section.</p>
                      <a href="{{route("prestation.show", [ "slug" => "particulier" ])}}" class="btn btn-primary">Aller voir les prestations</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card mx-auto">
                    <img src="https://www.lafrancequiose.fr/wp-content/uploads/2021/12/presentation-d-entreprise-1024x571.jpg" class="card-img-top" alt="Photo représentant les entreprises">
                    <div class="card-body">
                      <h5 class="card-title">Entreprise</h5>
                      <p class="card-text">Si vous êtes une entreprise, vous êtes concerné par cette section.</p>
                      <a href="{{route("prestation.show", [ "slug" => "entreprise" ])}}" class="btn btn-primary">Aller voir les entreprises</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-3">
                <div class="card mx-auto">
                    <img src="https://www.point-comm.fr/images/point_comm/metier-consultant-collectivite-locale.jpg" class="card-img-top" alt="Photo représentant les collectivités">
                    <div class="card-body">
                      <h5 class="card-title">Collectivités</h5>
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
                {{-- <div class="carousel-item active">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card" style="width: 18rem;">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card  " style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°4</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Comment les canards dominent le monde</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iure itaque alias dolorem non temporibus maxime, ut facilis sapiente dolore.</p>
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°5</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Est-ce vrai que se brosser les dents augmente la taille des lobes d'oreilles ?</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iure itaque alias dolorem non temporibus maxime, ut facilis sapiente dolore.</p>
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°6</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Le MEURTRE ! </h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iure itaque alias dolorem non temporibus maxime, ut facilis sapiente dolore.</p>
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="carousel-item active">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card ">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°8</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°9</h5>
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
