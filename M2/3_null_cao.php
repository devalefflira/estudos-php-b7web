<?php
/*
Chamar na tela a variável $nomeCompleto
com o sobrenome - se houver - ou sem.
*/
$nome = 'Aleff ';
$sobrenome = 'Lira';

//Simulando o erro:
/*
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;
echo $nomeCompleto;

Antes do PHP 7.4 a solução para corrigir o erro era essa abaixo:
$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
*/

// A partir do PHP 7.4 usa-se o Null CAO, vejamos:
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;