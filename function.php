<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "login-game");
// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $username = $_POST["username"];
  $gmail = $_POST["gmail"];
  $password = $_POST["password"];
  $password2 = $_POST["password2"];

  if(empty($username) || empty($gmail) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM signindata WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username Has Already Taken";
    exit;
  }

  if($password !== $password2){
    echo 'password does not match! ';
    exit;
}
  
  $query = "INSERT INTO signindata (username,gmail,password)VALUES('$username', '$gmail', '$password')";
  mysqli_query($conn, $query);
  echo "Success";
 
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM signindata WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Login Successful";
      $_SESSION["id"] = $username;
    }else{
      echo "Wrong Password";
      exit;
    }
  }else{
    echo "User Not Registered";
    exit;
  }
}
?>