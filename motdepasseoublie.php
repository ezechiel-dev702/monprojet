<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération de mot de passe</title>
    <link rel="stylesheet" href="css/motdepasseoublie.css">
</head>
<body>

    <div id="container">
        <h1 class="glow-text">Récupération mot de passe</h1>
        <p class="sub-text">Entrez votre adresse email, nous vous enverrons un lien pour réinitialiser votre mot de passe.</p>
        
        <form action="traitement.php" method="POST" class="recovery-form">
            <div class="input-group">
                <label for="email">Adresse email</label>
                <input type="email" name="emailexiste" id="email" placeholder="saisir votre adresse email" required>
            </div>
            <button type="submit" class="btn-send">Envoyer le lien</button>
        </form>

        <a href="formulaire.php" class="back-link">Retour à la connexion</a>
    </div>

</body>
</html>