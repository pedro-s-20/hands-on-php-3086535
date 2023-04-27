<?php
echo 'Create your list of choices: ' . "\n\n";

$choices = array();

do {
  $choices[] = readline('Fazer uma escolha? (digite 0 para parar)');
} while ('0' != end($choices));

array_pop($choices);
echo 'E a decisão é...' . $choices[array_rand($choices)];
