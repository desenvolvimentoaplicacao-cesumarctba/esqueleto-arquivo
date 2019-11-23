<?php

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/IOArquivo.php';
require_once __DIR__ . '/Usuario.php';


echo 'Projeto - CRUD em Arquivo com PHP <br><br>';


// instancia o IOArquivo
$io = new IOArquivo;

$arr = $io->readFile(); // recupera o array

// debug($arr); // le o arquivo e exibe ele

$u  = new Usuario('Maycon','maycon.douglas@unicesumar.edu.br', '123' );

$arr[] = $u;
$io->writeFile($arr); // grava no arquivo

echo generateTable($io->readFile());



