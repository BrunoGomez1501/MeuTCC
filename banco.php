<?php
$servidor = "localhost";             // nome ou IP do servidor onde está
$usuario = "root";
$senha = "";
$banco = "unigres";
$conexao = new mysqli($servidor,$usuario,$senha,$banco);    // abrir conexão
mysqli_query($conexao,"SET NAMES 'utf8'");  
mysqli_query($conexao,'SET character_set_connection=utf8');  
mysqli_query($conexao,'SET character_set_client=utf8');  
mysqli_query($conexao,'SET character_set_results=utf8');


?>