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
        <li><p><strong>Adresse mail:</strong> {{ $mailClient }}</p></li>
        <li><p><strong>Numéro de téléphone:</strong> {{ $phoneNumber }}</p></li>
        <li><p><strong>Je préfère être contacté :</strong> {{$timeContact}}</li>
        <li><p><strong>Je préfère être contacté par :</strong> {{$howContact}}</li>
    </ul>


    <!-- Autres champs à remplir -->

    <h3>Message:</h3>
    <p>{{ $content }}</p>
</body>
</html>
