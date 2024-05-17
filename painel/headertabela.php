<?php
include("excluir.php");
$tabela = "
<table class='table'>
<thead>
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nome</th>
        <th scope='col'>Descrição</th>
        <th scope='col'>Foto</th>
        <th scope='col'>Excluir</th>
        <th scope='col'>Editar</th>
    </tr>
</thead>"
;
while($linha = mysqli_fetch_array($resultado)){
    $id = $linha["id_Amb"];
    $nome = $linha["nome_amb"];
    $desc = $linha["desc_amb"];
    $foto = $linha["foto_amb"];
    $exclui = "<a href ='?acao=excluir&codigo=$id' onclick='return deletar();return false; type='button' class='btn btn-primary'>Excluir</a>";
    $atualizar = "<button  type='button' class='btn btn-primary' data-toggle='modal' id ='$id' onclick='codigo(this)' data-target='#addAmbiente'>Editar</button>";

    $tabela .= "
     <tbody>
            <tr>
                <th scope='row'>$id</th>
                <td>$nome</td>
                <td>$desc</td>
                <td>$foto</td>
                <td>$exclui</td>
                <td>$atualizar</td>
            </tr>
        </tbody>
    ";
}
$tabela .="</table>";

?>
