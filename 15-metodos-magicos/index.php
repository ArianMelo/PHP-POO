<?php 

// clone*
// construct*
// invoke
// tostring
// get
// set
// Clone

class Pessoa {
   private $dados = array();

   public function __set(string $nome, $valor){
      $this->dados[$nome] = $valor;
   }

   public function __get(string $nome){
      return $this->dados[ $nome ];
   }

   public function __tostring() {
      return "Tentei imprimir o objeto";
   }

   public function __invoke() {
      return "Objeto como função";
   }
}

$pessoa = new Pessoa();
$pessoa->nome = "Danilo";
$pessoa->idade = 50;
$pessoa->sexo = "M";

echo $pessoa->nome."<br>";
echo $pessoa->idade."<br>";
echo $pessoa->sexo."<br>";
echo "<hr>";
echo $pessoa;
echo "<hr>";
echo $pessoa();
