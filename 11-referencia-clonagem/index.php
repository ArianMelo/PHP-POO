<?php

// Referência e Clonagem de objetos

class Pessoa {
   public $idade;
   public function __clone() {
      echo "Clonagem de objetos ";
   }
}

$pessoa = new Pessoa();
$pessoa->idade = 24;

$pessoa2 = clone $pessoa;// Clona o Objeto pessoa, não é apenas uma referência.
$pessoa2->idade = 32;

echo $pessoa->idade;