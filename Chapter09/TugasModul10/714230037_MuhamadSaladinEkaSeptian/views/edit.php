<?php require "./header.php";?>

<?php if(assert($_GET['id'])):?>
  <?php require "../config.php";?>
  <?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($query);

  ?>

  <form action="../controller/editHandle.php?id=<?php echo $id?>" method="POST" class="max-w-sm mx-auto">
    <h1 class="block mb-2 text-lg font-medium text-gray-900 ">Edit details</h1>
    <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Your name</label>
      <input type="text" value="<?php echo $user['name']; ?>" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Fullname" required>
    </div>
    <div class="mb-5">
      <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Your username</label>
      <input type="text" value="<?php echo $user['username']; ?>" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Username" required>
    </div>
    <div class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
      <input type="email" value="<?php echo $user['email']; ?>" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@google.com" required>
    </div>
    <button type="submit" name="edit" class="w-full text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200  font-medium rounded-sm text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
  </form>
<?php endif?>

<?php require "./footer.php";?>