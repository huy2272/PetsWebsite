
<?php
include_once('header.php');
include_once('footer.php');
include_once('nav.php');
session_start();


// // Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("signIn.php");
//     exit;
// }

// Define variables and initialize with empty values
$fileName = "petsInfo.txt";
$username = $password = $confirm_password = "";
$usernameErr = $passwordErr = $passConfirmErr = "";

// Processing form data when form is submitted
if(isset($_POST["submitButton"])){
      $animalType = $_POST["animalType"];
      $breed = $_POST["breed"];
      $gender = $_POST["gender"];
      $Name = $_POST["Name"];
      $famName = $_POST["famName"];
      $username = $_SESSION["username"];
      $text = $username.":".$animalType.":".$breed.":".$gender.":".$Name.":".$famName. "\n";
      $f = fopen($fileName, "w");
      fwrite($f,$text);
      fclose($f);
    }

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

  <div class="body">
    <form name="UserDetailForm" action="petGiveAway.php" onsubmit="validateFormGiveAway()" method="post">
    <h2>Have a pet to give away</h2>
    <!-- Dog or Cat -->
    <label for="animalType">Is your animal a dog or a cat</label>
    <select id="animalType">
    <option value="LE">Cat</option>
    <option value="OE">Dog</option>
    </select><br/>
    <!-- Breed of dog or cat -->
    <label for="breed">Enter the breed of the dog or cat </label>
    <input type="text" name="answer_a" id="breed"><br/>
    <table>
    <!-- dogType and catType have same name but different ID, so that only one breed can be selected at a time -->
    <tr>
      <td>
        <label>Or pick the breed of your animal below</label>
      </td>
    </tr>
    <tr>
      <td><input type="radio" name="answer_f" id="bulldog">
      <label for="bulldog">Bulldog</label>
      <input type="radio" name="answer_f1" id="germanShep">
      <label for="germanShep">German Shepherd</label>
      <input type="radio" name="answer_f2" id="goldenRetriever">
      <label for="goldenRetriever">Golden Retriever</label></td>
    </tr>
    <tr>
      <td><input type="radio" name="answer_g" id="persian">
      <label for="persian">Persian</label>
      <input type="radio" name="answer_g1" id="maineCoon">
      <label for="maineCoon">Maine Coon</label>
      <input type="radio" name="answer_g2" id="siamese">
      <label for="siamese">Siamese</label></td>
    </tr>
    <tr>
      <td><input type="radio" name="answer_h" id="mixed">
      <label for="mixed">Mixed Breed</label>
      </td>
    </tr>
    </table>
    <!-- Age of animal -->
      <label for="age">Age of animal</label>
      <select id="age">
        <option value="LE">Less than 2</option>
        <option value="OE">Over 2</option>
        <option value="NA">I do not know</option>
      </select><br/>
      <label for="gender">Gender of your animal</label>
      <select id="gender">
        <option value="LE">Male</option>
        <option value="OE">Female</option>
      </select><br/>
      <p>Which of these options does your animal get along with? (Can select more than one)</p>
      <input type="radio" name="answer_x" id="behaviorDogs">
      <label for="behaviorDogs">Get along with other dogs</label>
      <input type="radio" name="answer_y" id="behaviorCats">
      <label for="behaviorCats">Get along with other cats</label>
      <input type="radio" name="answer_z" id="behaviorChildren">
      <label for="behaviorChildren">Suitable for a family with small children</label><br/>
      <br><label for="comment">Please give a description of the animal you are putting up for adoption</label><br/>
      <textarea name="answer_b" id="comment" rows="4" cols="50"></textarea><br/>
      <p>Please enter your information below:</p><br>
      <label for="Name" >First Name</label>
      <input name="answer_c" type="text" id="Name"><br>
      <label for="famName">Family Name</label>
      <input name="answer_d" type="text" id="famName"><br>
      <label for="Email">Enter your e-mail</label>
      <input name="answer_e" type="email" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br/>
      <br/>

      <input type ="submit" name="submitButton" value="Submit Form">
      <input type="reset" value="Reset Form">
    </form>
  </div>
  <script src="project.js">
  </script>
</body>
</html>
