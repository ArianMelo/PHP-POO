<?php 

class Login {
   public $email;
   public $password;

   public function getEmail() {
      return $this->email;
   }

   public function setEmail($e) {
      $email = filter_var($e, FILTER_SANITIZE_EMAIL);
      $this->email = $email;
   }

   public function getPassword() {
      return $this->password;
   }

   public function setPassword($s) {
      $this->password = $s;
   }

   public function Logar() {
      if ($this->email == "teste@teste.com" and $this->password == "123456") {
         echo "Logado com sucesso!";
      } else {
         echo "Dados inválidos";
      }
   }
}

$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setPassword("123456");
$logar->Logar();