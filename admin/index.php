<?php
    session_start();
    include('connection.php');
    $errors = array(); 
        // LOGIN USER
    if (isset($_POST['login_user'])) {
      $username = mysqli_real_escape_string($link, $_POST['username']);
      $password = mysqli_real_escape_string($link, $_POST['password']);

      if (empty($username)) {
        array_push($errors, "Username is required");
      }
      if (empty($password)) {
        array_push($errors, "Password is required");
      }

      if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM idcard_admin WHERE username='$username' AND password='$password' AND status='active';";
        $results = mysqli_query($link, $query);
        if (mysqli_num_rows($results) == 1) {
          $row = mysqli_fetch_array($results);
          $_SESSION['username'] = $username;
          $_SESSION["login"] = true;
          $_SESSION["fname"] = $row['fname'];
          $_SESSION["lname"] = $row['lname'];
          $_SESSION["id"] = $row['id'];
          $_SESSION['success'] = "You are now logged in";
          header('location: home.php');
        }else {
          array_push($errors, "Wrong username/password combination");
        }
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - ID Service</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <?php include('./message.php'); ?>
                                        <form action="index.php" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" type="txt" placeholder="user name" name="username" />
                                                <label for="username">User Name</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="enter_email.php">Forgot Password?</a>
                                                <button class="btn btn-primary" name="login_user"> Login </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
