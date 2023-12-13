<?php require "./views/header.php"?>

<div class="flex flex-col items-center">
  <a href="./views/register.php" class="w-[150px] text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200  font-medium rounded-sm text-sm px-5 py-2.5 text-center me-2 mb-2" >
    Sign Up
  </a>
  <a href="./views/users.php" class="relative w-[150px] inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-sm group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-purple-200" >
    <span class="relative w-full text-center px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-sm group-hover:bg-opacity-0"> 
      Users
    </span>
  </a>
   <?php
    if (isset($_GET['status'])) {
      if($_GET['status'] == 'sukses') {
        echo "New user arrived!";
      } else {
        echo "Registration declined";
      }
    }
  ?> 
</div>

<?php require "./views/footer.php"?>