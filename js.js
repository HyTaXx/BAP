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
    } else if(z=="bg2.png"){
        document.getElementById("test").style.backgroundImage="url(img/bg2.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Protection d'un proche"

    } else if(z=="bg3.png"){
        document.getElementById("test").style.backgroundImage="url(img/bg3.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Transmission Patriomonial"

    } else {
        document.getElementById("test").style.backgroundImage="url(img/bg4.png)"
        document.getElementById("titre-savoir-plus").innerHTML="Economie d'impôts"
    }

}