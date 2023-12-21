<?php require "../config.php";?>

<?php
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM users WHERE id = $id";
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