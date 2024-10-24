<?php 

// Método abstract gera a obrigatoriedade das classes que a extenderão a implementar a função dentro da classe.

abstract class Animal {
   abstract public function Latir();
}

class Dog extends Animal {
   public function Latir() {
      echo "Au au!";
   }
}

/*
class Bradesco extends Banco {
   public function Depositar() {
      echo "Depositar!";
   }
}
*/

$cachorro = new Dog();
$cachorro->Latir();

include_once "banco.php";