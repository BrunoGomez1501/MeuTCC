<?php 
if(isset($_GET["acao"])){
    if($_GET["acao"]=="excluir" and is_numeric($_GET["codigo"])){
        $codigo = $_GET["codigo"];
        $sqlexcluir = "DELETE FROM revpiso WHERE id_RevPiso=$codigo";
        $conexao ->query($sqlexcluir);
    }
}
if(isset($_GET["acao"])){
    if($_GET["acao"]=="excluir" and is_numeric($_GET["codigo"])){
        $codigo = $_GET["codigo"];
        $sqlexcluir = "DELETE FROM produto WHERE id_prod=$codigo";
        $conexao ->query($sqlexcluir);
    }
}
if(isset($_GET["acao"])){
    if($_GET["acao"]=="excluir" and is_numeric($_GET["codigo"])){
        $codigo = $_GET["codigo"];
        $sqlexcluir = "DELETE FROM piso WHERE id_piso=$codigo";
        $conexao ->query($sqlexcluir);
    }
}
if(isset($_GET["acao"])){
    if($_GET["acao"]=="excluir" and is_numeric($_GET["codigo"])){
        $codigo = $_GET["codigo"];
        $sqlexcluir = "DELETE FROM ambiente WHERE id_Amb=$codigo";
        $conexao ->query($sqlexcluir);
    }
}
?>