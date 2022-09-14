<?php
    
    include_once('../Controller/conexao.php');
    
    //variavel do modulo,isso tem que vir de outro lugar
    $modulo = filter_input(INPUT_GET,'key',FILTER_DEFAULT);
    //$modulo = $_POST['modulo'];
    
    //pegando as perguntas do banco de dados.
    $sql_code = "SELECT * FROM pergunta WHERE modulo = '{$modulo}'";
    
    $sql_query = $conexao->query($sql_code);
  
    //pegando as perguntas em um laço de repetição
    
    $i = 0;

    while($dados = mysqli_fetch_array($sql_query)){
        
        $elementos[$i] = [
            
            'titulo' => $dados['titulo'],
            'alternativas' => explode(';', $dados['alternativas']),
            'correta'=> $dados['correta']
            
        ];

        $i++;
        
    }
    
    //testando matriz
    //print_r($elementos);

    /* Exemplo
    {
    titulo: 'Gato',
    alternativas: ['gat','cat','gate','dog'],
    correta: 1
    }
    */

?>