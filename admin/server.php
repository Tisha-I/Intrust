
<?php    
    session_start();

    // initializing variables

    $admin = $_SESSION["id"];
    $fname = "";
    $lname = "";
    $username = "";
    $email    = "";
    $errors = array(); 

    // connect to the database
    $link = mysqli_connect('localhost', 'root', '', 'id_card_service_db');

    // REGISTER USER
    if (isset($_POST['submit'])) {
      // receive all input values from the form
        $fname = mysqli_real_escape_string($link, $_POST['fname']);
        $lname = mysqli_real_escape_string($link, $_POST['lname']);
          $username = mysqli_real_escape_string($link, $_POST['username']);
          $email = mysqli_real_escape_string($link, $_POST['email']);
          $password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
          $password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

          // form validation: ensure that the form is correctly filled ...
          // by adding (array_push()) corresponding error unto $errors array
          if (empty($fname)) { array_push($errors, "First name is required"); }
          if (empty($lname)) { array_push($errors, "Last Name is required"); }
          if (empty($username)) { array_push($errors, "Username is required"); }
          if (empty($email)) { array_push($errors, "Email is required"); }
          if (empty($password_1)) { array_push($errors, "Password is required"); }
          if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
          }

      // first check the database to make sure 
      // a user does not already exist with the same username and/or email
      $user_check_query = "SELECT * FROM idcard_admin WHERE username='$username' OR email='$email' LIMIT 1";
      $result = mysqli_query($link, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      
      if ($user) { // if user exists
        if ($user['username'] === $username) {
          array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
          array_push($errors, "email already exists");
        }
      }

      // Finally, register user if there are no errors in the form
      if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO  idcard_admin (`fname`, `lname`, `username`, `password`, `email`, `registered_by`) VALUES('$fname', '$lname', '$username', '$password', '$email','$admin');";;
        mysqli_query($link, $query);
        // $_SESSION['username'] = $username;
        // $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
      }
    }
?>