<?php

include('./ninjas.php');  //this will import ninjas file here, displays error but runs code to the end
require('./ninjas.php');  //does the same thing as include BUT if this file does not exist it will display an error and stop code execution - FATAL ERROR

echo 'end of php';

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

  include('./content.php');
  include('./content.php');
  include('./content.php');


  ?>
</body>

</html>