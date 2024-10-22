<?php 
class ClassExample {
   private $classAtr1;
   private $classAtr2;

   public function __construct($classAtr1, $classAtr2) {

   }


   public function getClassAtr1() {
      return $this->classAtr1;
   }

   public function getClassAtr2() {
      return $this->classAtr2;
   }

   public function setClassAtr1($atr1) {
      $classAtr1 = filter_var($atr1, FILTER_SANITIZE_SPECIAL_CHARS);
      $this->classAtr1 = $classAtr1;
   }

   public function setClassAtr2($atr2) {
      $classAtr2 = filter_var($atr2, FILTER_SANITIZE_SPECIAL_CHARS);
      $this->classAtr2 = $classAtr2;
   }

   public function MethodEx1 () {
      echo "Os atributos $this->classAtr1 e $this->classAtr2 foram instanciados<br>";
   }
}

$classAcess = new ClassExample("Atributo-const-1" ,"Atributo-const-2");
$classAcess->setClassAtr1("ATRIBUTO-001");
$classAcess->setClassAtr2("ATRIBUTO-002");
$classAcess->MethodEx1();
var_dump($classAcess);