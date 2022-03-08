<?php

//functions
function sayHello($name = 'shaun', $time = 'morning')
{
  echo "good $time $name";
}
sayHello("Jake", "day");


function formatProduct($product)
{
  return  "{$product['name']} costs \${$product['price']} to buy <br/>"; //we need to put inside curly braces to be able to access ['name']
}

$formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
echo $formatted;




//variable scope
//local vars

function myFunc()
{
  $price = 10;
  echo $price;
}
myFunc();


function myFuncTwo($age)
{
  echo $age;
}
myFuncTwo(23);
//echo $age;  //returns undefined variable $age because its declared inside function. Same is for the $price



$name = 'slobodan';
/* 
function sayHello2()
{
  echo "hello $name";   //cannot use $name from outside scope so it will be undefined
}
sayHello2(); */


function sayHello3()
{
  global $name; //to use globally declared $name inside function, so if we overwrite it in function it will be overwritten globally also
  echo "hello $name";
}
sayHello3();



/* function sayBye($name) {    
  echo "bye $name";
}
sayBye($name); */ //it will echo global name


/* function sayBye($name) {   
  $name = "changedName"; 
  echo "bye $name";
}
sayBye($name); */ //it will echo changed name but it will not change it globally


/* function sayBye(&$name) {   
  $name = "changedName"; 
  echo "bye $name";
}
sayBye($name); */ //it will echo changed name AND IT will change it globally, because we are passing in the value BY REFERENCE





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