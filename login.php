<?php
 include('includes/conexion.php');
session_start();
if(isset($_REQUEST['c']) && !empty($_REQUEST['c'])){
	$c=$_REQUEST['c'];
	$p=MD5($_REQUEST['p']);
	$siesta=mysql_num_rows(mysql_query("SELECT * FROM usuario WHERE usu_correo='".$c."' AND usu_pass='".$p."' "));
	if($siesta==1){
header("Location: perfil.php");
}else{
	echo '<script language="javascript">alert("usuario o contraseña incorrectos");</script>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
       h1,h2{font-family: "Raleway", Arial, Helvetica, sans-serif; color:white;
  margin:0;
  font-size: 35px;
  text-align:center;
  text-shadow: 1px 1px 3px #040000;}
</style>
</head>
	
	<title>Selfieteens</title>
	<link rel="stylesheet"  href="css/style.css">
	<meta charset="UTF-8" />
	<div style='background-color:#fb889f'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body class="w3-light-grey w3-content" style="max-width:1900px">
	<div style='background-color:#fb889f'>

	<header>
		<article>
         <IMG src="archivos/contacto6.png"></IMG>
		</article>
	</header>

<?php //include('includes/head.php'); ?>

<br>
<br>
<br>
<header>
	<article>
		<center>
		
		<body class="w3-light-grey w3-content" style="max-width:1900px">
		<form class="Log" action="index.php" method="post" >
	<h1>Iniciar sesion</h1>
	<label for="e">Correo</label><br>
	<input type="text" name="c" placeholder="* correo" required autofocus><br>
	<label for="p">Contraseña</label><br>
	<input type="password" name="p" placeholder="* Contraseña" required><br><br>
	<input class="w3-button w3-pink" type="submit"  value="Iniciar"></d>
	<br><br>No tienes cuenta, <a class="button" href="Registrarse.php">Registrarse</a>
	</center>
</form>
	</article>
</header>
<br>
<br>
<br> 
<footer>
<IMG src="archivos/login.png"></IMG>
</footer>
</body>
</html>