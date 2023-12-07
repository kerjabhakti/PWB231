<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explorer</title>
</head>
<body>
  <h1>Explorer</h1>
  <h4>Menu:</h4>
  <ol>
    <li><a href="./register.php">Registrasi</a></li>
    <li><a href="./users.php">Daftar Users</a></li>
  </ol>
  <?php
    if (isset($_GET['status'])) {
      if($_GET['status'] == 'sukses') {
        echo "Pendaftaran Berhasil!";
      } else {
        echo "Pendaftaran Gagal!";
      }
    }
  ?>
</body>
</html>