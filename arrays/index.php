<?php

//indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];

echo $peopleOne[1];   //crystal

$peopleTwo = array('ken', 'chun-li');  //creating array with a function
echo $peopleTwo[0]; //ken

$ages = [20, 30, 40, 50];
//echo $ages;   //returns error "Warning: Array to string conversion so that is why we will use vvv

print_r($ages);

$ages[1] = 31;  //changes value 30 to 31 in array

$ages[] = 60;  //this is how we ADD NEW ELEMENT TO THE ARRAY

array_push($ages, 70);  //PUSH new element to array we want in first parameter

$peopleThree = array_merge($peopleOne, $peopleTwo);   //merges two arrays




//associative arrays (key & value pairs)

$ninjasOne = ['shaun' => 'black', 'jake' => 'blue', 'luigi' => 'brown'];

print_r($ninjasOne);
echo $ninjasOne['jake'];  //blue


$ninjasTwo = array('bowser' => 'green', 'yoshi' => 'yellow');

$ninjasTwo['toad'] = 'pink'; //we can add a new key value pair like this

$ninjasTwo['toad'] = 'black';  //we can OVERRIDE like this also



//multidimensional arrays >>> arrays with arrays inside them

$blogs = [
  ['mario party', 'mario', 'lorem', 30],
  ['mario kart', 'toad', 'lorem', 25],
  ['zelda hidden chests', 'link', 'lorem', 50]
];

print_r($blogs[1][0]);


//to make more sense they should be made like this vvv
$blogsTwo = [
  ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
  ['title' => 'mario kart', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
  ['title' => 'zelda hidden chests', 'author' => 'link', 'content' => 'lorem', 'likes' => 50]
];
echo $blogsTwo[2]['author']; //returns link

$blogsTwo[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'added', 'likes' => 50];   //adding new element to array

$popped = array_pop($blogsTwo);  //removes last element from array
print_r($popped);   //['title' => 'castle party', 'author' => 'peach', 'content' => 'added', 'likes' => 50];

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