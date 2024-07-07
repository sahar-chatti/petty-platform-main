<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification de changement de statut de rendez-vous</title>
</head>
<body>
    <p>Bonjour,</p>
    
    <p>Le statut de votre rendez-vous a été modifié. Voici les détails :</p>
    
    <ul>
        <li><strong>Date du rendez-vous:</strong> {{ $rendezVous->date }}</li>
        <li><strong>Heure du rendez-vous:</strong> {{ $rendezVous->heure }}</li>
        <li><strong>Statut du rendez-vous:</strong> {{ $rendezVous->status }}</li>
    </ul>

    <p>Merci,</p>
</body>
</html>
