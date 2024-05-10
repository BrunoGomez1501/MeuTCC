<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    //include("cadamb/cadambatualizar.php");
    header("http://localhost/unigres/cadamb/cadambatualizar.php");
    exit(); // Certifica-se de que o script não continue executando após o redirecionamento
}else{
    include("cadamb/cadambiente.php");
}
?>