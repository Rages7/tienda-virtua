<!DOCTYPE html>
<html>
<title>Tienda Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Cerrar &times;</button>
	<a href="../../index.php" class="w3-bar-item w3-button">Menu</a>
  <a href="#" class="w3-bar-item w3-button">Google Play</a>
  <a href="#" class="w3-bar-item w3-button">Steam</a>
  <a href="../epic.php" class="w3-bar-item w3-button">Epic Games</a>
</div>

<div id="main">

<div class="w3-teal">
  <button id="openNav" class="w3-button w3-teal w3-xlarge" onclick="w3_open()">&#9776;</button>
  <div class="w3-container">
    <h1>Borderlands 3</h1>
  </div>
</div>
	<img src="../../img/bord.jpeg" alt="Avatar" style="width:10%"
	<div>

<h1>¡Incluye nuevas armas!</h1>

<p>Borderlands 3 va a rockandrollear. Hemos visto rifles con escudos de bala autopropulsados, hemos visto rifles arrojando lava, pero ¿hemos visto armas con patas? Esta iteración promete traer muchas innovaciones a lo largo de todo el proceso.
¡Conoce a los personajes!</p>

<p>¡A lo largo de la nueva aventura que presenta Borderlands 3, también llega un nuevo reparto de Vault Hunters! Los cuatro protagonistas del nuevo lanzamiento son Moze, Amara, FL4K y Zane. ¡Estos cuatro nuevos héroes son personalizables más allá de tus expectativas más salvajes, y sus nuevas y sorprendentes habilidades sorprenderán incluso al crítico más exigente!</p>


<h1>¡Los encuentros más brutales hasta la fecha!</h1>

<p>¡Al comprar Borderlands 3 te enfrentarás de primera mano a lo peor de la peor escoria de la galaxia! ¡Sé el primero en mostrarles quién es el jefe! Enfréntate a los psicópatas, a los fanáticos religiosos y a todo tipo de otros malhechores. ¡Este viaje lo llevará a través de desafíos que se extienden más allá de las fronteras de Pandora, así que prepárate, ya que Borderlands 3 se presentará con una historia completamente nueva!</p>

<h1>Al comprar la clave en Eneba disfrutaras de uno de los precios más baratos del mercado, este juego lo vas a poder jugar en Epic Games, PlayStation y Xbox.</h1>
</div> 
	
	


<div class="w3-container">

</div>

</div>

<script>
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</body>
</html>