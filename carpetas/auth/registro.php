<?php
require_once "../config/database.php";
if (!empty($_POST['email']) && !empty($_POST['password'])){
  $minus=strtolower($_POST['email']);
  $blanc=trim($minus);
  $comprovacio=strpos($blanc,"@");

    if ($comprovacio== false) {
      echo "No es un correu electronic valid.";
    }else{
            $domini=substr($blanc,$comprovacio+1);
            if (checkdnsrr("$domini","MX")) {
              if(strpos($_POST["email"],"!")){
                  echo "No poden estar caracters especials com !";
              }else {
              if(strpos($_POST["email"],"\"")){
                  echo "No poden estar caracters especials com \"";
              }else {
              if(strpos($_POST["email"],"#")){
                  echo "No poden estar caracters especials com #";
              }else {
              if(strpos($_POST["email"],"$")){
                  echo "No poden estar caracters especials com $";
              }else {
              if(strpos($_POST["email"],"%")){
                  echo "No poden estar caracters especials com %";
              }else {
              if(strpos($_POST["email"],"&")){
                  echo "No poden estar caracters especials.";
              }else {
              if(strpos($_POST["email"],"'")){
                  echo "No poden estar caracters especials com '";}
              else {
              if(strpos($_POST["email"],"(")){
                  echo "No poden estar caracters especials com (";
              }else {
              if(strpos($_POST["email"],")")){
              echo "No poden estar caracters especials com )";
              }else {
              if(strpos($_POST["email"],"*")){
              echo "No poden estar caracters especials com *";
              }else {
              if(strpos($_POST["email"],"+")){
              echo "No poden estar caracters especials com +";
              }else {
              if(strpos($_POST["email"],",")){
              echo "No poden estar caracters especials com ,";
              }else {
              if(strpos($_POST["email"]," ")){
              echo "No poden estar caracters especials com un espai en blanco.";
              }else {
              if(strpos($_POST["email"],"-")){
              echo "No poden estar caracters especials com -";
              }else {
              if(strpos($_POST["email"],"/")){
              echo "No poden estar caracters especials com /";
              }else {
              if(strpos($_POST["email"],":")){
              echo "No poden estar caracters especials com :";
              }else {
              if(strpos($_POST["email"],";")){
              echo "No poden estar caracters especials com ;";
              }else {
              if(strpos($_POST["email"],"=")){
              echo "No poden estar caracters especials com =";
              }else {
              if(strpos($_POST["email"],"?")){
              echo "No poden estar caracters especials com ?";
              }else {
              if(strpos($_POST["email"],"[")){
              echo "No poden estar caracters especials com [";
              }else {
              if(strpos($_POST["email"],"\\")){
              echo "No poden estar caracters especials com \\";
              }else {
              if(strpos($_POST["email"],"]")){
              echo "No poden estar caracters especials com ]";
              }else {
              if(strpos($_POST["email"],"^")){
              echo "No poden estar caracters especials com ^";
              }else {
              if(strpos($_POST["email"],"_")){
              echo "No poden estar caracters especials com _";
              }else {
              if(strpos($_POST["email"],"`")){
              echo "No poden estar caracters especials com `";
              }else {
              if(strpos($_POST["email"],"´")){
              echo "No poden estar caracters especials com ´";
              }else {
              if(strpos($_POST["email"],"{")){
              echo "No poden estar caracters especials com {";
              }else {
              if(strpos($_POST["email"],"|")){
              echo "No poden estar caracters especials com |";
              }else {
              if(strpos($_POST["email"],"~")){
              echo "No poden estar caracters especials com }";
              }else {
              if(isset($_POST['registrarse'])){
              $email=$_POST["email"];
              $password=$_POST["password"];
              $registro = "INSERT INTO users (`email`, `password`) VALUES('$email','$password')";
              $ejecutar_registro= mysqli_query($conn, $registro);
              }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
            }else {
          echo "No es un correu electronic valid.";
  }
}}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="body"></div>
    <div class="header">
    <div><a href="login.php">LOGIN </a><span>Registro</span></div>
    </div>
    <br>
    <div class="login">
    <form action="registro.php" method="POST">
  <label for="Email">Email:</label><br>
  <input type="email" name="email" placeholder="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="password" name="password" placeholder="Password"><br><br>
  <input type="submit" name="registrarse" value="Registrarse">
</form>
  </body>
</html>
