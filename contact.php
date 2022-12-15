<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/ydu5xlm.css">
    <meta name="description" content="Vous avez une question d'ordre patrimonial, fiscal ou financier et vous souhaitez obtenir des informations ?">
    <meta name="keywords" content="Thierry mouky,TM38,Gestion patrimoine,gestion patrimoniale,fiscal,finance,fiscalité,informations,patrimoine,questions finance,questions patrimoine,question fiscalité">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="body-contact">
<?php

$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $prenom = $_POST['prenom'];
   $nom = $_POST['nom'];
   $telephone = $_POST['telephone'];
   $email = $_POST['email'];
   $interet = $_POST['interet'];

   if (empty($prenom)) {
       $errors[] = 'Le champ prenom est vide';
   }
   if (empty($nom)) {
    $errors[] = 'Le champ nom est vide';
    }

   if (empty($email)) {
       $errors[] = 'Le champ email est vide';
   } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $errors[] = "L'email n'est pas valide";
   }

   if (empty($telephone)) {
    $errors[] = 'Le champ telephone est vide';
}
if (empty($interet)) {
    $errors[] = 'Le champ interet est vide';
}

   if (empty($errors)) {
       $toEmail = 'clement.souplet78@gmail.com';
       $emailSubject = 'Nouveau contact provenant du site';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Prenom: {$prenom}<br>","Nom: {$nom}<br>","Telephone: {$telephone}<br>", "Email: {$email}<br>","Interet: {$interet}<br>"];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) 

           header('Location: index.php');
        else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p class=error>{$allErrors}</p>";
   }
}

?>
    <header>
        <title>Thierry Mouky - Gestion de patrimoine</title>
        <img id="logo" src="img/logo.png" alt="logo thierry mouky tm38">
        <div id="header_text">
            <ul>
                <a href="index.php#services">Services</a>
                <a href="index.php#propos">A propos</a>
            </ul>
            <div id="contactez">
                <a style="color:black" href="index.php">Retour à l'accueil</a>
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
                <img src="img/Logo_2.png" alt="logo thierry mouky tm38" width="50%">
            </div>
            <div class="bas-infos">
                <div class="top-gap">
                    <div class="flex-row  font-swag">
                        <img src="img/phone.svg" alt="logo phone">
                        <p>06.64.30.35.89</p>
                    </div>
                    <div class="flex-row  font-swag">
                        <img src="img/envelope.svg" alt="logo letter">
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
                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                <form method="POST" action="contact.php" id="contact-form">
                    <select name="interet">
                        <option>Je suis intéressé par...</option>
                        <option>Je suis intéressé par a</option>
                        <option>Je suis intéressé par b</option>
                        <option>Je suis intéressé par c</option>
                    </select>
    
                    <input name="prenom" type="text" placeholder="Prénom">
                    <input name="nom" type="text" placeholder="Nom">
                    <input name="telephone" type="text" placeholder="Téléphone">
                    <input name="email" type="email" placeholder="Adresse Mail">
                    <button class="button-form"><input  class="button-form" type="submit" value="Envoyer" /></button>
                </form>
            </div>
        </div>
    </section>
    <script src="burger.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="validation.js"></script>
</body>
</html>