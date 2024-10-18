<?php 

// Classe sempre com letra maiúscula;
class Pessoa {
   // Atributos
   public $nome;
   public $idade;

   // Métodos
   public function Falar() {
      // this: referencia ao atributo da propria classe.
      echo $this->nome." de ".$this->idade." anos, Falou <br>";
   }
}

$rodrigo = new Pessoa();
$rodrigo-> nome = "Rodrigo";
$rodrigo-> idade = 25;
$rodrigo->Falar();
echo "<br>";
var_dump($rodrigo);
echo "<br>";
echo $rodrigo->nome;