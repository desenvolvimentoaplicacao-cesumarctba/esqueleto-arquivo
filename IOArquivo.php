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

    /**
     * Implementa a escrita em arquivo
     * recebe um array de objetos de usuario
     * e grava no arquivo
     */
    public function writeFile(Array $arr)
    {   
        if (empty($arr)) {
            echo 'Array vazio!';
            return false;
        }
            
        if (file_exists($this->filePath)) {
            // grava uma string em um arquivo
            file_put_contents($this->filePath,json_encode($arr));   
            return true;
        }

    }
}