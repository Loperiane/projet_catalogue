<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (!empty($_POST['Categorie']) && !empty($_POST['uploadfile']) && !empty($_POST['descr']) && !empty($_POST['longdescr']) && !empty($_POST['nom']));
    {
      include '../include/variables.php';
      $categorie = htmlspecialchars($_POST['Categorie']);
      $nom = htmlspecialchars($_POST['nom']);
      $img = $_POST['uploadfile'];
      $descr = htmlspecialchars($_POST['descr']);
      $longdescr = htmlspecialchars($_POST['longdescr']);
      $addproduct = $bdd->prepare('INSERT INTO article(nom, descr, longdescr, img) VALUES (?, ?, ?, ?)');
      $addproduct->execute(array($nom, $descr, $longdescr, $img));
      $uploaddir = '/var/www/';
      $uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);

      echo '<pre>';
      if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
          echo "Le fichier est valide, et a été téléchargé
                 avec succès. Voici plus d'informations :\n";
      } 
    }
     ?>
    <h2>Ajout d'un article</h2>
    <form class=""  action="" method="post">
      <select class="" name="Categorie">
        <optgroup label="Guitare">
          <option value="fender">fender</option>
          <option value="gibson">gibson</option>
          <option value="martin">martin</option>
        </optgroup>
    </select><br>
    <input type="file" name="uploadfile" accept="image/png"><br>
    <input type="text" name="nom" value=""><br>
    <input type="text" name="descr" placeholder="Breve description du produit"><br>
    <textarea name="longdescr" rows="8" cols="40"placeholder="Description complete du produit"></textarea><br>
    <input type="submit" name="name"placeholder="Submit">
    </form>
  </body>
</html>
