@extends('base')
@section('title', "Agence SCP")

@section('content')
    <h1>Ici l'accueil</h1>
    <div class="container">
        <h2>Présentation de l'agence SCP</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos accusamus corrupti tenetur distinctio dolore, suscipit officiis accusantium fugiat tempora quae omnis aliquid odit consequatur est, iste voluptates at minima! Accusantium atque minus nemo optio dolor mollitia quam officiis, aliquam architecto sapiente nobis fuga eius accusamus exercitationem reiciendis dicta aliquid, veritatis delectus asperiores, sit perspiciatis unde maiores? Harum beatae quo, qui repudiandae placeat corporis nam tempore quas praesentium. Exercitationem illum illo eaque, praesentium veritatis in veniam id aspernatur magnam quos quis temporibus repudiandae aut ea quia, non labore vero officiis corrupti. Animi blanditiis exercitationem culpa et neque, dolor molestias voluptatem magnam!</p>
    </div>
    {{-- TODO breakpoint sur les prestations --}}
    <div class="container bg-dark bg-gradient p-4 rounded-1">
        <h2 class="text-light">Prestations</h2>
        <div class="row">
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="https://i0.wp.com/assotgb.org/wp-content/uploads/2018/09/particulier_icon_circular.png?w=512&ssl=1" class="card-img-top" alt="Photo représentant les particuliers">
                    <div class="card-body">
                      <h5 class="card-title">Particulier</h5>
                      <p class="card-text">Si vous êtes un particulier, vous êtes concerné par cette section.</p>
                      <a href="#" class="btn btn-primary">Aller voir les prestations</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="https://www.lafrancequiose.fr/wp-content/uploads/2021/12/presentation-d-entreprise-1024x571.jpg" class="card-img-top py-auto" alt="Photo représentant les entreprises">
                    <div class="card-body">
                      <h5 class="card-title">Entreprise</h5>
                      <p class="card-text">Si vous êtes une entreprise, vous êtes concerné par cette section.</p>
                      <a href="#" class="btn btn-primary">Aller voir les prestations</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="card mx-auto" style="width: 18rem;">
                    <img src="https://www.point-comm.fr/images/point_comm/metier-consultant-collectivite-locale.jpg" class="card-img-top" alt="Photo représentant les collectivités">
                    <div class="card-body">
                      <h5 class="card-title">Collectivités</h5>
                      <p class="card-text">Si vous êtes une collectivité, vous êtes concerné par cette section.</p>
                      <a href="#" class="btn btn-primary">Aller voir les prestations</a>
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
                        <div class="card  " style="width: 18rem;">
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
                            {{-- <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°4</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Comment les canards dominent le monde</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iure itaque alias dolorem non temporibus maxime, ut facilis sapiente dolore.</p>
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            {{-- <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°5</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Est-ce vrai que se brosser les dents augmente la taille des lobes d'oreilles ?</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iure itaque alias dolorem non temporibus maxime, ut facilis sapiente dolore.</p>
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            {{-- <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°6</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">Le MEURTRE ! </h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo iure itaque alias dolorem non temporibus maxime, ut facilis sapiente dolore.</p>
                                <a href="#" class="card-link">Card link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card-wrapper container-sm d-flex  justify-content-around">
                        <div class="card  " style="width: 18rem;">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°7</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Voici l'article n°8</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;">
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
