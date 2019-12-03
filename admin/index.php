<?php include '../includes/dp.php'; ?>
<?php
$success=array();
function add_user()
{
   //  print_r($_POST);
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
        array_push($success,'your user has been added');
      }
    } else {
     // echo "here3";
     print_r($errors);
    }
   
    header("Location:index.php");

  }
}
add_user();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KAF</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bangers|Courgette|Hind+Guntur|Paytone+One|Ultra&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!--st Sidebar -->

        <?php include '../includes/sidebar.php'; ?>
        <!-- en Sidebar -->

        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->

        <div id="page-content-wrapper">

        <?php include '../includes/topnav.php'; ?>

            <div class="container mt-3">
                <?php if (isset($_GET['add_clinic'])) {
                    include 'add_category.php';
                }
                else if (isset($_GET['clincs']))
                {
                    include 'clincs.php';
                }
                else if (isset($_GET['add_doctor']))
                {
                    include 'add_doctor.php';
                }
                else if (isset($_GET['doctor']))
                 {
                include 'doctor.php';
                 }
                 else if (isset($_GET['add_user']))
                 {
                     include 'add_user.php';
                 }
                 else if (isset($_GET['users']))
                 {
                       include 'users.php';
                 }
                ?>


            </div>
            <!-- /#wrapper -->

            <!-- Bootstrap core JavaScript -->

            <!-- Menu Toggle Script -->

            <script src="/mathscribe/jquery-1.4.3.min.js"></script>
            <script src="/mathscribe/jqmath-etc-0.4.6.min.js" charset="utf-8"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>
            <script src="https://code.jquery.com/jquery-1.11.1.js" integrity="sha256-MCmDSoIMecFUw3f1LicZ/D/yonYAoHrgiep/3pCH9rw=" crossorigin="anonymous">
            </script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
            <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
            <script src="js/index.js"></script>
            <script>
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>