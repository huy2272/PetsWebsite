<!DOCTYPE html>
<?php
include_once('header.php');
include_once('footer.php');
include_once('nav.php');
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
    <h3>Pets Available For Adoption</h3>
      <fieldset>
        <legend>Luna</legend>
        <table>
          <tr>
            <td rowspan="5"> <img src="Images\Luna_GermanShepherd.jfif" alt="Luna_GermanShepherd" class="petsAdoption"></td>
            <th>Is the animal a dog or a cat ?</th>
            <td>Dog</td>
          </tr>
          <tr>
            <th>The breed of the animal: </th>
            <td>German Shepherd</td>
          </tr>
          <tr>
            <th>Age of the animal: </th>
            <td>1 year old</td>
          </tr>
          <tr>
            <th>Sex: </th>
            <td>Male</td>
          </tr>
          <tr>
            <th>Good with: </th>
            <td>Other dogs, other cats</td>
          </tr>
          <tr>
            <td></td>
            <td><input type="button" value="Interested"></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend>Cookie</legend>
        <table>
          <tr>
            <td rowspan="5"> <img src="Images\Cookie_EnglishBulldog.jpg" alt="Cookie_EnglishBulldog" width="100px" class="petsAdoption"></td>
            <th>Is the animal a dog or a cat ?</th>
            <td>Dog</td>
          </tr>
          <tr>
            <th>The breed of the animal: </th>
            <td>English Bulldog</td>
          </tr>
          <tr>
            <th>Age of the animal: </th>
            <td>4 years old</td>
          </tr>
          <tr>
            <th>Sex: </th>
            <td>Female</td>
          </tr>
          <tr>
            <th>Good with: </th>
            <td>Other dogs</td>
          </tr>
          <tr>
            <td></td>
            <td><input type="button" value="Interested"></td>
          </tr>
        </table>
      </fieldset>
      <fieldset>
        <legend>Dusty</legend>
        <table>
          <tr>
            <td rowspan="5"> <img src="Images\Dusty_BritishShorthair.jfif" alt="Dusty_BritishShorthair" class="petsAdoption"> </td>
            <th>Is the animal a dog or a cat ?</th>
            <td>Cat</td>
          </tr>
          <tr>
            <th>The breed of the animal: </th>
            <td>British Short Hair</td>
          </tr>
          <tr>
            <th>Age of the animal: </th>
            <td>2 years old</td>
          </tr>
          <tr>
            <th>Sex: </th>
            <td>Male</td>
          </tr>
          <tr>
            <th>Good with: </th>
            <td>Children</td>
          </tr>
          <tr>
            <td></td>
            <td><input type="button" value="Interested"></td>
          </tr>
        </table>
      </fieldset>
      </select><br/>
    </div>
  </div>
  <script src="project.js">
  </script>
</body>
</html>
