<?php require "../config.php";?>

<?php
  if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO users (name, username, email, password) VALUE ('$name', '$username', '$email', '$password')";
    $query = mysqli_query($db, $sql);

    if($query) {
      header('Location: ../index.php?status=sukses');
    } else {
      header('Location: ../index.php?status=gagal');
    }
  } else {
    die("Akses Dilarang!");
  }
?>