<?php
function debug($var) {
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    // die;
    echo '<hr>';
}

/**
 * Gera uma tabela html de um array
 */
function generateTable($usuarios)
{
    $html = "";
    $html .= "<table border='1'>";
    $html .= "<tr>";
    $html .= "<td>Nome</td>";
    $html .= "<td>Email</td>";
    $html .= "<td>Senha</td>";
    $html .= "<td> - </td>";
    $html .= "<td> - </td>";
    $html .= "</tr>";
    foreach ($usuarios as $key => $value) {
        $html .= "<tr>";
        $html .= "<td>".$value->nome."</td>";
        $html .= "<td>".$value->email."</td>";
        $html .= "<td>".$value->senha."</td>";
        $html .= "<td>Editar</td>";
        $html .= "<td>Alterar</td>";
        $html .= "</tr>";
    }
    $html .= "</table>";
    return $html;
}