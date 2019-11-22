<?php

class Usuario
{
    public $nome;
    public $email;
    public $senha;

    /**
     * Metodo construtor
     * chamado quando a classe é 
     * instaciada
     */
    public function __construct($nome, $email, $senha)
    {
        $this->nome  = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }
}