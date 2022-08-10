<?php
include_once('header.php');
include_once('footer.php');
include_once('nav.php');

$user_input = $_POST["username"];
$password_input = $_POST["password"];

$file = fopen('login.txt', 'r');

while(!feof($file)){
$line = fgets($file);
list($user, $password) = explode(':', $line);
if(trim($user) == $user_input && trim($password) == $password_input){
$success = "Signed in succesfully";
//If login successfull, start session
session_start();
}else {
echo "Invalid Login Credentials";
}
break;
}
fclose($file);
?>

<!DOCTYPE html>

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
<?php
// Define variables and initialize with empty values
$username = $password = "";
$usernameErr = $passwordErr = $login_err = "";


// Processing form data when form is submitted
if(isset($_POST["submitButton"])){

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

}
?>
  <div class="body">
        <div class="logIn">
          <h2>Sign in</h2>
          <p>Please log in to give away pets</p>

            <?php
            if(!empty($login_err)){
                echo '<div class="loginErr">' . $login_err . '</div>';
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
