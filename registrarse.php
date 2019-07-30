 tabla:registro
id,nick,nombre,edad,telefono,correo,pais,mensaje
<?php

 include('includes/conexion.php');
if( isset( $_POST["nick"] ) ){
    $nick = $_POST['nick'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pais = $_POST['pais'];
    $mensaje = $_POST['mensaje'];

    $consulta = "INSERT INTO registro(nick, nombre, edad, telefono, correo, pais, mensaje)VALUES('".$nick."','".$nombre."','".$edad."','".$telefono.'","'.$correo.'","'.$pais.'","'.$mensaje."')";
    
    
    if (isset($consulta)) {
      header("Location:registrarse.php");


    }
}

?>

 <!DOCTYPE html>
<html lang="en">
<head>
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
	<meta charset="UTF-8">
	<title>SelfieTeens</title>
	<link rel="stylesheet"  href="css/log.css">
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body class="w3-light-pink" style="max-width:1950px">
  <div style='background-color:#fb889f'>

</head>
<?php //include('includes/head.php'); ?>
<body oncontextmenu="return false"> 

  <header>
    <IMG src="archivos/contacto3.png" align="center"></IMG>
  </header>


<header>
    <article>
      <center>
      <br>
      <br>
      <br>
      <br>
      <font color="white">REGISTRO<font>
        <br>
    <font color="white">Seleccione un paquete para anunciarte como escort</fonts>
<br>
<br>
<center>
 <div class="w3-container w3-light-pink" style="max-width:1000px" id="contact">
<div class="w3-row-padding">
<div class="w3-third w3-margin-bottom">
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-pink w3-xsmall w3-padding-20">Gratis</li>
      <h2 class="w3-wide">$ 0</h2>
      <span class="w3-opacity">un mes</span>
    </li>
  </ul>
</div>

<div class="w3-third w3-margin-bottom">
  
  <ul class="w3-ul w3-border w3-center w3-hover-shadow">
    <li class="w3-blue w3-xsmall w3-padding-20">Basico</li>
      <h2 class="w3-wide">$1,500</h2>
      <span class="w3-opacity">Por mes</span>
    </li>
  </ul>
</div>
</center>
    </article>
    <article>

      <center><font color="white">&#9829;¡Has tomado una excelente desiciòn, ya que publicar tu anuncio en SELFIETEENS.mx es muy facil y rapido.!&#9829;</font></center>
    </article>
</header>
<br>
<br>

<header>
  <article>
    <center>
    <div class="w3-container w3-light-pink" style="max-width:1000px" id="contact">
     <form action="registrarse.php" method="post" class="w3-container w3-card-4 w3-light-pink  w3-text-white w3-margin">
<h4 class="w3-left">Completa el formulario para crear tu cuenta</h4>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="nick" type="text" placeholder="*Nick" required autofocus>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"  name="nombre" type="text" placeholder="*Nombre">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="edad" type="number" placeholder="*Edad">
    </div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="correo" type="text" placeholder="*Correo">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"   name="telefono" type="text" placeholder="*Telefono" required>
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border"  name="mensaje" type="text" placeholder="*Mensaje" required>
    </div>
</div>
<div class="w3-row w3-section">
    <div class="w3-rest">
        <label>Nacionalidad</label>
             <td>
                <select name="pais"  required="required">
                   <option value=""> --- </option>
                   <option value="Argentina"> Argentina </option>
                   <option value="Bolivia"> Colombia </option>
                   <option value="Brasil"> Brasil </option>
                   <option value="Chile"> Chile </option>
                   <option value="Paraguay"> Paraguay </option>
                   <option value="Uruguay"> Uruguay </option>
                   <option value="CostaRica"> Costa Rica </option>
                   <option value="Mexico"> Mexico </option>
                   <option value="USA"> Estados Unidos </option>
                   <option value="PuertoRico"> Puerto rico </option>
                </select>
             </td>
    </div>
    </center>
  </article>
  <article>
    <center>
    <span>Tu correo debe ser tan real, solo asi podras completar tu registro. Una vez que se analize  tu soliciutd , te enviaremos a tu direccion  de correo las instrucciones para continuar con tu activacion</span>
      <br>
      <br>
    <INPUT type="radio" name="acepto" value="Condicion"> Declaro que ser mayor de 18 años, ser indepediente,manejarme y publicarme por mi cuenta asi como haber leido y aceptado los terminos y condiciones asi como el aviso legal<BR>
      
      <br><br><input class="w3-button w3-pink"  type="submit" value="PUBLICARME">  
      </form>
      </center>
  </article>
<footer>
  <IMG src="archivos/contacto2.png" align="center"></IMG>
</footer>
</body>
</html>