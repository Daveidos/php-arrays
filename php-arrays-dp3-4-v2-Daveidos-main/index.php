<?php

use Symfony\Component\ErrorHandler\Debug;

require_once __DIR__.'/vendor/autoload.php';

Debug::enable();

// Norādiet Jūsu vārdu uzvārdu un gruppu komentārā: Davids Slotovs DP3-4



//1 uzdevums

$productCategory = array(
  "Datortehnika" => array(
    "Portatīvie datori",
    "Peles" => array(
      "Vadu",
      "Bezvadu"
    ),
    "Printeri" => array(
      "Lazeru",
      "Tintes"
    ),
    "Monitori" => array(
      "Biroja",
      "Gaming",
      "Asus",
      "Lenovo"
    )
  ),
  "Mēbeles" => array(
    "Divāni",
    "Krēsli",
    "Galdi" => array(
      "Virtuves",
      "Istabas"
    )
  )
);

//2 uzdevums

echo 'Es gribu iegādāties ' . $productCategory['Datortehnika']['Portatīvie datori'] . ' un ' . $productCategory['Datortehnika']['Monitori']['Gaming'] . ' monitoru.';