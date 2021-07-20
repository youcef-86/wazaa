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
    <header id="showcase">
        <!-- menu de navigation -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <!-- image logo -->
            <img class="logo_wazaa" height="60" width="70" id="logo" src="IMG/wazaa_logo.png" alt="logo">

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
            <div class="logo">
                    <img src="IMG/021.png" class="img-fluid w-100" alt="arriere plan">
                    <p class="titre1">wazaa immo</p>
                    <p class="titre2"><i>N°1 de la confiance depuis 10 ans avec beaucoup d'annonces immobilières</i></p>
                                    
                                            <!-- recherche -->
                <div class="encart">
               
                    <div class="form_search">
                        <ul  class="nav nav-tabs mt15px" id="global" role="tablist">
                       
                            <li role="presentation" class="bold col-xs-3 text-center active" id="vide1">
                                <a class="btn btn-outline-secondary" href="" aria-controls="home" role="tab" data-toggle="tab">LOCATION</a>
                            </li><br>
                            <li role="presentation" class="bold col-xs-3 text-center active" id="vide2">
                                <a class="btn btn-outline-secondary" href="" aria-controls="home" role="tab" data-toggle="tab">VENTE</a>
                            </li><br>
                            <li role="presentation" class="bold col-xs-3 text-center active" id="vide3">
                                <a class="btn btn-outline-secondary" href="" aria-controls="home" role="tab" data-toggle="tab">ACHAT</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                        
                            <div class="container-fluid pt15px">
                                
                                <div class="col-xs-12 form-group mt15px">
                                      
                                    <div class="col-md-5 col-xs-12 form-group mb0px">
                                        <div class="input-group1">
                                            <input class="form-control input-lg ng-pristine ng-untouched ng-valid ng-empty" type="text" placeholder="selectionner une ville">
                                        </div><br>
                                        <div class="input-group2">
                                            <input class="form-control input-lg ng-pristine ng-untouched ng-valid ng-empty" type="text" placeholder="Surface min m2.">
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-12 form-group mb0px">
                                        <div class="input-group3">
                                            <input class="form-control input-lg ng-pristine ng-untouched ng-valid ng-empty" type="text" placeholder="Prix max €.">
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-xs-12 mb15px text-center">
                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
                                    </div>
                                </div> 

                            </div>
                        
                        </div>
                    </div>
            

                </div>
            </div>

            <br>

            <!-- Quelques annonces -->
            <div class="annonces">
                <h3>Dérnieres annonces immobilières</h3>

                <div class="col-lg-4">
                    <div class="card border-bg-perso mb-4 shadow-sm" id="photo1">
                        <div class="card-header text-center">
                            <h2 class="h5 card-title">
                                <a href="annonces/details/" class="color-perso"></a>
                            </h2><!-- Titre -->
                            <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                            <a href="annonces/details/">
                          
                                                        <!-- Photo 1 -->
                                <div id="carouselControls" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" >
                                            <img src="IMG/3-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                        </div>
                                        <div class="carousel-item"  >
                                            <img src="IMG/3-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                        </div>
                                        <div class="carousel-item"  >
                                            <img src="IMG/3-3.jpg" class="d-block w-100 carouselheight"   alt="">
                                        </div> 
        
                                    </div>
                                        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                </div>
                            </a>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"></li><!-- Localisation -->
                                <li class="list-group-item">m²</li><!-- Surface Totale -->
                                <li class="list-group-item">€</li><!-- Prix -->
                            </ul>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <a href="" class="btn btn-sm btn-bg-perso"><i class="fa fa-eye"></i> Détails</a>
                            <small class="text-muted"></small><!-- Date d'ajout -->
                        </div>
                    </div>
                                                <!-- photo 2 -->
            <div class="card border-bg-perso mb-4 shadow-sm" id="photo2">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img2 -->
                        <div id="carouselControls2" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/2-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/2-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>

                            </div>
                                <a class="carousel-control-prev" href="#carouselControls2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li><!-- Localisation -->
                        <li class="list-group-item">m²</li><!-- Surface Totale -->
                        <li class="list-group-item">€</li><!-- Prix -->
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="" class="btn btn-sm btn-bg-perso"><i class="fa fa-eye"></i> Détails</a>
                    <small class="text-muted"></small><!-- Date d'ajout -->
                </div>
            </div>
                                         <!-- photo 3 -->
            <div class="card border-bg-perso mb-4 shadow-sm" id="photo3">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">

                                         <!-- img3 -->
                        <div id="carouselControls3" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/6-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/6-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>   
                                <div class="carousel-item"  >
                                    <img src="IMG/6-3.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>             
                            </div>
                            <a class="carousel-control-prev" href="#carouselControls3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselControls3" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li><!-- Localisation -->
                            <li class="list-group-item">m²</li><!-- Surface Totale -->
                            <li class="list-group-item">€</li><!-- Prix -->
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="" class="btn btn-sm btn-bg-perso"><i class="fa fa-eye"></i> Détails</a>
                    <small class="text-muted"></small><!-- Date d'ajout -->
                </div>
            </div>
                                            <!-- photo4 -->
            <div class="card border-bg-perso mb-4 shadow-sm" id="photo4">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 4 -->
                        <div id="carouselControls4" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/10-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/10-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/10-3.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div> 
                                <div class="carousel-item"  >
                                    <img src="IMG/10-4.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div> 
                                <div class="carousel-item"  >
                                    <img src="IMG/10-5.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div> 

                            </div>
                                <a class="carousel-control-prev" href="#carouselControls4" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls4" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li><!-- Localisation -->
                        <li class="list-group-item">m²</li><!-- Surface Totale -->
                        <li class="list-group-item">€</li><!-- Prix -->
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="" class="btn btn-sm btn-bg-perso"><i class="fa fa-eye"></i> Détails</a>
                    <small class="text-muted"></small><!-- Date d'ajout -->
                </div>
            </div>
                                            <!-- photo5 -->
            <div class="card border-bg-perso mb-4 shadow-sm" id="photo5">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 5 -->
                        <div id="carouselControls5" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/8-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/8-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/8-3.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div> 
                            </div>
                                <a class="carousel-control-prev" href="#carouselControls5" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls5" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li><!-- Localisation -->
                        <li class="list-group-item">m²</li><!-- Surface Totale -->
                        <li class="list-group-item">€</li><!-- Prix -->
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <a href="" class="btn btn-sm btn-bg-perso"><i class="fa fa-eye"></i> Détails</a>
                    <small class="text-muted"></small><!-- Date d'ajout -->
                </div>
            </div>
        </div><br>
        
                

                                            <!-- commentaire des clients -->

        
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <h4>CE QUE DISENT NOS CLIENT</h4>
                    <hr id="ligne"><br>
                                            <!-- indicateurs -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                                            <!-- diapo -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <h6>"Cette agence est la meilleure. Je suis tellement content du résultat!"<br><span>Michael Roe, Vice President, zone de commentaires</span></h6>
                        </div>

                        <div class="carousel-item">
                            <h6><i>"Un mot... WOW!!"</i><br><span>John Doe, vendeur, Representant Inc</span></h6>
                        </div>

                        <div class="carousel-item">
                            <h6><i>"Pourais-je...ETRE encore plus heureux avec cette agnece?"</i><br><span>Chandler Bing, Acteur, FriendsAlot</span></h3>
                        </div> 
                    </div><hr id="ligne">
                                    <!-- commandes gauche et droite -->

                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-nextl" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                   
                </div>
            </div><br>
        
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

</body>

</html>