<?php
//comparisons booleans (true or false)
echo true;  //returns "1"
echo false; //returns empty string ""
//because every time we echo something to browser it has to convert it to STRING


//numbers 
echo 5 < 10;    //1
echo 5 > 10;    //""
echo 5 == 10;   //""  loose comparison with ==
echo 10 == 10;  //1
echo 5 != 10;   //1
echo 5 <= 5;      //1
echo 5 >= 5;      //1

//strings
echo 'shaun' < 'yoshi';   //1 string comparison works by comparing first letter positions in alphabet
echo 'shaun' > 'yoshi';   //""
echo 'shaun' > 'Shaun';   //1 uppercase letter is seen LESSER than lowercase letter
echo 'mario' == 'mario';  //1
echo 'mario' == 'Mario';  //""



//loose vs strict equal comparison
echo 5 == '5';   //1     loose comparison
echo 5 === '5';  //""    strict comparison
echo 5 === 5;    //1

echo true == "1"; //1
echo false == ""; //1

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorials</title>
</head>

<body>


</body>

</html>