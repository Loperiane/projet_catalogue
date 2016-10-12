<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
    <form action="include/login.php" method="post">
      <input type="mail" name="mailconnect" placeholder="Votre Mail">
      <input type="password" name="mdpconnect" placeholder="Votre Mot de passe">
      <input type="submit" name="formconnexion">
    </form>
  </body>
</html>
