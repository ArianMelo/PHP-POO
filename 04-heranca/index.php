<?php
// Herança é um recurso que permite que classes compartilhem métodos, códigos ou comportamentos generalizados.

// public - Fará com que não haja ocultação nenhuma, toda propriedade ou método declarado como público serão acessíveis por todos que quiserem.

// protected - todos os herdeiros vejam as propriedades ou métodos protegidos como se fossem públicos.

// private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade seja acessado somente pela classa que a declarou.

class Veiculo {
   public $modelo;
   public $cor;
   public $ano;

   public function Andar() {
      echo "Andou!";
      
   }

   public function Parar() {
      echo "Parou!";
   }
}

class Carro extends Veiculo {
   public function ligarLimpador() {
      echo "Limpando 3,2,1";
   }
}

class Moto extends Veiculo {
   public function darGrau() {
      echo "Grau 3,2,1";
   }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = "1998";
echo "<br><br>";
$carro->Parar();


$moto = new Moto();
$moto->modelo = "Biz";
$moto->cor = "Vermelho";
$moto->ano = "2005";
echo "<br>";
$moto->darGrau();
echo "<br>";

var_dump($carro);
var_dump($moto);