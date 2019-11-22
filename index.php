<?php

function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    // die;
    echo '<hr>';
}

// require_once __DIR__ . '/db2.php';
// require_once __DIR__ . '/db.json';
require_once __DIR__ . '/IOArquivo.php';
require_once __DIR__ . '/Usuario.php';


echo 'Projeto - CRUD em Arquivo com PHP <br><br>';


// instancia o IOArquivo
$io = new IOArquivo;

$arr = $io->readFile(); // recupera o array

debug($arr); // le o arquivo e exibe ele

$u  = new Usuario('Maycon','maycon.douglas@unicesumar.edu.br', '123' );
$u1 = new Usuario('Maria','maria@email.com', 'abc' );
$u2 = new Usuario('River Plate','rv@email.com', '000' );

$arr[] = $u;
$arr[] = $u1;
$arr[] = $u2;
// debug($arr);
// die;
$io->writeFile($arr);

debug($arr); // le o arquivo e exibe ele



