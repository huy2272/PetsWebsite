<?php
session_start();
include_once('header.php');
include_once('footer.php');
include_once('nav.php');

//Get all user inputs
$user_input = $_SESSION['username'];
$catOrDog_input = $_POST['answer_a'];
$breed_input = $_POST['answer_b'];
$age_input = $_POST['age'];
$gender_input = $_POST['gender'];

$file = fopen('petsInfo.txt', 'r');

//Find matching pets
while(!feof($file)){
$line = fgets($file);
list($user, $catOrDog, $breed, $age,$gender) = explode(':', $line);
if(trim($user) == $user_input && trim($catOrDog) == $catOrDog_input && trim($breed) == $breed_input && trim($age) == $age_input && trim($gender) == $gender_input){
$success = "Matching pet found";
//If login successfull, redirect to pet giveaway page
}else {
echo "No pets found";
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

<div class="body">
  <form name="UserDetailForm" action="#" onsubmit="validateForm()" method="post">
    <h2>Find a dog/cat</h2>
    <label for="type">Cat or dog</label>
    <input type="text" name="answer_a" id="type"><br/>

    <label for="breed">Breed of dog or cat</label>
    <input type="text" name="answer_b" id="breed"><br/>

    <label for="age">Preferred age of animal</label>
    <select id="age">
    <option value="LE">Less than 2</option>
    <option value="OE">Over 2</option>
    <option value="NA">Doesn't matter</option>
    </select><br/>

    <label for="gender">Preferred gender of animal</label>
    <select id="gender">
    <option value="LE">Male</option>
    <option value="OE">Female</option>
    <option value="NA">Doesn't matter</option>
    </select><br/>

    <p>Which of these options does your animal get along with? (Can select more than one)</p>
    <input type="radio" name="answer_c" id="behaviorDogs">
    <label for="behaviorDogs">Get along with other dogs</label>
    <input type="radio" name="answer_d" id="behaviorCats">
    <label for="behaviorCats">Get along with other cats</label>
    <input type="radio" name="answer_e" id="behaviorChildren">
    <label for="behaviorChildren">Suitable for a family with small children</label><br/>
    <br>
    <input type = "submit" value="Submit Form">
    <input type="reset" value="Reset Form">

</form>
</div>
<script src="project.js">
</script>
</body>
</html>
