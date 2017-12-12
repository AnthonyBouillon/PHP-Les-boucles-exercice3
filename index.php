<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les boucles exercice 3</title>
  </head>
  <body>

<?php
$number = 100;
$number2 = rand(0, 99);
while($number >= 10){
  echo '<p>' .$number * $number2. ' ' .$number2. '</p>';
  $number--;
};
?>
  </body>
</html>
