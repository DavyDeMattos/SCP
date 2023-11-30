@extends('base')
@section('title', "Show")

@section('content')
<div class="container border border-secondary-subtle border-2">
    <h1>Ici un modèle pour les différentes prestations</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quia amet sed neque cum, aspernatur tempore nihil facilis velit quos delectus et libero corporis similique optio a. Voluptates quia consequuntur possimus aspernatur ab, deserunt a quam laborum totam tenetur nemo perspiciatis mollitia in inventore quod dignissimos omnis quo ratione suscipit hic odio voluptatem sed ipsum? Porro optio voluptatibus eveniet temporibus beatae voluptates iusto modi esse, repudiandae inventore enim nemo labore doloremque voluptate obcaecati impedit consectetur nulla rem iure possimus quas quos magnam laudantium? Neque, obcaecati debitis distinctio suscipit, corporis quibusdam unde blanditiis cupiditate harum placeat facere repellendus ea recusandae quidem.</p>
</div>
{{-- @dd($prestations); --}}
{{-- @dump($prestations[0]->provider_genre);
@dump($prestations[0]->id); --}}
<div class="d-flex justify-content-around flex-wrap mt-2">
    @foreach ($prestations as $prestation)
    <div class="card mb-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$prestation->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$prestation->sub_title}}</h6>
            {{-- <p class="card-text">{{$prestation->content}}</p> --}}
            <a href="{{route('prestation.prestation-show', ['genre' => $prestation->provider_genre, 'id' =>$prestation->id, 'slug' => $prestation->slug ])}}" class="card-link">Voir plus</a>
        </div>
    </div>
    @endforeach
    {{-- <div class="card mb-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Enquêtes de moralité</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Voir plus</a>
        </div>
    </div>
    <div class="card mb-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Litiges immobiliers</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Voir plus</a>
        </div>
    </div>
    <div class="card mb-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Contre-enquête pénale</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Voir plus</a>
        </div>
    </div>
    <div class="card mb-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Disparition de personne</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Voir plus</a>
        </div>
    </div>
    <div class="card mb-2" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Cyber-enquête / E-réputation</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Voir plus</a>
        </div>
    </div> --}}
</div>
@endsection
