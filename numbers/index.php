<?php 

  $radius = 10; //integer
  $pi = 3.14;   //float because it has decimal point

  //basic operators - *, /, +, -, **    

  echo $pi * $radius**2; 

  //order of operation (B I D M A S) >>> B - Brackets first, I - Indicies **, D - division, M - multiplication, A - addition, S - subtraction

  echo 2 * (4 + 8) / 3; // >>> 2 * 12 / 3 >>> 2* 4 >>> 8

  //increment & decrement operators
  echo $radius++; //10  it first echoes radius then increments it
  echo $radius;   //11  here radius is incremented so it will be 11
  echo $pi--;
  echo $pi;


  //shorthand operators
  $age = 20;
  $age += 10;   //can also be used -= , *=, /=
  echo $age; //30


  //number functions
  echo floor($pi); //3   it floors it to nearest lower integer

  echo ceil($pi);  //4   it ceils the value up to nearest integer

  echo pi(); //echoes longer PI version, this is built in function
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
  
</body>
</html>