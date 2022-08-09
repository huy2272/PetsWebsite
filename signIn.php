<!DOCTYPE html>
<?php
include_once('header.php');
include_once('footer.php');
include_once('nav.php');
// Initialize the session
session_start();
// Define variables and initialize with empty values
$fileName = "login.txt";
$username = $password = "";
$usernameErr = $passwordErr = $login_err = "";

//Check if the user is already logged in
//If yes go to petGiveAway page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("petGiveAway.php");
    exit;
}

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $usernameErr = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $passwordErr = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($usernameErr) && empty($passwordErr)){
        // Prepare a select statement
        $f = fopen($fileName, "r");
        $content = fread($f,"r");
        //Check if username exist
        if (strpos($content,$username)) {

        //If username exists, check password
            if(strpos($content, $password)){
                // Password is correct, so start a new session
                session_start();

                // Store data in session variables
                $_SESSION["loggedin"] = true;
                $_SESSION["id"] = $id;
                $_SESSION["username"] = $username;

                // Redirect user to welcome page
                header("petGiveAway.php");
            }else{$login_err = "Invalid password.";}
        } else{$login_err = "Invalid username";}
} else{echo "Oops! Something went wrong. Please try again later.";}
}
?>
<html lang="en" dir="ltr">
<!-- Meta data required for the browser -->
<head>
    <meta charset="utf-8">
    <title>Basic Webpage</title>
    <link rel="stylesheet" href="style.css">
    <script src="project.js">
    </script>
</head>

<body onload="getCurrentDate();">

  <div class="body">
        <div class="logIn">
          <h2>Sign in</h2>
          <p>Please log in to give away pets</p>

            <?php
            if(!empty($login_err)){
                echo '<div class="alert alert-danger">' . $login_err . '</div>';
            }
            ?>

            <form action="signIn.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $usernameErr; ?></span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $passwordErr; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
                <p>Don't have an account? <a href="createAcc.php">Sign up now</a>.</p>
            </form>
        </div>
  </div>
  <script src="project.js">
  </script>
</body>
</html>
