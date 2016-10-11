<?php session_start();
if (isset($_SESSION['mail']))
{
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>admin</title>
  </head>
  <body>
    <div>
      <a href="#">Ajouter un produit</a>
    </div>
    <div>
      <a href="#">Modifier un produit</a>
    </div>
    <div>
      <a href="#">Supprimer un produit</a>
    </div>
  </body>
</html>

<?php}else {
  print_r($_SESSION);
  echo "cout";
}?>
