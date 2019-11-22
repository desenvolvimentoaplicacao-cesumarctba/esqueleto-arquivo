<?php

class IOArquivo
{
    
    private $filePath = __DIR__ . '/db.json';
    /**
     * Método que quando chamado le o arquivo
     * e retorna um array com os objetos de usuário
     * para aplicação
     */
    public function readFile()
    {
        if (file_exists($this->filePath)) {
            return json_decode(file_get_contents($this->filePath));
        } else {
            die('Arquivo não encotrado!');
        }
    }
}