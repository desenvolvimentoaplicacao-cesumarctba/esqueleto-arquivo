<?php

function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die;
}

// require_once __DIR__ . '/db2.php';
// require_once __DIR__ . '/db.json';
require_once __DIR__ . '/IOArquivo.php';
require_once __DIR__ . '/Usuario.php';


echo 'Projeto - CRUD em Arquivo com PHP <br><br>';


// instancia o IOArquivo

$io = new IOArquivo;

debug($io->readFile());