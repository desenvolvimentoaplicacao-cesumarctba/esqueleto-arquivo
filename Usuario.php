<?php

class Usuario
{
    private $nome;
    private $email;
    private $senha;

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