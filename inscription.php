<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | Gabon Flux - Conformité</title>
    <link rel="stylesheet" href="css/inscription.css">
    <!-- Importation des polices pour éviter les bugs d'affichage -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<div class="main-wrapper">
    <div class="form-panel">
        <div class="glass-form">
            <div class="brand-header">
                <h1>NGOLO ENTREPRISE</h1>
                <p class="slogan">Tissez la solidité de votre entreprise</p>
            </div>
            
            <h2>CRÉER UN COMPTE</h2>
            
            <form action="traitement.php" method="POST">
                
                <p class="section-title">Connexion</p>
                <div class="input-group">
                    <input type="email" name="adresse_email" placeholder="Email Professionnel" required>
                    <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
                </div>

                <p class="section-title">Identité de l'Entreprise</p>
                <div class="full-width-input">
                    <input type="text" name="nom_entreprise" placeholder="Nom de l'Entreprise (Raison Sociale)" required>
                </div>
                
                <div class="input-group">
                    <input type="text" name="secteur_d_activite" placeholder="Secteur d'activité" required>
                    <input type="text" name="forme_juridique" placeholder="Forme Juridique (SARL, SA...)" required>
                </div>

                <div class="date-group">
                    <label for="date_creation">Date de Création</label>
                    <input type="date" name="date_creation_entreprise" id="date_creation" required>
                </div>

                <p class="section-title">Sceaux de Conformité</p>
                <div class="input-group">
                    <input type="text" name="nif" placeholder="N° NIF" required>
                    <input type="text" name="rccm" placeholder="N° RCCM" required>
                </div>

                <p class="section-title">Contact & Localisation</p>
                <div class="input-group">
                    <input type="tel" name="telephone" placeholder="Téléphone" required>
                    <input type="text" name="adresse" placeholder="Adresse du Siège" required>
                </div>

                <button type="submit" class="btn-submit">SCELLER L'INSCRIPTION</button>
                <p class="footer-link">Déjà inscrit ? <a href="index.php">Se connecter</a></p>
            </form>
        </div>
    </div>
</div>

</body>
</html>