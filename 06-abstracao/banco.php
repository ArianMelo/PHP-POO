<?php 

// Método abstract gera a obrigatoriedade das classes que a extenderão a implementar a função dentro da classe.

abstract class Banco {

   protected $saldo;
   protected $depositar;
   protected $sacar;

   abstract public function Sacar($s);
   abstract public function Depositar($d);
}

class Banco1 extends Banco {
   
   public function Sacar($s) {
      $this->saldo -= $s;
   }

   public function Depositar($d) {
      $this->saldo += $d;
   }

   public function setSaldo($s) {
      $this->saldo = $s;
   }

   public function getSaldo() {
      return $this->saldo;
   }
}

class Banco2 extends Banco {
   public function Sacar($s) {
      $this->saldo -= $s;
      echo "<hr> Sacou: ".$s;
   }

   public function Depositar($d) {
      $this->saldo += $d;
   }
}

/*
class Bradesco extends Banco {
   public function Depositar() {
      echo "Depositar!";
   }
}
*/

$banco1 = new Banco1();
$banco2 = new Banco2();
$banco1->setSaldo(1000);
$banco1->Depositar(1000);
echo "<hr> Saldo: ".$banco1->getSaldo();

include_once "banco.php";