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
        <div class="flex justify-around w-full">
            <div style="width: 530px; height: 650px; overflow: hidden; position: relative; margin-top: 45px;">
                <img src="/img/cr.png" alt="" class="w-full h-full" id="gambar">
            </div>
            <div class="flex flex-col relative right-12 top-16">
                <div class="flex items-center flex-row w-fit relative">
                    <img src="img/logoea.png" alt="" class="w-60">
                    <img src="img/lisfifa.png" alt="" class="w-36">
                </div>
                <div class="pb-5 pt-px">
                    <p class="text-3xl font-semibold text-white">Please Login First</p>
                </div>
                <form autocomplete="off" action="" method="post">
                    <input type="hidden" id="action" value="login">
                    <div>
                        <input type="text" id="username" value="" placeholder="Username" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> <br>
                    </div>
                    <div>
                        <input type="password" id="password" value="" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"> <br>
                    </div>
                    <div>
                        <button type="button" onclick="submitLogin();" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 font-medium text-sm px-5 py-2.5 mr-2 mb-2 rounded-lg w-full">Login</button>
                    </div>
                </form>
                <div>
                    <a href="index.php">
                        <button type="button" class="focus:outline-none text-white bg-yellow-600 hover:bg-yellow-800 font-medium text-sm px-5 py-2.5 mr-2 mb-2 w-full rounded-lg ">Back To Menu</button>
                    </a>
                </div>
                <div>
                    <center>
                        <p>Doesn't Have An Account? <a href="register.php" class="text-blue-600">Sign In</a></p>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <?php require 'script.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>