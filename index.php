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
<!--        <hr id="hr">-->

        <!--<?php include 'include_front/topnav.php'; ?>-->


        <div class="row">

            <?php

            include 'include_front/sidebar.php';
            //include 'include_front/case_back.php';
            include 'include_front/case_front.php';


            ?>

        </div>

        <?php include 'include_front/footer.php';?>

        <?php include 'include_front/modal_produit.php';?>

        <!-- Ajout des cdn ou fichier JS -->

        <script src="js/script.js"></script>

        <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
        </script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>

    </body>


</html>
