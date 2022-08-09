<?php
include_once('header.php');
include_once('footer.php');
include_once('nav.php');
session_start();
// Define variables and initialize with empty values
$fileName = "login.txt";
$username = $password = $confirm_password = "";
$usernameErr = $passwordErr = $passConfirmErr = "";

// Processing form data when form is submitted
if(isset($_POST["submitButton"])){

    // Validate username
    if(empty(trim($_POST["username"]))){
        $usernameErr = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9]+$/', trim($_POST["username"]))){
        $usernameErr = "Username can only contain upper/lower case letters and digits only";
    } else{
        // Prepare a select statement
        echo "Username is in correct format";
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $passwordErr = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 4){
        $passwordErr = "Password must have atleast 6 characters.";
    }elseif (!preg_match('/^[a-z]+[0-9]+$/',trim($_POST["password"]))) {
        $passwordErr = "Password must have at least 1 number and 1 letter";
    }
     else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $passConfirmErr = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($passwordErr) && ($password != $confirm_password)){
            $passConfirmErr = "Password did not match.";
        }
    }

    if(empty($usernameErr) && empty($passwordErr) && empty($passConfirmErr))
    {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $text = $username . ":" . $password . "\n";
      $f = fopen("login.txt", "a+");
        if(fwrite($f, $text))  {
            echo 'saved';
        }
    fclose ($f);
    }
?>
<html lang="en" dir="ltr">
<!-- Meta data required for the browser -->
  <head>
    <meta charset="utf-8">
    <title>Basic Webpage</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <script src="project.js">
  </script>
<body onload="getCurrentDate();">

<div class="body">
  <div class="wrapper">
      <h2>Sign Up</h2>
      <p>Please fill this form to create an account.</p>
      <form action="createAcc.php" method="post">
          <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
              <span class="invalid-feedback"><?php echo $usernameErr; ?></span>
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
              <span class="invalid-feedback"><?php echo $passwordErr; ?></span>
          </div>
          <div class="form-group">
              <label>Confirm Password</label>
              <input type="password" name="confirm_password" class="form-control
              <?php echo (!empty($passConfirmErr)) ? 'is-invalid' : ''; ?>
              "value="<?php echo $confirm_password; ?>">
              <span class="invalid-feedback"><?php echo $passConfirmErr; ?></span>
          </div>
          <div class="form-group">
              <input type="submit" class="submit" value="Submit">
          </div>
          <p>Already have an account? <a href="petGiveAway.php">Login here</a>.</p>
      </form>
  </div>
</div>
  </body>
</html>
