<?php

$ingredientes = [
  'Açúcar',
  'Farinha de Trigo',
  'Ovos',
  'Leite',
  'Fermento em Pó'
];

echo "<h2>Ingredientes</h2>";

foreach($ingredientes as $chave => $valor) {
  echo "Item ".($chave + 1).": ".$valor."<br/>";
}