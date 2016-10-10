<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=soundgood', 'dylan_', 'dylan_');
if (isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if (!empty($mailconnect) && !empty($mdpconnect)) {
        $requser = $bdd->prepare('SELECT * FROM user WHERE mail = ? AND pwd = ?');
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['isAdmin'] = $userinfo['isAdmin'];
            header('Location: accueil.php');
        } else {
            $erreur = 'Mauvais mail ou mot de passe !';
        }
    } else {
        $erreur = 'Tous les champs doivent être complétés !';
    }
}