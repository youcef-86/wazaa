
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
                                         <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <title>wazaa_immo</title>
        </head>
    <body class="mx-5">
        <header>
                  <!-- menu de navigation -->
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

                    <!-- image logo -->
                    <img class="logo_wazaa"  height="60" width="70" id="logo" src="IMG/wazaa_logo.png" alt="logo">

                  <!-- bouton hamburger mobile -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="accueil.html">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="annonces.html">Annonces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apropos.html">A propos</a>
                        </li>
                    </ul>
                
                <!-- <input type="button" value="Connexion"> -->
                    <a class="btn btn-outline-secondary" href="connexion.html"><strong>Connexion</strong></a>
                </div>
            </nav>
        </header>
                                  <!-- image promo -->
            <img class="mw-auto" height="120" width="100%" src="IMG/wazaa-.jpg" alt="promo" title="promotion">
            <br><br>
        <div id="bloc">
            <h2 class="text-center">CONNEXION</h2>
            <hr><br>
            <h2 class="text-center">IDENTIFICATION</h2><br>
       
            <form name="login">
            
                <p class="text-center"><small>Si vous êtes déjè inscrit(e), identifiez-vous pour accéder à votre espace personnel :</small></p>
            
                <div class="container">
                            <!--email-->
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="login ou Email" required>
                    </div>
                            <!--password-->
                    <div class="form-group">
                        <label for="password"></label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" required>
                    </div>
                    <!-- mot de passe oublié -->
                    <a href="reinitialiser.html" class="link">Mot de passe oublié ?</a>
             
                       <!-- bouton de connexion -->
                    <div>
                        <center><button class="btn btn-outline-success" href="" type="submit">Connexion</button></center>
                    </div><br>
            
                    <div>
                        <center><a class="btn btn-outline-success" href="inscription.html">Créer un compte</a></center>
                    </div>  
                   
                </div>
            </form>
        </div> <br> 
        
        <footer>
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                </button>   
    
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="">Mention légales</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Horaires</a>
                        </li>
                        <li>
                            <a class="nav-link" href="">Plan du site</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </footer> 
                                       <!-- Optional JavaScript -->
                                      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>