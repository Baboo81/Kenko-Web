{{-- resources/views/email/contact.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message - Kenko-Web</title>
</head>
<body>
    <h2>Nouveau message depuis le formulaire de contact</h2>

    <p><strong>Nom :</strong> {{ $lastname }}</p>
    <p><strong>Prénom :</strong> {{ $firstname }}</p>
    <p><strong>Email :</strong> {{ $email }}</p>
    <p><strong>Message :</strong></p>
    <p>{!! nl2br(e($user_message)) !!}</p>
</body>
</html>
