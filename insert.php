<?php

  if (!isset($_POST['submit'])) { 
      echo "Ha ocurrido un problema (500)";
  } else {
    print_r($_POST['title'].$_POST['year'].$_FILES['image']['name']);

    $username = "Admin";
    $password = "P@ssw0rd";
    $database = "films_db";

    $connection = new mysqli('localhost', $username, $password, $database);

    $title = $_POST['title'];
    $year = $_POST['year'];
    $image = $_FILES['image']['name'];

    if (!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name'])) {
      $query = "INSERT INTO films (`title`,`year`,`cover`) VALUES ('".$title."','".$year."','not_available.jpg')";
    } else {
      $query = "INSERT INTO films (`title`,`year`,`cover`) VALUES ('".$title."','".$year."','".$image."')";
    }

    $target = "covers/".basename($image);

    $data = $connection->query($query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      echo "Image uploaded successfully";
    } else {
      echo "Failed to upload image";
    }

    $connection->close();

    header("Location: {$_SERVER["HTTP_REFERER"]}");

  }
?>