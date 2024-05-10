<?php
include("banco.php");


$nome = $_POST["nome_Prod"];
$desc = $_POST["desc"];
$ambiente = $_POST["ambientes"];

$foto = $_FILES["foto"]["name"];
$foto_temp = $_FILES["foto"]["tmp_name"];
$foto_type = $_FILES["foto"]["type"];
$foto_size = $_FILES["foto"]["size"];


if(isset($_POST["id"])){
    $id = $_POST["id"];
    if($foto != ""){
        move_uploaded_file($_FILES["foto"]["tmp_name"],"uploads/miniaturas/$foto");
    }
   if($foto != ""){
        $sql2="UPDATE produto SET foto_prod='$foto' WHERE id_prod=$id";
        $conexao->query($sql2);
    }
    $sql = "UPDATE produto SET nome_prod = '$nome', desc_Prod = '$desc' WHERE id_prod = $id";
    $conexao -> query($sql);
    $conexao -> close();
    header("location:cadastrarRev.php");
}else{
    if($foto != ""){
        move_uploaded_file($_FILES["foto"]["tmp_name"],"uploads/miniaturas/$foto");
    }
    $sql = "INSERT INTO produto (nome_prod,desc_prod,Ambientes,foto_prod)
    Values('$nome','$desc','$ambiente','$foto')";
    $conexao -> query($sql);
    $conexao -> close();
    header("location:cadastrarRev.php");
 
}
?>