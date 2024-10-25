<?php

// Interface: é um contrato que obriga as classes que a tiverem como implements, a aderir a seus métodos. Os métodos devem se público, deve ser declarado apenas o nome do método e o parâmetro.

interface Crud {
   public function create($data);
   public function read();
   public function update();
   public function delete();
}
 // Cado a classe notícias não possua algum dos métodos da interface CRUD, ele irá gerar um erro.
class Noticias implements Crud {
   public function create($data) {

   }
   public function read() {

   }
   public function update() {

   }
   public function delete() {

   }
}