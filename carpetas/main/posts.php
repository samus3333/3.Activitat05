<?php
require_once "../config/database.php";

$sql = "SELECT alias,categoria_id,postText FROM post ORDER BY alias,categoria_id,postText ASC";
$ejecutar_sql= mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    while ($fila = mysqli_fetch_array($ejecutar_sql)) {
    ?>

    	<p class="mostrar">Alias -->
      <?php echo $fila['alias'];?></p>
    	<p class="mostrar">Categoria -->
      <?php
        if($fila['categoria_id']==1){
        $categoria_id="Amistad";
        }
        if($fila['categoria_id']==2){
        $categoria_id="Picante";
      }
      if($fila['categoria_id']==3){
        $categoria_id="Trabajo";
      }
      if($fila['categoria_id']==4){
        $categoria_id="Escuela";
      }
      if($fila['categoria_id']==5){
        $categoria_id="Amor";
      }
      if($fila['categoria_id']==6){
        $categoria_id="Otros";
      }
      echo $categoria_id;
      ?></p>
      <p class="mostrar">Post -->
      <?php echo $fila['postText']?></p>
      <br>
      <br>


    <?php
    }
    ?>
  </body>
</html>
