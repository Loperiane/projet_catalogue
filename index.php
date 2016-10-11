<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Catalogue</title>
    <meta name="name" content="content">
    <!-- <link rel="stylesheet" href="css/simple-grid.css" media="screen" title="no title" charset="utf-8"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title" charset="utf-8">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
</head>

<body>

    <div class="banniere"></div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Accueil</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Guitare</a></li>
                    <li><a href="#">Basse</a></li>
                    <li><a href="#">Batterie</a></li>
                    <li><a href="#">Piano</a></li>
                    <li><a href="#">Home-studio</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control recherche" id="" placeholder="Recherche">
                    </div>
                    <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-sm-2">
            <div class="sidebar-nav">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="visible-xs navbar-brand">Menu</span>
                    </div>
                    <div class="navbar-collapse collapse sidebar-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="titre-menu">Guitare</li>

                            <li><a href="#">Fender</a></li>
                            <li><a href="#">Gibson</a></li>
                            <li><a href="#">Martin</a></li>

                            <li class="titre-menu">Basse</li>

                            <li><a href="#">Fender</a></li>
                            <li><a href="#">ESP</a></li>
                            <li><a href="#">Gretsch</a></li>

                            <li class="titre-menu">Batterie</li>

                            <li><a href="#">Pearl</a></li>
                            <li><a href="#">Sonor</a></li>
                            <li><a href="#">Yamaha</a></li>

                            <li class="titre-menu">Piano</li>

                            <li><a href="#">Yamaha</a></li>
                            <li><a href="#">Seiler</a></li>
                            <li><a href="#">Steinway</a></li>

                            <li class="titre-menu hs">Home-studio</li>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="h-titre panel-title">
                                            <a class="titre-hs" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                              Interfaces audio
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <li><a href="#">Motus</a></li>
                                            <li><a href="#">Presonus</a></li>
                                            <li><a href="#">M-Audio</a></li>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
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
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
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

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="flexbox">
                <div class="case">
                  <img src="img/zoom.jpg" alt="" />
                    <div class="caseBleue">en savoir plus>></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
                <div class="case">
                    <div class="caseBleue"></div>
                </div>
<div class="case">
    <div class="caseBleue"></div>
</div>            </div>
        </div>
    </div>



    <footer>
        <p>footer</p>
    </footer>

    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>
