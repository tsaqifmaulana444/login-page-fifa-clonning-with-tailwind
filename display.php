<?php
require 'function.php';
if(!isset($_SESSION["id"])){
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        font-family: Georgia, 'Times New Roman', Times, serif;
      }
    </style>
</head>
<body>
  <section style="width: auto; height: 695px; background-image: url(/img/bernabeu.jpg); background-size: cover;">
  <center>
    <div class="mt-40 absolute z-50 ml-[20%]">
      <h1 class="text-white text-5xl">Welcome, <?php echo $_SESSION["id"]; ?></h1>
      <br><br><br>
      <p class="text-white text-5xl">Gamenya belum dibuat cuy! logout aja</p>
      <a href="logout.php" class="text-white text-5xl"><button class="">Logout</button></a>
    </div>

  </center>
  <div style="opacity: 0.7; background-color: #000; width: auto; height: 695px;"></div>
  </section>
</body>
</html>