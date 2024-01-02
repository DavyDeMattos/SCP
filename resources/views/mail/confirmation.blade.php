@extends('base')
@section('title', "Agence SCP")
@section('description', "Agence SCP. Détective privé au service des collectivités")
{{-- TODO Changer description et Keywords --}}
@section('keywords', "Détective privé, prestation collectivité")

<?php //header("refresh:5; url=")?>

@section('content')
    <p>{{$message}}</p>
@endsection

<script>
    setTimeout(function () {
        window.location.href= <?=json_encode(env('APP_URL'))?>; // the redirect goes here
    },5000);
</script>
