<?php include "./config.php";?>

<?php
  if(isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name, username, email, password) VALUE ('$nama', '$username', '$email', '$password')";
    $query = mysqli_query($db, $sql);

    if($query) {
      header('Location: index.php?status=sukses');
    } else {
      header('Location: index.php?status=gagal');
    }
  } else {
    die("Akses Dilarang!");
  }
?>