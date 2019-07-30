
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


</style>
</head>
	<title>SelfieTeens</title>
	<meta charset="UTF-8">
	<div style='background-color:#fb889f'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body class="w3-light-grey w3-content" style="max-width:1950px">
	


<header>
	<article>
		<img src="archivos/contacto1.png" align="center">
	</article>
</header>

<br>
<br>
<br>
<header>
	<article>
		<center>
		<font color="white">Bienvenidos a Selfie Teens, somos un sitio web para adultos fundado en  2017.</font>
		<br>
		<font color="white">Nuestra Vision es promover una plataforma donde la gente pueda disfrutar de nuestro contenido.</font>
		<br>
		<font color="white">Es un honor que formes parte de nuestra comodidad y estamos trabajando dia a dia para mejorar nuestro servicio.</font>
		<br>
		<font color="white">Este sitio www.selfiet.mx solo ofrece espacios  publicitario a las modelos que aqui se anuncian, no tenemos un vinculo de ninguna otra indole con las modelos que aqui publican anuncios.</font>
		<br>
		<font color="white">Ofrecemos espacios publicitarios, en los cuales cada contratante publica fotos, videos y texto que ellos consideren prudente publicar, siendo los mismos contratantes responsables de las publicaciones que se hacen, asi el contenido que suben.</font>
		<br>
		<font color="white">Quien ingrese a este portal www.evas.mx lo have de manera libre y voluntaria, aceptando implicita o explicitamente que es mayor de 18 años o que tiene la mayoria de edad legal desde el pais que el ingresaa esta pagina.</font>
	</center>
	</article>
</header>

<header>
	<article>
		<center>
			<br> 
			   <br>
			<?php
if (!isset($_POST['email'])) {
?>
<header class="w3-display-container w3-content" style="max-width:1000px;">
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label>
      Nombre:
      <input class="w3-input w3-border" name="nombre" type="text" required autofocus/>
    </label>
    <label>
      Email:
      <input class="w3-input w3-border" name="email" type="text" required/>
    </label>
    <label>
      Mensaje:
      <textarea class="w3-input w3-border" name="mensaje" rows="2" cols="10" required></textarea>
    </label>
    <br>
    <input class="w3-button w3-pink" type="reset" value="Borrar" />
    <input class="w3-button w3-pink" type="submit" value="Enviar" />
  </form>
		<?php
}else{
	$mensaje="Mensaje del formulario de contacto de SelfieTeens.com";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "guero_brian30@hotmail.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por:SelfieTeens ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
</center>
	</article>
</header>
<footer>
	<img src="archivos/contacto4.png" align="center">
</footer>

</body>
</html>

