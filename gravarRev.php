<?php
include("banco.php");

$nome = $_POST["nome_RevPiso"]; // $_post formulario que vem de fora do php
$desc = $_POST["desc"];


$foto = $_FILES["foto"]["name"];
$foto_temp = $_FILES["foto"]["tmp_name"];
$foto_type = $_FILES["foto"]["type"];
$foto_size = $_FILES["foto"]["size"];

echo $nome,$desc,$foto;

if(isset($_POST["id"])){
    if($desc == "Piso"){
        $id = $_POST["id"];
        if($foto != ""){
            move_uploaded_file($_FILES["foto"]["tmp_name"],"uploads/Piso/$foto");
        }
        if($foto != ""){
            $sql2="UPDATE piso SET foto_amb='$foto' WHERE id_piso=$id";
            $conexao->query($sql2);
        }
        $sql = "UPDATE piso SET nome_piso = '$nome',desc_piso = '$desc' WHERE id_piso =  $id;";
        $conexao -> query($sql);
        $conexao -> close();
        echo $sql;
        //header("location:painel.php");
    }
    if($desc == "Revestimento"){

        $sql = "INSERT INTO piso (id_piso, FK_Ambiente, FK_Prod, nome_piso, desc_piso, foto_piso) Values(NULL,NULL,NULL,'$nome','$desc',NULL)";
        $conexao -> query($sql);
        $conexao -> close();
        echo $sql;


        // $id = $_POST["id"];
        // if($foto != ""){
        //     move_uploaded_file($_FILES["foto"]["tmp_name"],"uploads/Revestimento/$foto");
        // }
        // if($foto != ""){
        //     $sql2="UPDATE revpiso SET foto_RevPiso='$foto' WHERE id_piso=$id";
        //     $conexao->query($sql2);
        // }
        // $sql = "UPDATE revpiso SET nome_RevPiso = '$nome',desc_RevPiso = '$desc' WHERE id_RevPiso =  $id;";
        // $conexao -> query($sql);
        // $conexao -> close();
        // echo $sql;
        //header("location:painel.php");
    }else{

    }
   
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
