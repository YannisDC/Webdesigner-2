<?php

$integer = 3;
$float = 10.1;
$string = "Hello World";
$char = "!";
$result = array(
    "voornaam" => "Yannis",
    "achternaam" => "De Cleene",
    "email" => "yannisdcl@gmail.com"
);

// echo $result["voornaam"];

if ($integer == 5) {
  echo "Het is een vijf";
} elseif ($integer == 4) {
  echo "Het is een vier";
} else {
  echo "Het is een ander getal <br>";
}

$dag = "feestdag";

switch ($dag) {
  case 'maandag':
    echo "Vandaag is het maandag";
    break;
  case 'dinsdag':
    echo "Vandaag is het dinsdag";
    break;
  case 'woensdag':
    echo "Vandaag is het woensdag";
    break;
  case 'donderdag':
    echo "Vandaag is het donderdag";
    break;
  case 'vrijdag':
    echo "Vandaag is het vrijdag";
    break;

  default:
    echo "Vandaag is het weekend <br>";
    break;
}



function countNumbers($aantal) {
  for ($x = 1; $x < $aantal+1; $x++) {
      echo "The number is: $x <br>";
  }
}

countNumbers(20);

?>
