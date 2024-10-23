<?php

// public - Fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como público serão acessíveis por todos que quiserem.

// protected - todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

// private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja acessado somente pela classa que a declarou.

class Veiculo {
   protected $modelo;
   public $cor;
   private $ano;

   public function Andar() {
      echo "Andou<br>";
   }

   protected function Parar() {
      echo "Parou!<br>";
   }

   public function setAno($a) {
      $this->ano = "$a";
   }

   public function getAno() {
      return $this->ano;
   }

}

class Carro extends Veiculo {

   public function LigarLimpador() {
      echo "Limpando!";
   }

   public function setModelo($m) {
      $this->modelo = $m;
   }

   public function getModelo() {
      return $this->modelo;
   }

   public function Freando() {
      $this->Parar();
   }

}

class Moto extends Veiculo {

   public function DarGrau() {
      echo "Dando Grau";
   }
}

$veiculo = new Veiculo();
$carro = new Carro();
$veiculo->cor = "Branco";
$veiculo->setAno("1996");
$carro->cor = "Preto";
$carro->setModelo("Uno");
$carro->setAno("1992");
echo $carro->cor;
echo $veiculo->cor;
echo $carro->getModelo();
echo "<br>";
echo $carro->Freando();
var_dump($carro);



