<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rappel de rendez-vous</title>
</head>
<body>
    <h1>Rappel de rendez-vous</h1>
    <p>Bonjour,</p>
    <p>Ceci est un rappel pour votre rendez-vous avec les détails suivants :</p>
    <ul>
        <li>Date et heure du rendez-vous : {{ $appointment->appointment_datetime }}</li>
        <li>Nom de l'animal : {{ $appointment->pet_name }}</li>
        <li>Spécie de l'animal : {{ $appointment->pet_species }}</li>
        <li>Race de l'animal : {{ $appointment->pet_breed }}</li>
        <li>Raison du rendez-vous : {{ $appointment->reason }}</li>
    </ul>
    <p>Merci et à bientôt !</p>
</body>
</html>
