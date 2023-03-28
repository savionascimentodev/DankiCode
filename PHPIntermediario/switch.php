<?php

// ! Switch é uma estrutura de condição que define o código a ser executado com base em uma comparação de valores;

$idade = 20;

switch ($idade) {
  case $idade >= 0:
    echo 'Menor de Idade';
    break;
  case $idade >= 18:
    echo 'Adolescente';
    break;
  case $idade > 30:
    echo 'Adulto';
    break;
  case $idade > 50:
    echo 'Velho';
    break;
  default:
    echo 'Error';
    break;
}
