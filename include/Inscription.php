<?php

require 'variables.php';
if (isset($_POST['forminscription'])) {
  $mail = htmlspecialchars($_POST['mail']);
  $mail2 = htmlspecialchars($_POST['mail2']);
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);
  if (!empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['mdp']) && !empty($_POST['mdp2'])) {
          if ($mail == $mail2) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              $reqmail = $bdd->prepare('SELECT * FROM user WHERE mail = ?');
              $reqmail->execute(array($mail));
              $mailexist = $reqmail->rowCount();
              if ($mailexist == 0) {
                if ($mdp == $mdp2) {
                  $mdplength = strlen($mdp);
                  if ($mdplength >= 8) {
                    $insertmbr = $bdd->prepare('INSERT INTO Admin(mail, pwd) VALUES(?, ?)');
                    $insertmbr->execute(array($mail, $mdp));
                    $erreur = 'Votre compte a bien été créé ! <a href="connexion.php">Me connecter</a>';
                  }else {
                    $erreur = 'Votre mot de passe doit faire un minimum de 8 caracteres.';
                  }
                } else {
                  $erreur = 'Vos mots de passes ne correspondent pas !';
                }
              } else {
                $erreur = 'Adresse mail déjà utilisée !';
              }
            } else {
              $erreur = "Votre adresse mail n'est pas valide !";
            }
          } else {
            $erreur = 'Vos adresses mail ne correspondent pas !';
          }
    }
  }else {
    $erreur = 'Tous les champs doivent être complétés !';
  }
?>
