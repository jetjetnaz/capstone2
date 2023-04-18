<?php

session_start();

if(isset($_SESSION['role'])){
  // check if the role is set
  if($_SESSION['role'] == "admin"){
    header("location:dashboard.php");
  }

  if($_SESSION['role'] == "receptionist"){
    header("location:userview.php");
  }
}

include './config/connection.php';
$message = '';

if (isset($_POST['login'])) {
  $userName = $_POST['user_name'];
  $password = $_POST['password'];

  $encryptedPassword = md5($password);

  // exit($encryptedPassword);

  $query = "SELECT `id`,`role`, `display_name`, `user_name`, `profile_picture` FROM `users` WHERE `user_name` = '$userName' AND  `password` = '$encryptedPassword';";

  try {
    $stmtLogin = $con->prepare($query);
    $stmtLogin->execute();

    $count = $stmtLogin->rowCount();
    if ($count == 1) {
      $row = $stmtLogin->fetch(PDO::FETCH_ASSOC);

      $_SESSION['user_id'] = $row['id'];
      $_SESSION['display_name'] = $row['display_name'];
      $_SESSION['role'] = $row['role'];
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['profile_picture'] = $row['profile_picture'];
      
      // check the type of roles then redirect to the page accordingly
      if ($_SESSION['role'] == "admin") {
        header("location:dashboard.php");
      }

      if ($_SESSION['role'] == "receptionist") {
        header("location:userview.php");
      }
      
      exit;
    } else {
      $message = 'Incorrect username or password.';
    }
  } catch (PDOException $ex) {
    echo $ex->getTraceAsString();
    echo $ex->getMessage();
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Kidney Care and Dialysis Center</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    .login-box {
      width: 430px;
    }

    #system-logo {
      width: 5em !important;
      height: 5em !important;
      object-fit: cover;
      object-position: center center;
    }
  </style>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body class="hold-transition login-page blue-mode">
  <div class="login-box">
    <div class="login-logo mb-4">
      <img src="logo1.jpg" class="img-thumbnail p-0 border rounded-circle" id="system-logo">
      <div class="text-center h2 mb-0">Kidney Care and Dialysis Center</div>
    </div>
    <!-- /.login-logo -->
    <div class="card card-outline card-primary rounded-0 shadow">
      <div class="card-body login-card-body">
        <h4>
          <p class="login-box-msg">Welcome! Please login to your account</p>
        </h4>

        <form method="post">

          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg rounded-0 autofocus" placeholder="Username" id="user_name" name="user_name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control form-control-lg rounded-0" placeholder="Password" id="password" name="password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Ld3UXwkAAAAAHQ0x0UCGVsNGPVtQtvz6X0131BF"></div>
          </div>
          <div class="row">
            <div class="col-12">
              <button name="login" id="login" type="submit" class="bg-orange btn btn-primary rounded-0 btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="text-danger">
                <?php
                if ($message != '') {
                  echo $message;
                }
                ?>
              </p>
            </div>
          </div>

        </form>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->

</body>

</html>
<script>
  $(document).on('click', '#login', function() {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
      alert("Please verify that you are not a robot");
      return false;
    }

  });
</script>