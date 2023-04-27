<?php
// Use the Console / Terminal for this exercise! 
$number = rand(1, 30); //that's inclusive
$guess = null;
echo $number . "\n\n";

while ($guess != $number) {
  $guess = readline('Adivinhe um número entre 1 e 30: ');

  if ($number == $guess) {
    echo "Acertou! Parabéns!. \n\n";
  } else {
    echo "Número errado, tente novamente. \n\n";
  }
}

die();
