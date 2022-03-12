<?php
//LOOPS

$ninjas = ['shaun', 'ryu', 'yoshi'];

//for
for ($i = 0; $i < count($ninjas); $i++) {
  echo $ninjas[$i] . '<br />';
}



//foreach
foreach ($ninjas as $ninja) {
  echo $ninja  . '<br />';
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
  echo $product['name'] . ' - ' . $product['price'];
  echo '<br/>';
}




//while loop
$i = 0;
while ($i < count($products)) {
  echo $products[$i]['name'];
  echo '<br/>';
  $i++;
}

//break and continue

foreach ($products as $product) {
  if ($product['name'] === 'lightning bolt') {
    echo 'BREAK';   //when it reaches lightning bolt it will break the loop and it will not echo the product
    break;
  }
  if($product['price'] > 15){
    continue;       //continue stops the code here and goes back to the foreach and starts the loop with next product, so that product which has price higher than 15 will not be echoed here in this code
  }

  echo $product['name'] . '<br/>';
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

  <h1>Products</h1>
  <ul>
    <?php
    foreach ($products as $product) { ?>
      <h3>
        <?php echo $product['name']; ?>
      </h3>
      <p>
        <?php echo $product['price']; ?>
      </p>
    <?php
    }
    ?>
  </ul>

  <!-- When we use loop inside HTML we use it in example shown above -->


</body>

</html>