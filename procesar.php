<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Material Deportivo 2025</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js" defer></script>
</head>
<body>
  <!-- Header con menú -->
  <header>
  	<nav class="navbar">
  		<h1 class="logo"> Material Deportivo 2025</h1>
  		<ul class="menu">
  			<li><a href="#inicio">Inicio</a></li>
  			<li><a href="#quienes">Qui&eacute;nes Somos</a></li>
  			<li><a href="#productos">Productos</a></li>
  			<li><a href="#contacto">Contacto</a></li>
  		</ul>
  	</nav>
  </header>

  <!-- Banner central -->
  <section id="inicio" class="banner">
  	<h2>¡Haz de la vuelta al cole una aventura emocionante! </h2>
  	<p>Encuentra todo lo que necesitas para tus hijos al mejor precio.</p>
  	<button onclick="scrollToSection('productos')">Ver Producto</button>
  </section>

  <!-- Quiénes somos -->
  <section id="quienes" class="section">
  	<h2>Qui&eacute;nes somos</h2>
  	<p>Somos una tienda dedicada a ofrecer material deportivo de calidad para que cada regreso a clases sea m&aacute;s f&aacute;cil, accesible y emocionante para padres e hijos.</p>
  </section>

 <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = htmlspecialchars($_POST['nombre']);
	$email = htmlspecialchars($_POST['email']);
	$mensaje = htmlspecialchars($_POST['mensaje']);

	echo "<div id=\"result\">";
	echo "<h1>¡Gracias, $nombre!</h1>";
	echo "<p>Hemos recibido tu mensaje:</p>";
	echo "<p><strong>Email:</strong> $email</p>";
	echo "<p><strong>Mensaje:</strong> $mensaje</p>";
	echo "<a href='index.html'>Volver a la página principal</a>";
	echo "</div>";
}
 ?>

  <!-- Formulario de contacto -->
  <section id="contacto" class="section">
  	<h2>Contacto</h2>
  	<form action="procesar.php" method="POST" class="formulario">
  	  <label>Nombre:</label>
  	  <input type="text" name="nombre" required>

  	  <label>Email:</label>
  	  <input type="email" name="email" required>

  	  <label>Mensaje:</label>
  	  <textarea name="mensaje" required></textarea>

  	  <button type="submit">Enviar</button>
  	<form>	
  </section>

  <!-- Footer -->
  <footer>
  	<p>&copy; 2025 Material Deportivo - Todos los derechos reservados. </p>
  	<div class="redes">
  		<a href="https://facebook.com" target="_blank">Facebook</a> |
  		<a href="https://instagram.com" target="_blank">Instagram</a> |
  		<a href="https://tiktok.com" target="_blank">TikTok</a> |
  		<a href="https://x.com" target="_blank">X (Twitter)</a> |
  		<a href="https://wa.me/" target="_blank">WhatsApp</a> |
  		<a href="https://youtube.com" target="_blank">YouTube</a>
  	</div>
  </footer>

</body>
</html>



