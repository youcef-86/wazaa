
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
           
         
                                                <!-- partie annonces -->
       
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
                                            <!-- photo6 -->
            <div class="card border-bg-perso mb-4 shadow-sm" id="photo6">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 6 -->
                        <div id="carouselControls6" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/5-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/5-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/5-3.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div> 
                            </div>
                                <a class="carousel-control-prev" href="#carouselControls6" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls6" role="button" data-slide="next">
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
                                                        <!-- photo7 -->
            <div class="card border-bg-perso mb-4 shadow-sm" id="photo7">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 7 -->
                        <div id="carouselControls7" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/7-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/7-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/7-3.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div> 
                            </div>
                                <a class="carousel-control-prev" href="#carouselControls7" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls7" role="button" data-slide="next">
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
                                                    <!-- photo8 -->

            <div class="card border-bg-perso mb-4 shadow-sm" id="photo8">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 8 -->
                        <div id="carouselControls8" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/9-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/9-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>
                            </div>
                                <a class="carousel-control-prev" href="#carouselControls8" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls8" role="button" data-slide="next">
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

                                                <!-- photo9 -->

            <div class="card border-bg-perso mb-4 shadow-sm" id="photo9">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 9 -->
                        <div id="carouselControls9" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/1-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                                <div class="carousel-item"  >
                                    <img src="IMG/1-2.jpg" class="d-block w-100 carouselheight"   alt="">
                                </div>
                            </div>
                                <a class="carousel-control-prev" href="#carouselControls9" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls9" role="button" data-slide="next">
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

                                                <!-- photo10 -->

            <div class="card border-bg-perso mb-4 shadow-sm" id="photo10">
                <div class="card-header text-center">
                    <h2 class="h5 card-title">
                        <a href="annonces/details/" class="color-perso"></a>
                    </h2><!-- Titre -->
                    <h3 class="h6 card-subtitle text-muted"></h3><!-- Référence -->
                    <a href="annonces/details/">
                  
                                                <!-- img 10 -->
                        <div id="carouselControls10" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="IMG/4-1.jpg" class="d-block w-100 carouselheight"  alt="">
                                </div>
                            </div>
                                <a class="carousel-control-prev" href="#carouselControls10" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls10" role="button" data-slide="next">
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
        </div>
        
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