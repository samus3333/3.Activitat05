<?php
require_once "../config/database.php";
session_start();
error_reporting(0);

if(isset($_SESSION['id'])&& $_SESSION['id'] === true){
    header('Location: ../main/welcome.php');
}
$minus=strtolower($_POST['email']);
$blanc=trim($minus);
$comprovacio=strpos($blanc,"@");

  if ($comprovacio== false&&$_POST['login']==true) {
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
  if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];
    if(!empty($email) && !empty($password)){
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    }
    if($final= $conn->query($sql)){
      session_start();
      $_SESSION['id']=true;
      header('Location: ../main/welcome.php');
    }else {
      echo "Lo sentimos, tus credenciales no funcionan.";
    }
  }
}}}}}}}}}}}}}}}}}}}}}}}}}}}}}
}
}

?>
<?php
$var=1
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="body"></div>
    <div class="header">
    <div ><a href="registro.php">SIGNUP </a><span>LOGIN</span></div>
    </div>
    <br>
    <div class="login">
    <form action="login.php" method="POST">
  <label for="Email">Email:</label><br>
  <input type="text" name="email" placeholder="Email"><br>
  <label for="Password">Password:</label><br>
  <input type="password" name="password" placeholder="Password"><br><br>
  <input type="submit" name="login" value="Login">
</form>
</div>
  </body>
</html>
