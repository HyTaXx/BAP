<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/ydu5xlm.css">
</head>
<body id="body-contact">
    <header>
        <img id="logo" src="img/logo.png" alt="">
        <div id="header_text">
            <ul>
                <a href="#services">Services</a>
                <a href="#propos">A propos</a>
            </ul>
            <div id="contactez">
                <a style="color:black" href="index.html">Retour à l'accueil</a>
            </div>
        </div>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>
    <section class="stock-form-info">
        <div class="stock-infos">
            <div class="haut-infos">
                <h2 id="titre-infos">Discutons de votre projet !</h2>
                <p id="texte-infos">Vous avez une question d'ordre patrimonial, fiscal ou financier et vous souhaitez obtenir des informations ?</p>
                <h2 id="titre-infos2">Contactez-Moi pour obtenir la meilleure solution !</h2>
            </div>
            <div class="logo-enbas">
                <img src="img/Logo_2.png" alt="logo" width="50%">
            </div>
            <div class="bas-infos">
                <div class="top-gap">
                    <div class="flex-row  font-swag">
                        <img src="img/phone.svg" alt="">
                        <p>06.64.30.35.89</p>
                    </div>
                    <div class="flex-row  font-swag">
                        <img src="img/envelope.svg" alt="">
                        <p>tm38.conseil.finance@gmail.com</p>
                    </div>
                    <div class="flex-row" style="margin-top: 10px;">
                        <iconify-icon icon="bi:linkedin" style="color: white;" width="32"></iconify-icon>
                        <iconify-icon icon="bi:instagram" style="color: white;" width="32"></iconify-icon>
                        <iconify-icon icon="bi:facebook" style="color: white;" width="32"></iconify-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="stock-form">
            <div class="form-flex">
                <h2 id="titre-form">Contactez-Moi</h2>
                <form action="">
                    <select name="interet" id="">
                        <option value="">Je suis intéressé par</option>
                        <option value="">a</option>
                        <option value="">b</option>
                        <option value="">c</option>
                    </select>
    
                    <input type="text" placeholder="Prénom">
                    <input type="text" placeholder="Nom">
                    <input type="text" placeholder="Téléphone">
                    <input type="email" placeholder="Adresse Mail">
    
                </form>
                <button class="button-form">Envoyer</button>
            </div>
        </div>
    </section>
    <script src="burger.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>