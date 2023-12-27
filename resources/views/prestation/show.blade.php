@extends('base')
@section('title', "Show")
@section('title', "Agence SCP | " . $prestations[0]->provider_name)
{{-- TODO Changer description et Keywords --}}
@section('description', "Agence SCP. Détective privé au service de ses clients")
@section('keywords', "Détective privé, prestation particulier, prestation entreprise, prestation collectivité")

@section('content')
<div class="container">
    <h1>{{$prestations[0]->provider_name}}</h1>
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
            <a href="{{route('prestation.prestation-show', ['genre' => $prestation->provider_genre, 'id' =>$prestation->id, 'slug' => $prestation->slug ])}}" class="card-link">Voir plus</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
