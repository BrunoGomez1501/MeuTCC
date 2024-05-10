<?php 
    include("banco.php");
    
    $nome = $_POST['nome'];
    $desc = $_POST['desc'];


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
            $sql2="UPDATE ambiente SET foto_amb='$foto' WHERE id_Amb=$id";
            $conexao->query($sql2);
        }
        $sql = "UPDATE ambiente SET nome_amb = '$nome', desc_amb = '$desc' WHERE id_Amb = $id";
        $conexao -> query($sql);
        $conexao -> close();
        header("location:painel.php");
    }else{
        if($foto != ""){
            move_uploaded_file($_FILES["foto"]["tmp_name"],"uploads/miniaturas/$foto");
        }
        $sql = "INSERT INTO ambiente (nome_amb,desc_amb,foto_amb) Values('$nome','$desc','$foto')";
        $conexao -> query($sql);
        $conexao -> close();
        header("location:cadastrarRev.php");
    }


?>