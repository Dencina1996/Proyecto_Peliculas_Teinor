<?php
    $username = "Admin";
    $password = "P@ssw0rd";
    $database = "films_db";

    $connection = new mysqli('localhost', $username, $password, $database);

    $search = $_POST['search'];

    $query = "SELECT * FROM films WHERE title LIKE '%".$search."%'";

    $data = $connection->query($query);

    if (mysqli_num_rows($data) == 0) {

    	$errors = array("error" => "No se han encontrado resultados");

    	echo json_encode($errors);

    } else {

	    $rows = [];

	    while ($row = mysqli_fetch_assoc($data)) {
	    	$rows[] = $row;
	    } 

	    echo json_encode($rows);

    }
?>