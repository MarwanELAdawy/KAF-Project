<?php
function login()
{


  $errors = array();
  global $conn;
  print_r($_POST);
  if (isset($_POST['submit_login'])) {
    print_r($_POST);

    echo "here login";
    if (empty($_POST['password'])) {

      array_push($errors, 'a password is required <br>');
    }
    if (empty($_POST['name'])) {

      array_push($errors, 'A user name or email is required <br>');
    }
    print_r($errors);
    if (!array_filter($errors)) {

      $email_username = mysqli_real_escape_string($conn, $_POST['name']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);
      $sql = "SELECT * FROM  user WHERE user_name='$email_username' AND user_password='$password'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) == 1) {

        setcookie('user_name', $email_username, time() + 86400);
      } else {

        echo 'you went wrong ';
      }
    }
    header("Location:index.php");
  }
}
function logout()
{
  if (isset($_GET['logout'])) {
    setcookie('user_name', $_COOKIE['user_name'], time() - 86400);
    header("Location:index.php");
  }
}
function sign_up()
{
  print_r($_POST);
   global $conn,$errors;
   if (isset($_POST['submit_sign_up'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $phone= mysqli_real_escape_string($conn, $_POST['phone']);
    if (empty($_POST['full_name'])) {
      array_push($errors, 'A full name is required <br>');
    }
    else if (empty($_POST['email'])) {
      array_push($errors, 'An email is required <br>');
    } else if (empty($_POST['password'])) {
      array_push($errors, 'a password is required <br>');
    } else if (empty($_POST['user_name'])) {
      array_push($errors, 'A user name is required <br>');
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      array_push($errors, 'email must be a valid email address <br>');
    }
     else {
      echo "here1";

      $user_check_query = "SELECT * FROM user WHERE user_name='$user_name' OR user_email='$email' LIMIT 1";
      $result = mysqli_query($conn, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      echo mysqli_error($conn);
      if ($user) {
        if ($user_name == $user['user_name']) {
          array_push($errors, 'your user name already exits');
        } else {
          array_push($errors, 'this email already exits');
        }
      }
    }
    if (!count($errors)) {
     // echo "here2";
      $sql = "INSERT INTO user(user_name,user_phone,user_email,user_password,user_full_name) VALUES('$user_name','$phone','$email','$password','$full_name')";
      $result = mysqli_query($conn, $sql);
      if (!$result) {
        echo mysqli_error($conn);
      } else {
        setcookie("user_name", $user_name,time()+86400);
      }
    } else {
     // echo "here3";
     print_r($errors);
    }
   
    header("Location:index.php");

  }
}