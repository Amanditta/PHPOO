<?php
class usuario{
    public $nome;
    public $mail;
    public $senha;
  
    function get_nome()
     {
            return $this->nome;
    }
    function set_nome ($nome)
     {
      return $this-> nome = $nome;  
    }
    function get_email()
    {
           return $this->email;
    }
   function set_email ($email)
    {
     return $this-> email = $email;  
   }
}
?>