<?php 

// POLIMORFISMO: QUANDO UMA CLASSE FILHA REESCREVE UM MÉTODO DA CLASSE PAI.

class Animal2 {
   public function Andar() {
      echo "O animal andou!";
   }
}

class Cavalo extends Animal2 {
   
   public function Andar() {
      echo "O cavalo andou!";
   }
}

$animal=new Cavalo();
$animal->Andar();