<!DOCTYPE html>
<html>
<head>
    <title>Prise de contact venant du site</title>
</head>
<body>
    <h1>Contact Details:</h1>
    <ul>
        <li><p><strong>Type de client:</strong> {{ $clientType }}</p></li>
        <li><p><strong>Nom:</strong> {{ $lastName }}</p></li>
        <li><p><strong>Prénom:</strong> {{ $firstName }}</p></li>
        <li><p><strong>Adresse mail:</strong> <a href="mailto:{{ $mailClient }}">{{ $mailClient }}</a></p></li>
        <li><p><strong>Numéro de téléphone:</strong> <a href="tel:{{ $phoneNumber }}">{{ $phoneNumber }}</a></p></li>
        <li><p><strong>Je préfère être contacté :</strong>
            <ul>
            @foreach ($timeContact as $time)
                <li>{{$time}}</li>
            @endforeach
            </ul>
            {{$timeContact}}
        </li>
        <li><p><strong>Je préfère être contacté par :</strong>
            <ul>
                @foreach ($howContact as $how)
                    <li>{{$how}}</li>
                @endforeach
                </ul>
                {{$howContact}}
        </li>
    </ul>


    <!-- Autres champs à remplir -->

    <h2>Message:</h2>
    <p>{{ $content }}</p>
</body>
</html>
