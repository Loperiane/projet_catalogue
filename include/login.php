<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=Catalogue', 'root', 'simplon123');
if (isset($_POST['formconnexion'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if (!empty($mailconnect) && !empty($mdpconnect)) {
        $requser = $bdd->prepare('SELECT * FROM Admin WHERE mail = ? AND pwd = ?');
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if ($userexist == 1) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['mail'] = $userinfo['mail'];
            header('Location: ../admin/admin.php');
        } else {
            $erreur = 'Mauvais mail ou mot de passe !';
        }
    } else {
        $erreur = 'Tous les champs doivent être complétés !';
    }
}
