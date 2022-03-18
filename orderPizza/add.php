<?php

//isset function checks if certain value has been set >>> $_GET this is global array in php which store all data that is being sent to the server
/* if (isset($_GET['submit'])) {
  echo $_GET['email'];
  echo $_GET['title'];
  echo $_GET['ingredients'];
} */

/* XSS crossite scripting attacks >>> injecting malicios code into our site by entering javascript in our form fields, code is injected in script tags and it will be executed when submited to our server*/
/* To prevent these attacks we are going to use html special chars function htmlspecialchars()  >>> It takes that data and turns that data into html entities*/


if (isset($_POST['submit'])) {
  //check email
  if (empty($_POS['email'])) {
    echo 'An email is required <br />';
  } else {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo 'Email must be a valid email address';
    } 
  }

  //check title
  if (empty($_POS['title'])) {
    echo 'An email is required <br/>';
  } else {
    $title = $_POST['title'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
      echo 'Title must be letters and spaces only';
    }
  }

  //check ingredients
  if (empty($_POS['ingredients'])) {
    echo 'At least one ingredient is required <br />';
  } else {
    $ingredients = $_POST['ingredients'];
    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*$/', $ingredients)){
      echo 'Ingredients must be a comma separated list.';
    }
  }
} //end of POST check

?>

<!DOCTYPE html>
<html lang="en">

<?php
include('./templates/header.php')
?>

<section class="container grey-text">
  <h4 class="center">
    Add a Pizza
  </h4>
  <form action="add.php" class="white" method="POST">
    <!-- GET method data can be seen in address bar when its being sent, POST CANT be seen -->
    <label>Your Email:</label>
    <input type="text" name="email">
    <label>Pizza Title:</label>
    <input type="text" name="title">
    <label>Ingredients (comma separated):</label>
    <input type="text" name="ingredients">
    <div class="center">
      <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
    </div>
  </form>
</section>


<?php
include('./templates/footer.php')
?>


</html>