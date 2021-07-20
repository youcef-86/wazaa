
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
                            <a class="nav-link" href="accueil.html">Accueil</a>
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
            <img class="mw-auto" height="120" width="100%" src="IMG/wazaa-.jpg" alt="promo" title="promotion"><br><br>
    
        <div id="titre1">
            <h2 class="text-center">Nous Contacter</h2><hr>
        </div>
       
        <form id="Inscription">

            <div class="bloc1">
                <h4>Vos coordonnées :</h4><br>
                <div class="form-group">
                                                    <!-- nom -->
                    <label for="nom">Votre nom* :</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Veuillez saisir votre nom" required><br>
                </div>
                                                  <!-- prenom -->
                <div class="form-group">
                    <label for="prénom">Votre prénom* :</label>
                    <input type="text" class="form-control" name="prénom" id="prénom" placeholder="Veuillez saisir votre prénom" required><br>
                </div>
                                                  <!--adresse-->
                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Veuillez saisir votre adresse"><br>
                </div>
                                                 <!--code postal-->
                <div class="form-group">
                    <label for="code postal">Code postal* :</label>
                    <input type="text" class="form-control" name="code postal" id="postal" placeholder="Veuillez saisir votre code postal" required><br>
                </div>
                                                  <!--ville-->
                <div class="form-group">
                    <label for="ville">Ville :</label>
                    <input type="text" class="form-control" name="ville" id="ville" placeholder="Veuillez saisir votre ville"><br>
                </div>
                                              <!-- telephone -->
                <div class="form-group">
                    <label for="tel">Télephone :</label>
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="Veuillez saisir votre numéro de télephone"><br>
                </div>
                                              <!--email-->
                <div class="form-group">            
                    <label for="email">Email* :</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Veuillez saisir votre adresse Email" required><br>
                    <span id="error_email"></span>
                </div>  
            </div>
                
                                              <!--sujet-->
            <div class="bloc2">
                <h4>Votre demande</h4>
                <div class="form-group">
                    <label for="sujet">Sujet :</label>
                    <select class="form-control form-control-sm" id="sujet" name="sujet">
                        <option selected>Veuillez séléctionner un sujet</option>
                        <option value="location" >Location</option>
                        <option value="vente" >Vente</option>
                        <option value="achat" >Achat</option>
                        <option value="autres" >Autres</option>
                    </select><br>
                </div>
                                          <!--votre question-->
                <div class="form-group">
                    <label for="message">Message suplémentaire :</label><br>
                    <textarea class="form-control" id="message" rows="2" name="message"></textarea>
                    <span id="error_question"></span>
                </div>
            
                                      <!--confirmation de l'envoie-->
                <div class="form-group">
                    <div class="custom-control">
                        <input type="checkbox" class="custom-control-input" id="formulaire" name="formulaire" required>
                        <label class="custom-control-label" for="formulaire">J'accepte le traitement informatique de ce formulaire</label><br>
                        <span id="error_formulaire"></span>
                    </div>
                </div>
                    <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-outline-success" name="envoyer" value="Envoyer">
                    <input type="reset" class="btn btn-outline-success" name="annuler" value="Annuler">
                </div>
            </div>
        </form><br>
       
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