<?php
// Instanciando uma cosntante.
class Pessoa {
   const nome = "Rodrigo";

   public function exibirNome() {
      // sels: referencia a propria classe
      echo self::nome;
   }
}

class Rodrigo extends Pessoa {
   const nome = "Oliveira";

   public function exibirNome() {
      // parent: referencia a classe pai
      echo parent::nome;
   }
}

$pessoa = new Rodrigo();
$pessoa->exibirNome();