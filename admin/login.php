<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.14
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST["username"]) && isset($_POST["password"])) {

    if (empty(trim($_POST["username"]))){
      $username_error = "Please enter your Username.";
    } else {
      $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))){
      $password_error = "Please enter your Password.";
    } else {
      $password = trim($_POST["password"]);
    }

    if (isset($username) && isset($password)) {

      require_once("../includes/conn-start.php");

      // prepare a statement
      $sql = "SELECT id, username, password FROM users WHERE username = ?";

      if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $username);

        if ($stmt->execute()) {
          $stmt->store_result();

          if( $stmt->num_rows === 1) {
            $stmt->bind_result($id, $username, $hashed_password);

            if ($stmt->fetch()) {
              if (password_verify($password, $hashed_password)) {
                session_start();
                $_SESSION["username"] = $username;

                if (isset($_GET["ret"])) {
                  header("location: " . $_GET["ret"]);
                } else {
                  header("location: ./");
                }
              } else {
                $password_error = "This password is not valid";
              }
            }

          } else {
            $username_error = "This username is not valid";
          }
        }
        $stmt->close();

      } else {
        die("Statement error: " . $conn->error);
      }

      require_once("../includes/conn-end.php");
    }
  }
}
?>
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="vendors/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="vendors/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    </script>
  </head>
  <body class="app flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
              <div class="card p-4">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-muted">Sign In to your account</p>
                  <form method="POST">
                    <div class="text-danger"><?= isset($username_error) ? $username_error : "" ?></div>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-user"></i>
                        </span>
                      </div>
                      <input id="username" name="username" value="<?= isset($username) ? $username : "" ?>" class="form-control <?= isset($username_error) ? "is-invalid" : "" ?>" type="text" placeholder="Username">
                    </div>
                    <div class="text-danger"><?= isset($password_error) ? $password_error : "" ?></div>
                    <div class="input-group mb-4">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="icon-lock"></i>
                        </span>
                      </div>
                      <input id="password" name="password" class="form-control <?= isset($password_error) ? "is-invalid" : "" ?>" type="password" placeholder="Password">
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <button class="btn btn-primary px-4" type="submit">Login</button>
                      </div>
                      <div class="col-6 text-right">
                        <button class="btn btn-link px-0" type="button">Forgot password?</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/jquery/js/jquery.min.js"></script>
    <script src="vendors/popper.js/js/popper.min.js"></script>
    <script src="vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/pace-progress/js/pace.min.js"></script>
    <script src="vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="vendors/@coreui/coreui/js/coreui.min.js"></script>
  </body>
</html>
