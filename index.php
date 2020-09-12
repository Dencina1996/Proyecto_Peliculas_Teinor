<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de películas - Teinor</title>
	<link rel="icon" href="https://www.teinor.net/wp-content/uploads/2020/01/K4uYfe8w_400x400.jpg">
	<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="css/min.css">
	<!-- JAVASCRIPT -->
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="js/scriptsheet.js"></script>
</head>
<body>
	<div class="header">
		<h1>Lista de películas</h1>
		<button class="add-button" title="Añadir película">Añadir</button>
		<button style="float: right;">Buscar 🔎</button>
		<input class="search-bar" type="text" name="search-content" style="float: right;" placeholder="Buscar...">
		<br><br>
	</div>
	<form class="add-film" method="post" action="insert.php" enctype="multipart/form-data">
		<label for="title">Título:</label>
		<input id="title" type="text" name="title" required>
		<br>
		<label for="year">Año:</label>
		<input id="year" type="number" name="year" value="2000" min="1800" required>
		<br>
		<label for="image">Imagen:</label>
		<input id="image" type="file" name="image">
		<br><br>
		<input type="submit" name="submit" value="Añadir película">
	</form>
	<button class="order-button" title="Ordenar películas">Ordenar por Año <label>🔼</label></button>
	<div class="film-list">
		<?php

			$username = "Admin";
			$password = "P@ssw0rd";
			$database = "films_db";

			$connection = new mysqli('localhost', $username, $password, $database);

			$query = "SELECT * FROM films";

			$data = $connection->query($query);

			while ($row = $data->fetch_assoc()) {
				echo "	<div class='film-data'>
							<h3 class='film-title'>".$row["title"]."</h3>
							<h3 class='film-year'>(".$row["year"].")</h3>
							<img class='film-image' src='covers/".$row["cover"]."'>
						</div>";
			}
			$connection->close();
		?>
	</div>
</body>
</html>