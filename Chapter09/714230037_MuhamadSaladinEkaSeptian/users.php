<?php include "./config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>
  <h3>Daftar Pengguna</h3>
  <a href="./register.php">[+] Tambah Data</a>
  
  <table border="1">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Tgl Daftar</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT * FROM users";
        $query = mysqli_query($db, $sql);

        while($user = mysqli_fetch_array($query)) {
          echo "<tr>";
          echo "<td>".$user['id']."</td>";
          echo "<td>".$user['name']."</td>";
          echo "<td>".$user['username']."</td>";
          echo "<td>".$user['email']."</td>";
          echo "<td>".$user['created_in']."</td>";
          echo "</tr>";
        }
      ?>
    </tbody>
  </table>
  <p>Total : <?php echo mysqli_num_rows($query);?></p>
</body>
</html>