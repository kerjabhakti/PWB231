<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
</head>
<body>
  <form action="./registerHandle.php" method="POST">
    <h3>Registrasi</h3>
    <div>
      <label for="nama">Nama</label>
      <input required type="text" name="nama" id="nama" placeholder="Nama Lengkap">
    </div>
    <div>
      <label for="username">Username</label>
      <input required type="text" name="username" id="username" placeholder="Username">
    </div>
    <div>
      <label for="email">Email</label>
      <input required type="email" name="email" id="email" placeholder="Email">
    </div>
    <div>
      <label for="password">Password</label>
      <input required type="password" name="password" id="password" placeholder="Password">
    </div>
    <button type="submit" name="daftar" value="daftar">Daftar</button>
  </form>
</body>
</html>