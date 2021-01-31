<!DOCTYPE html>
<?php
require_once "../config/database.php";

if(isset($_POST['post'])){

  $alias = $_POST['alias'];
  $mensaje = $_POST['mensaje'];
  $categoria=$_POST['categoria'];

  if($categoria=="Amistad"){
    $categoria_id=1;
  }
  if($categoria=="Picante"){
    $categoria_id=2;
  }
  if($categoria=="Trabajo"){
    $categoria_id=3;
  }
  if($categoria=="Escuela"){
    $categoria_id=4;
  }
  if($categoria=="Amor"){
    $categoria_id=5;
  }
  if($categoria=="Otros"){
    $categoria_id=6;
  }
  if(!empty($alias) && !empty($mensaje)){
    $insert = "INSERT INTO post (`alias`, `postText`,`categoria_id`) VALUES ('$alias','$mensaje',$categoria_id)";
    $ejecutar_insert= mysqli_query($conn, $insert);
    header('Location: ../main/posts.php');
  }else {
    echo "Necessites omplir-ho tot.";
  }

}

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="categories.php" method="POST">
  <label for="Alias">Alias:</label><br>
  <input type="text" name="alias" placeholder="Alias" maxlength="15"><br><br>
  <label for="mensaje">Post:</label><br>
  <input type="textarea" name="mensaje" placeholder="¡Escribeme!" maxlength="255" rows="10" cols="40"><br><br>
  <select name="categoria">

    <option>Amistad</option>

    <option>Picante</option>

    <option>Trabajo</option>

    <option>Escuela</option>

    <option>Amor</option>

    <option>Otros</option>

  </select>
  <br><br>
  <input type="submit" name="post" value="Post">
</form>

  </body>
</html>
