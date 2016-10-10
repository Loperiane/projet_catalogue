<?php

require 'variables.php';
if (isset($_POST['forminscription'])) {
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mail = htmlspecialchars($_POST['mail']);
  $mail2 = htmlspecialchars($_POST['mail2']);
  $mdp = sha1($_POST['mdp']);
  $mdp2 = sha1($_POST['mdp2']);
  if (!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['mail2']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']) && !empty($_POST['captcha'])) {
      $pseudolength = strlen($pseudo);
      if ($pseudolength <= 255 && $pseudolength >= 3) {
        $reqpseudo = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
        $reqpseudo->execute(array($pseudo));
        $pseudoexist = $reqpseudo->rowCount();
        if ($pseudoexist == 0) {
          if ($mail == $mail2) {
            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              $reqmail = $bdd->prepare('SELECT * FROM user WHERE mail = ?');
              $reqmail->execute(array($mail));
              $mailexist = $reqmail->rowCount();
              if ($mailexist == 0) {
                if ($mdp == $mdp2) {
                  $mdplength = strlen($mdp);
                  if ($mdplength >= 8) {
                    $insertmbr = $bdd->prepare('INSERT INTO user(pseudo, mail, pwd) VALUES(?, ?, ?)');
                    $insertmbr->execute(array($pseudo, $mail, $mdp));
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
        } else {
          $erreur = 'Pseudo deja utilisé !';
        }
      } else {
        $erreur = 'Votre pseudo ne dispose pas d\'une taille réglementaire';
      }
    }
  }else {
    $erreur = 'Tous les champs doivent être complétés !';
  }
}
?>
