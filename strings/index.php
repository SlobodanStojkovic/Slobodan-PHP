<?php
  $stringOne = "my email is ";
  $stringTwo = "mario123@thenetninja.co.uk";

  echo $stringOne.$stringTwo; //this can be also written with space between dot   echo $stringOne . $stringTwo;
  //this is how we concatenate two strings

  $name = "Mario";
  echo 'Hey, my name is ' . $name;

  echo "Hey my name is $name"; //when we use double quotes we can do it like this, inside the double quotes

  echo "the ninja screamed \"whaaaaa\"";    // we use \ as an escape character,

  echo 'the ninja screamed "whaaaaa"';    //we can combine quotes like this

  echo $name[1];   //gives out second character, which has index 1

  echo strlen($name);  //5   this is how we access string length

  echo strtoupper($name);  //MARIO   name to UPPERCASE

  echo strtolower($name);  //MARIO   name to LOWERCASE

  echo str_replace('a', 'e', $name);
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
  <?php

  ?>
</body>

</html>