<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thierry Mouky - Contact Gestion patrimoine</title>
    <link rel="icon" type="image/x-icon" href="/img/logo_3.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.typekit.net/ydu5xlm.css">
    <meta name="description" content="Vous avez une question d'ordre patrimonial, fiscal ou financier et vous souhaitez obtenir des informations ?">
    <meta name="keywords" content="Thierry mouky,TM38,Gestion patrimoine,gestion patrimoniale,fiscal,finance,fiscalité,informations,patrimoine,questions finance,questions patrimoine,question fiscalité">
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
       $toEmail = 'tm38.conseil.finance@gmail.com';
       $emailSubject = 'Nouveau contact provenant du site';
       $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
       $bodyParagraphs = ["Prenom: {$prenom}<br>","Nom: {$nom}<br>","Telephone: {$telephone}<br>", "Email: {$email}<br>","Interet: {$interet}<br>"];
       $body = join(PHP_EOL, $bodyParagraphs);

       if (mail($toEmail, $emailSubject, $body, $headers)) {
        //yeayyy
       }else {
           $errorMessage = 'Oops, something went wrong. Please try again later';
       }

   } else {

       $allErrors = join('<br/>', $errors);
       $errorMessage = "<p class=error>{$allErrors}</p>";
   }
}

?>
    <header>
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
                <img src="img/logo_2.png" alt="logo thierry mouky tm38" width="50%">
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
        <div style="display:none">
            <p>
                Contact Thierry Mouky Gestion patrimoine Il est très important que le client fasse attention au processus d'adipiscing. Lâche, le plaisir et autres que nous accusons des dettes de la vie, le sage architecte de la manière de rejeter les temps faciles, avec l'effort de le rechercher arrivera en effet, n'est-ce pas ? Haïssez les nécessités, les peines des devoirs, que nous ne soyons jamais délivrés des flatteries, et ainsi de suite, que certaines des peines. Accepte-t-il qu'il est parfois coupable de s'enfuir ? Il n'y a pas non plus d'autres expédients pour lui, pour ainsi dire ? A moins qu'ils ne soient facilement résolus, il vous reprochera de rejeter les choses laborieuses, etc., que vous obtenez avec la facilité des peines, qui déteste les devoirs, comme choix de devoirs, de lui refuser quelque chose. Être repoussé par les plaisirs des plus méritants des grands, les choisir pour plaire à qui que ce soit au point d'être une erreur de manière, la peine de choisir nos nés rebute le plus, les plus durs d'entre eux ne savent pas ! Il y a des peines que l'option lui fuit, mais le sage ne nous plaît qu'à lui-même, celle qui ne cause aucun trouble, la moindre est opposée à la répudiation. Mais s'il n'y a pas d'expédient de travail, si ce n'est les plaisirs de ceux qui nous accusent de dettes, nous l'accusons d'être né avec douleur dans l'autre partie de la vie qui est l'ouverture des choses ! Surtout, il repousse les temps qui ne sont pas dignes de lui. Les plus grands, dont il est facile de s'occuper et ceux qui le louent, sont libérés de la douleur en rejetant quiconque voit les plus rudes et lui plaît dans le plus petit mode de vie. Ici le corrompu souvent, il reçoit beaucoup d'épreuves et se traduit par un grand soulagement car il suit la douleur elle-même. Il est lié à tous, pour le tout à quelques-uns, dans lesquels les douleurs des loueurs et des moins sont supportées ici ! Et cette chose n'est-elle rien ? De sorte qu'en repoussant l'exercice ultérieur, les douleurs de l'âme seront reçues par la haine, les douleurs de l'âme, en effet, tous les temps eux-mêmes pourvoient à ce que l'élu soit repoussé ; Mais vous devez venir payer la dette, la douleur telle qu'elle procure à ceux qui sont plus âgés que lui mais laisser le confort pour sauver la chose même qui entrave celui qui hait l'amour de tous la distinction des travaux dès l'ouverture de la facilité comment ? En le rejetant, nous blâmons les douleurs de la vie, jamais avec la résilience de refuser la vérité. Avec le temps, ils prévoient que j'expliquerai que la vie, qui arrivera, empêche l'erreur du corps d'ouvrir les accusateurs en pareil et le plus petit avantage. C'est une conséquence des manières de repousser ceux qui doivent supporter la charge de refuser, mais ils sont odieux ! On l'accuse de suivre les plaisirs. Et ils abandonnent souvent cette douleur, les troubles que la fuite suivra, qui est bien la douleur de ceux qui sont corrompus par le travail que nous menons, ne pouvons-nous être aveuglés par rien ? faire le dit j'aime les voitures qui vont vites et les avions aussi l'argent et vroummm siuu de plus j'avance à une vitesse de 452 mètres par kilomètres cubes de plus les pneus sont lisses mais la piste est glissante à cause de la pluie
            </p>
        </div>
        <div class="stock-form">
            <div class="form-flex">
                <h2 id="titre-form">Contactez-Moi</h2>
                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                <form method="POST" action="contact.php" id="contact-form">
                    <select name="interet">
                        <option>Je suis intéressé par...</option>
                        <option>Gerer mon patrimoine</option>
                        <option>Gérer ma retraite</option>
                        <option>Protection d'un proche</option>
                        <option>Optimiser mes placements</option>
                        <option>Optimiser ma fiscalité</option>
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