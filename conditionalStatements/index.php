<?php
//conditional statements
$price = 20;

if ($price < 10) {
  echo "The condition is met." . '<br/>';;
} elseif ($price < 20) {
  echo "elseif condition met" . '<br/>';;
} else {
  echo "Condition NOT met." . '<br/>';;
}


$products = [
  ['name' => 'shiny star', 'price' => 20],
  ['name' => 'green shell', 'price' => 10],
  ['name' => 'red shell', 'price' => 15],
  ['name' => 'gold coin', 'price' => 5],
  ['name' => 'lightning bolt', 'price' => 40],
  ['name' => 'banana skin', 'price' => 2]
];


foreach ($products as $product) {
  if ($product['price'] < 15 && $product['price'] > 2) {
    echo $product['name'] . ' has price lesser than 15 and higher than 2' . '<br/>';
  }

  if ($product['price'] > 20 || $product['price'] < 10) {
    echo $product['name'] . ' has price higher than 20 OR lower than 10' . '<br/>';
  }
}




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

  <div>
    <ul>
      <?php
      foreach ($products as $product) {
        if ($product['price'] > 15) {  ?>
          <li><?php echo $product['name'] ?></li>
      <?php   }
      } ?>
    </ul>
  </div>

</body>

</html>