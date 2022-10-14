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
    <title>Register</title>
  </head>
  <body class="overflow-hidden">
  <section class="bg-slate-600">
  <div class="bg-grey-lighter min-h-screen flex flex-col relative">
    <div class="container max-w-lg mx-auto flex-1 flex flex-col items-center justify-center px-2">
      <div class="bg-slate-300 px-7 py-8 rounded shadow-gray-500 shadow-l text-black w-full">
          <img src="img/logoearound.png" alt="" class="w-14 ml-48 pb-3 box-border	">
          <h1 class="mb-8 text-4xl text-center">EA Account Sign Up</h1>
          <input type="hidden" id="action" value="register">

          <a href="">
            <button class="flex w-full bg-white py-2.5 px-2.5 rounded">
              <img src="img/search.png" alt="" class="w-8 ml-0.5">
              <p class="font-semibold text-lg text-gray-600 ml-4 mt-0.5">Sign Up With Google</p>    
            </button>
          </a>
          

          <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4 mt-4" id="username" value="" placeholder="Username" autocomplete="off" required/>

          <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" id="gmail" value="" placeholder="Gmail" autocomplete="off" required/>

          <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" id="password" value="" placeholder="Password" required />

          <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" id="password2" placeholder="Confirm Password"  required/>

          <button type="submit" onclick="submitData()" class="w-full text-center py-3 rounded bg-green-600 text-white hover:bg-green-900 ease-in focus:outline-none my-1">Create Account</button>

          <div class="text-center text-sm text-gray-900 mt-4">
            By signing up, you agree to the 
            <a class="no-underline border-b border-gray-dark text-blue-600" href="#">
              Terms of Service
            </a> and 
            <a class="no-underline border-b border-gray-dark text-blue-600" href="#">
              Privacy Policy
            </a>
          </div>
            
          <div class="text-grey-dark mt-5 ml-3.5">
             Already have an account? 
            <a class="no-underline border-b border-blue text-blue-600" href="login.php">Log in</a>.
          </div>
        </div>
      </div>
  </div>
  </section>
    <?php require 'script.php'; ?>
    <script src="https://cdn.tailwindcss.com"></script>
  </body>
</html>
<!--

-->