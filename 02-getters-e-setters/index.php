<?php 

class Login {

   // Atributos
   private $email;
   private $password;
   private $nome;

   // Construtor
   public function __construct($email, $password, $nome) {
      $this->setEmail($email);
      $this->setPassword($password);
      $this->nome = $nome;
   }

   // Getters

   public function getEmail() {
      return $this->email;
   }
   public function getPassword() {
      return $this->password;
   }

   // Setters: captura o valor da varíavel privada e atribui parâmetros de validação

   public function setEmail($e) {
      $email = filter_var($e, FILTER_SANITIZE_EMAIL);
      $this->email = $email;
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

$logar = new Login("teste@teste.com", "123456", "Bruno Alves");
//$logar->setEmail("teste@teste.com");
//$logar->setPassword("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();