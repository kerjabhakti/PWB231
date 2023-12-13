<?php require "./header.php";?>

<form action="../controller/registerHandle.php" method="POST" class="max-w-sm mx-auto">
  <h1 class="block mb-2 text-lg font-medium text-gray-900 ">Registration</h1>
  <div class="mb-5">
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Your name</label>
    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Fullname" required>
  </div>
  <div class="mb-5">
    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 ">Your username</label>
    <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Username" required>
  </div>
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="name@google.com" required>
  </div>
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required>
  </div>
  <button type="submit" name="register" class="w-full text-white bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200  font-medium rounded-sm text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
</form>

<?php require "./footer.php";?>