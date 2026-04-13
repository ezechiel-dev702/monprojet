<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plateforme de conformité</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="container">
        <div class="boitegauche">
            <img src="assets/remove2.png" alt="image">
        </div>

        <div class="boitedroite">
            <video autoplay muted loop disablePictureInPicture id="background-video">
                <source src="assets/WhatsApp Video ocean bleu.mp4" type="video/mp4">
            </video>
            <h1>NGOLO ENTREPRISE</h1>
            <form action="traitement.php" method="POST">
                <input type="email" name="email" class="modification" placeholder="email" required>
                <input type="password" name="motdepasse" class="modification" placeholder="password" required>
                <button type="submit">connexion</button>
                <div class="liens-secondaires">
                    <a href="motdepasseoublie.php" class="lien-mdp">Mot de passe oublié ?</a>


                    <div class="zone-inscription">
                        <p>Nouveau sur la plateforme ?</p>
                        <a href="inscription_entreprise.php" class="btn-inscription">INSCRIPTION</a>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>