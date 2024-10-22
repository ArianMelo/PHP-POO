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

// Rodrigo recebe a classe Pessoa.
$rodrigo = new Pessoa();
// Rodrigo acessa o atributo nome da classe pessoa e atribui o valor "Rodrigo".
$rodrigo-> nome = "Rodrigo";
// Rodrigo acessa o atributo idade da classe pessoa e atribui o valor 25
$rodrigo-> idade = 25;
// Rogrido acessa o método falar e exibe o ceontúdo com condições.
$rodrigo->Falar();
echo "<br>";
var_dump($rodrigo);
echo "<br>";
echo $rodrigo->nome;