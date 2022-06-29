<?php
require 'config.php';
if(isset($_POST["register"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];

  $user = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($user) > 0){
    echo
    "
    <script> alert('Username/Email Has Already Taken'); </script>
    ";
  }
  else{
    $query = "INSERT INTO tb_users VALUES('', '$name', '$username', '$email', '$password', '$phone')";
    mysqli_query($conn, $query);
    echo
    "
    <script> alert('Registration Successful'); </script>
    ";
  }
}
?>