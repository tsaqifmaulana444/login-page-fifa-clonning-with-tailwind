<?php
require 'function.php';

if(isset($_SESSION["id"])){
  header("Location: display.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body class="overflow-hidden">
    <section style="width: auto; height: 695px; background-image: url(/img/bg2.png); background-size: cover;">
    <div class="flex">
      <div class="flex justify-around w-full">
          <div style="width: 530px; height: 650px; overflow: hidden; position: relative; top: 6.9%;">
              <img src="/img/kakaaa.png" alt="" class="w-full h-full" id="gambar">
          </div>
          <div class="flex flex-col relative right-12 top-1/4">
              <div class="flex items-center flex-row w-fit relative">
                <img src="img/logoea.png" alt="" class="w-64">
                <img src="img/lisfifa.png" alt="" class="w-36">
              </div>
              <div>
                <a href="login.php">
                  <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium text-lg px-5 py-2.5 mr-2 mb-2 w-full hover:-translate-y-1 hover:scale-110 duration-300">Login</button>
                </a>
              </div>
              <div>
                <a href="register.php">
                  <button type="button" class="text-white bg-transparent hover:-translate-y-1 hover:scale-110 duration-300 font-medium text-lg px-5 py-2.5 mr-2 mb-2 w-full">Getting Started</button>
                </a>
              </div>
          </div>
      </div>
    </div>     
    </section>
    <?php require 'script.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>