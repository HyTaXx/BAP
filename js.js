document.getElementById("s1").addEventListener("click",function() {test("s1","b1","bg1.png")})
document.getElementById("s2").addEventListener("click",function() {test("s2","b2","bg2.png")})
document.getElementById("s3").addEventListener("click",function() {test("s3","b3","bg3.png")})
document.getElementById("s4").addEventListener("click",function() {test("s4","b4","bg4.png")})


function test(x,y,z){

    
    //stock div reset
    document.getElementById("s1").style.backgroundColor=""
    document.getElementById("s2").style.backgroundColor=""
    document.getElementById("s3").style.backgroundColor=""
    document.getElementById("s4").style.backgroundColor=""
    document.getElementById("b1").style.boxShadow="-10px 0px 0px 0px #9AA38F";
    document.getElementById("b2").style.boxShadow="-10px 0px 0px 0px #9AA38F";
    document.getElementById("b3").style.boxShadow="-10px 0px 0px 0px #9AA38F";
    document.getElementById("b4").style.boxShadow="-10px 0px 0px 0px #9AA38F";
    document.getElementById("b1").style.color="white"
    document.getElementById("b2").style.color="white"
    document.getElementById("b3").style.color="white"
    document.getElementById("b4").style.color="white"
    document.getElementById("b1").style.backgroundColor="#022135"
    document.getElementById("b2").style.backgroundColor="#022135"
    document.getElementById("b3").style.backgroundColor="#022135"
    document.getElementById("b4").style.backgroundColor="#022135"

    

    //changement couleur stock
    document.getElementById(x).style.background="#b6b6a9"

    //changement couleur bouton
    document.getElementById(y).style.background="#b6b6a9"
    document.getElementById(y).style.color="black"
    document.getElementById(y).style.boxShadow="0px 0px 0px 0px transparent";

    //affichage des div
    document.getElementById("test").style.display="block"

    if (z=="bg1.png") {
        document.getElementById("test").style.backgroundImage="url(img/bg1.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Préparer ma retraite"
        document.getElementById("texte-savoir-plus").innerHTML="Avant tout, il faut connaitre ses droits et devoirs dans un contexte d’évolution … Aujourd’hui, 69 % des Français pensent que leur pension est ou sera insuffisante pour vivre correctement.Pour bien préparer sa retraite, il faut anticiper cette étape de la vie et envisager des solutions n’est pas chose évidente. En effet, la plupart des gens constituent une épargne de précaution mais ne se projettent pas aussi loin dans l’avenir. Pour savoir combien de temps, il vous reste avant de pouvoir prendre votre retraite et mettre en place une stratégie pour épargner. Pour savoir combien épargner en vue de la retraite, il faut ensuite bien connaître ses dépenses actuelles et envisager les éventuelles dépenses futures, notamment celles relatives à la santé ou à la perte d’autonomie. Quelles dépenses pourront être supprimées au moment de votre retraite ? Quelles sont celles qui viendront s’ajouter ? Une chose est sure. Il faut anticiper ces évolutions budgétaires."
    } else if(z=="bg2.png"){
        document.getElementById("test").style.backgroundImage="url(img/bg2.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Protection d'un proche"
        document.getElementById("texte-savoir-plus").innerHTML="En tant que contribuable, vous êtes soumis à de nombreuses impôts (sur le revenu, sur la fortune immobilière, prélèvements sociaux, droits de succession… )Pourtant plusieurs dispositifs permettent aux particuliers de réduire leur imposition, comme celle relative aux niches fiscales.L’optimisation fiscale est totalement légale. Elle est même encouragée par certains textes de loi !"

    } else if(z=="bg3.png"){
        document.getElementById("test").style.backgroundImage="url(img/bg3.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Transmission Patriomonial"
        document.getElementById("texte-savoir-plus").innerHTML="Face aux accidents de la vie, personne n’est à l’abri. En effet, nous sommes constamment entourés d’imprévus susceptibles de nous atteindre n’importe quand et de nous rajouter des charges supplémentaires à payer.Imaginons notre conjoint décède (mari, conjoint), /maladie/ ou alors arrêt de carrière, il manquera un revenu pour le ménage. Or, les charges (en lien par exemple avec le loyer, la nourriture, l’éducation des enfants, prêts bancaire…) seront et resteront des charges que nous devrons assumer même si nous nous retrouvons seuls avec moitié moins de revenu. Ce qui conduit à une situation financière risquée sans la garantie d’assurances complémentaires"


    } else {
        document.getElementById("test").style.backgroundImage="url(img/bg4.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Economie d'impôts"
        document.getElementById("texte-savoir-plus").innerHTML="Les placements financiers constituent des sources de revenus potentiellement très intéressantes. Mais souvent déçus par leurs rendements et leurs volatilités, de nombreux investisseurs les considèrent comme non rentables. Pourtant, il suffit de prendre un certain nombre d’éléments en compte pour les optimiser : les différents types de supports, la stratégie d’investissements, les risques des marchés, de taux, de changes, sectoriels, géographiques, technologiques, …"

    }


}