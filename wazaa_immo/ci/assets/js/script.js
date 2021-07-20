
    
$('document').ready(function(){
                // page contact validation formulaire

document.getElementById("Inscription").addEventListener("submit", function(e) {

    e.preventDefault();
    alert("Message envoyé");

    var erreur = new Array();
    var nom = document.getElementById("nom");
    var prénom = document.getElementById("prénom");
    var postal = document.getElementById("postal");
    var email = document.getElementById("email");
    var message = document.getElementById("message");
    
    
    
                          //*******************  nom  *****************************
    var error_nom = document.getElementById("error_nom");
    var filtre_nom = new RegExp("^[a-zA-Z]+$");
    
    console.log("nom :" + nom.value);
    var resultat = filtre_nom.test( nom.value);
    console.log(resultat);
    
    if (nom.value==""){
    
        error_nom.innerHTML="Veuillez renseigner votre nom !!!!" .fontcolor("red"); 
        erreur.push("error_nom");
       
    }
    else{
        if (resultat ==false) {
            error_nom.innerHTML="format incorrect" .fontcolor("red"); 
            erreur.push("error_nom");
           
        }
        else{
    
        error_nom.innerHTML="";
        }
    }
    
               //******************************************* prénom*****************************************
    
    var error_prénom = document.getElementById("error_prénom");
    var filtre_prénom = new RegExp("^[a-zA-Z]+$");
    
    console.log("prénom :" + prénom.value);
    var resultat = filtre_prénom.test(prénom.value);
    console.log(resultat);
    
    if (prénom.value==""){
    
        error_prénom.innerHTML="Veuillez renseigner votre prénom !!!!" .fontcolor("red"); 
       
    }
    else{
        if (resultat ==false) {
            error_prénom.innerHTML="format incorrect" .fontcolor("red"); 
           
        }
        else{
    
        error_prénom.innerHTML="";
        }
    }
              //********************* adresse *********************************
    
             //****************************** code postal ******************************
            
    var error_postal = document.getElementById("error_postal");
    var filtre_postal = new RegExp("^([0-9]{5})$");
    
    console.log("postal :" + postal.value);
    var resultat = filtre_postal.test(postal.value);
    console.log(resultat);
    
    
    if (postal.value==""){
    
        error_postal.innerHTML="Veuillez renseigner votre code postal !!!!" .fontcolor("red"); 
       
    }
    else{
        if (resultat ==false) {
            error_postal.innerHTML="Veuillez saisir 5 chiffres" .fontcolor("red"); 
           
        }
        else{
    
        error_postal.innerHTML="";
        }
    }

                        //********************* ville *********************************
                        //********************* télephone *********************************
    
                        //********************* email ********************************
    
    var error_email = document.getElementById("error_email");
    var filtre_email = new RegExp("^[a-zA-Z0-9.-_]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,4}$");
    
    console.log("email :" + email.value);
    var resultat = filtre_email.test(email.value);
    console.log(resultat);
    
    
    if (email.value==""){
    
        error_email.innerHTML="Veuillez renseigner votre email !!!!" .fontcolor("red"); 
       
    }
    else{
        if (resultat ==false) {
            error_email.innerHTML="Email incorrect" .fontcolor("red"); 
           
        }
        else{
    
        error_email.innerHTML="";
        }
    }
    
                 //************************* message suplémentaire ******************************
    
    var error_message = document.getElementById("error_message");
    var filtre_message = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$");
    
    console.log("message :" + message.value);
    var resultat = filtre_message.test(message.value);
    console.log(resultat);
    
    if (message.value==""){
    
        error_message.innerHTML="Veuillez poser votre question svp !!!!" .fontcolor("red"); 
       
        
    } 
    
    
    //*******************************confirmation d'envoie*******************
    
    var error_formulaire = document.getElementById("error_formulaire");
    console.log("formulaire :" + formulaire.checked);
    console.log(resultat);
    
    if (formulaire.checked==""){
    
        error_formulaire.innerHTML="Veuillez poser votre question svp !!!!" .fontcolor("red"); 
       
        
    }
    
    if(erreur.length == 0){
        e.submit()
    }
    });


                                    // page inscription

// document.getElementById("inscription").addEventListener("submit", function(e) {
//     e.preventDefault();
//     alert('formulaire envoyé !');
// });

});

// profil de connexion*

// function Login(){
// var done=0;
// var email=document.login.username.value;
// var password=document.login.password.value;

// if (email=="user1" && password=="user1") {
// window.location="user1.html";
// }

// if (email=="user2" && password=="user2") {
// window.location="user2.html";
// }

// if (email=="user3" && password=="user3") {
// window.location="user3.html";
// }

// if (email=="user4" && password=="user4") {
// window.location="user4.html";
// }

// if (email=="vous" && password=="vous") { 
// // Vous pouvez réservez une page pour vous même(options, etc.)
// window.location="vous.html";
// }
// }

