<?php
$name = "Yoshi";   //variable has to start with letter or underscore, cant start with numbers or special characters
$age = 30;

$name = "Mario";


define("NAME", "constantNAME")    //this is how we make CONSTANTS
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>User Profile Page </h1>

  <div>
    <?php
    echo $name;
    ?>
  </div>

  <div>
    <?php
    echo NAME;
    ?>
  </div>

  <div>
    <?php
    echo $age;
    ?>
  </div>

</body>

</html>