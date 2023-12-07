<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "explorer";

  $db = mysqli_connect($server, $user, $password, $dbname);

  if(!$db) {
    die("Unable to connect to ".mysqli_connect_error());
  } else {
    echo "<script>console.log('Connected to', '$dbname')</script>";
  }

?>