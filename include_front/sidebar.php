<div class="col-sm-2">
    <div class="sidebar-nav">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="">APPUYER ICI POUR AFFICHER LE MENU</span>
                    <span class="glyphicon glyphicon-arrow-down"></span>
                </button>
                <span class="visible-xs navbar-brand">Menu</span>
            </div>
            <div class="navbar-collapse collapse sidebar-navbar-collapse">
                <ul class="nav navbar-nav">

                    <li id="acc"><a href="#">Accueil</a></li>

                    <li class="titre-menu"><a href="#">Guitare</a></li>

                    <li><a class="categorie-side" href="#">Fender</a></li>
                    <li><a class="categorie-side" href="#">Gibson</a></li>
                    <li><a class="categorie-side" href="#">Martin</a></li>

                    <li class="titre-menu"><a href="#">Basse</a></li>

                    <li><a class="categorie-side" href="#">Fender</a></li>
                    <li><a class="categorie-side" href="#">ESP</a></li>
                    <li><a class="categorie-side" href="#">Gretsch</a></li>

                    <li class="titre-menu"><a href="#">Batterie</a></li>

                    <li><a class="categorie-side" href="#">Pearl</a></li>
                    <li><a class="categorie-side" href="#">Sonor</a></li>
                    <li><a class="categorie-side" href="#">Yamaha</a></li>

                    <li class="titre-menu"><a href="#">Piano</a></li>

                    <li><a class="categorie-side" href="#">Yamaha</a></li>
                    <li><a class="categorie-side" href="#">Seiler</a></li>
                    <li><a class="categorie-side" href="#">Steinway</a></li>

                    <li class="titre-menu hs"><a href="#">Home-studio</a></li>
                    <div class="panel-group hs-cont" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default hs-border">
                            <div class="panel-heading hs-bgcolor" role="tab" id="headingOne">
                                <h4 class="h-titre panel-title">
                                    <a class="titre-hs" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Interfaces audio
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <li><a href="#">Motus</a></li>
                                    <li><a href="#">Presonus</a></li>
                                    <li><a href="#">M-Audio</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default hs-border">
                            <div class="panel-heading hs-bgcolor" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                            <a class="collapsed titre-hs" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                              Enceintes de monitoring
                                            </a>
                                          </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <li><a href="#">KRK</a></li>
                                    <li><a href="#">Yamaha</a></li>
                                    <li><a href="#">M-Audio</a></li>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default hs-border">
                            <div class="panel-heading hs-bgcolor" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed titre-hs" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                              Microphones
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <li><a href="#">Rode</a></li>
                                    <li><a href="#">Shure</a></li>
                                    <li><a href="#">Sennheiser</a></li>
                                </div>
                            </div>
                        </div>
                    </div>

                    <li class="titre-menu hs"><a href="#">Admin</a></li>
                    <div class="panel-group hs-cont" id="accordion2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default hs-border">
                            <div class="panel-heading hs-bgcolor" role="tab" id="headingOne1">
                                <h4 class="h-titre panel-title">
                                    <a class="titre-hs" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                        Connexion
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne1">
                                <div class="panel-body">
                                    <form action="include/login.php" method="post">
                                        <input type="mail" name="mailconnect" placeholder="Votre Mail">
                                        <input type="password" name="mdpconnect" id="mdp" placeholder="Votre Mot de passe">
                                        <br>
                                        <input class="btn" id="sub" type="submit" name="formconnexion">
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>

                </ul>
            </div>
        </div>
    </div>
</div>
