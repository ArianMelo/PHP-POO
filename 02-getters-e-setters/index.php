<?php 

class Login {
   public $email;
   public $password;

   public function Logar() {
      if ($this->email == "teste@teste.com" and $this->password == "123456") {
         echo "Logado com sucesso!";
      } else {
         echo "Dados inválidos";
      }
   }
}

$logar = new Login();
$logar->email = "teste@teste.com";
$logar->password = "123456";
$logar->Logar();