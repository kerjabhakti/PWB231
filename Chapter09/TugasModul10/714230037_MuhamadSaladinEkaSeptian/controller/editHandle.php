<?php require "../config.php";?>

<?php
  if(isset($_POST['edit'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $sql = "UPDATE users SET name = '$name', username = '$username', email = '$email' WHERE id = $id";
    $query = mysqli_query($db, $sql);

    if($query) {
      header('Location: ../views/users.php?status=sukses');
    } else {
      header('Location: ../views/users.php?status=gagal');
    }
  } else {
    die("Akses Dilarang!");
  }
?>