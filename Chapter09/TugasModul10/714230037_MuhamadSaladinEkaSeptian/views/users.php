<?php require "./header.php";?>

<?php require "../config.php";?>
<?php
  $sql = "SELECT * FROM users";
  $query = mysqli_query($db, $sql);
?>

<div class="flex flex-col items-center gap-6 text-center">
  <a href="register.php" class="font-medium text-blue-600 hover:underline">[+] Add User</a>
  <table class="text-sm text-center text-gray-500 rtl:text-right"> 
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-3">
          Name
        </th>
        <th scope="col" class="px-6 py-3">
          Status
        </th>
        <th scope="col" class="px-6 py-3">
          Action
        </th>
      </tr>
    </thead>
    <tbody>
      <?php while($user = mysqli_fetch_array($query)): ?>
        <tr class="bg-white border-b hover:bg-gray-50">
          <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
            <img class="w-10 h-10 rounded-full" src="https://static.vecteezy.com/system/resources/previews/005/544/718/non_2x/profile-icon-design-free-vector.jpg" alt="Jese image">
            <div class="mx-3 text-left">
              <div class="text-base font-semibold"><?php echo $user['name'];?></div>
              <div class="font-normal text-gray-500"><?php echo $user['email'];?></div>  
            </div>
          </th>
          <td class="px-6 py-4">
            <div class="flex items-center">
              <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
            </div>
          </td>
          <td class="px-6 py-4">
            <div><a href="./edit.php?id=<?php echo $user['id'];?>" class="font-medium text-blue-600 hover:underline">Edit</a></div>
            <div><a href="../controller/removeHandle.php?id=<?php echo $user['id'];?>" class="font-medium text-blue-600 hover:underline">Remove</a></div>
          </td>
        </tr>
      <?php endwhile;?>
    </tbody>
  </table>
  <p class="mb-12">Total : <?php echo mysqli_num_rows($query);?></p>
</div>

<?php require "./footer.php"?>