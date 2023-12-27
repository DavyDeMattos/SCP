@extends('base')
{{-- @section('title', $prestation->title) --}}
@section('title', "Agence SCP | " . $prestation->title)
{{-- TODO Changer description et Keywords --}}
@section('description', "Agence SCP. Détective privé au service de ses clients")
@section('keywords', "Détective privé, prestation particulier, prestation entreprise, prestation collectivité")

@section('content')
<?=$prestation->content ?>
@endsection
