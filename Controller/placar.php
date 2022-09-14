<?php

include_once('../Controller/conexao.php');

$sql_code = "SELECT nome,pontos FROM usuarios ORDER BY pontos DESC";

$sql_query = $conexao->query($sql_code);

$i = 0;

while($dados = mysqli_fetch_array($sql_query)){

    $elementos[$i] = [

        'nome' => $dados['nome'],
        'pontos' => $dados['pontos']

    ];

    $i++;

}

?>