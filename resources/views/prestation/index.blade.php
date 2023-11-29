@extends('base')
@section('title', "Prestation")

@section('content')
{{-- @dump($providers); --}}
    <div class="container border border-secondary-subtle border-2">
        <h1>Ici la présentation des prestations</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quia amet sed neque cum, aspernatur tempore nihil facilis velit quos delectus et libero corporis similique optio a. Voluptates quia consequuntur possimus aspernatur ab, deserunt a quam laborum totam tenetur nemo perspiciatis mollitia in inventore quod dignissimos omnis quo ratione suscipit hic odio voluptatem sed ipsum? Porro optio voluptatibus eveniet temporibus beatae voluptates iusto modi esse, repudiandae inventore enim nemo labore doloremque voluptate obcaecati impedit consectetur nulla rem iure possimus quas quos magnam laudantium? Neque, obcaecati debitis distinctio suscipit, corporis quibusdam unde blanditiis cupiditate harum placeat facere repellendus ea recusandae quidem.</p>
    </div>
    <div class="d-flex justify-content-around flex-wrap mt-2">
        @foreach ($providers as $provider)
            <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">{{ $provider->name }}</h5>
                {{-- <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6> --}}
                <p class="card-text">{{ $provider->sub_content }}</p>
                {{-- <a href="{{route('prestation.show, ['genre' => {{$provider->genre}}, 'id' => {{$provider->id]}}')}}" class="card-link">Voilà ce qu'on peux faire pour vous...</a> --}}
                {{-- <a href="{{route('prestation.show')}}" class="card-link">Voilà ce qu'on peux faire pour vous...</a> --}}
                </div>
            </div>
        @endforeach
        {{-- <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Particulier</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Vous êtes un particulier ?</p>
              <a href="#" class="card-link">Voilà ce qu'on peux faire pour vous...</a>
            </div>
        </div>
        <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Entreprise</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Vous êtes une entreprise ?</p>
              <a href="#" class="card-link">Voir plus</a>
            </div>
        </div>
        <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Collectivité</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Vous êtes une collectivité ?</p>
              <a href="#" class="card-link">Voir les prestations</a>
            </div>
        </div> --}}
        {{-- <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Domaine n°4</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Domaine n°5</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Domaine n°6</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Domaine n°7</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
        </div>
        <div class="card mb-2" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Domaine n°8</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
        </div> --}}
    </div>
@endsection
