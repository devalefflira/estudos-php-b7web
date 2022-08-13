<?php
    echo "<h1>Exercício 01</h1>"."<br/>";
    echo "<p>Imprima na tela 10 '-' na vertical (colunas);</p>"."<br/>";
    echo "<p>Imprima na tela 10 '-' na horizontal (linhas);</p>"."<br/>";

    $valor = 0;
    while ($valor < 10) {
      for ($valores = 0; $valores < 10; $valores++) {
        echo "-";
      }
      echo "<br/>";
      $valor++;
    }
    