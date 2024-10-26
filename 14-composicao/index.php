<?php 
// COMPOSIÇÂO
// Na composição, uma classe cria a instancia de outra classe dentro de si própria, sendo assim, quando ela for destruida, a outra classe também será.

class Pessoa {
   public function atribuiNome($nome) {
      return "O nome da pessoa é  ".$nome;
   }
}

class Exibe {
   public $pessoa;
   public $nome;

   function __construct($nome) {
      // A classe pessoa é instanciada dentro da classe exibe. Caso a classe exibe seja destruida, a instancia de pessoa também será
      $this->pessoa = new Pessoa();
      $this->nome = $nome;
   }

   public function exibeNome() {
      echo $this->pessoa->atribuiNome($this->nome);
   }
}

$exibe = new Exibe("José");
$exibe->exibeNome();