<?php 
// Agrregação
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe utiliza a outra como parte di própria.

class Produtos {
   public $nome;
   public $valor;

   function __construct($nome, $valor) {
      $this->nome = $nome;
      $this->valor = $valor;
   }
}

class Carrinho {
   public $produtos;

   public function adicionar(Produtos $produtos) {
      $this->produtos[] = $produtos;
   }

   public function exibe() {
      foreach ($this->produtos as $produto) {
         echo $produto->nome.'<br>';
         echo $produto->valor.'<hr>';
      }
   }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adicionar($produto1);
$carrinho->adicionar($produto2);

$carrinho->exibe();
var_dump($carrinho->produtos);