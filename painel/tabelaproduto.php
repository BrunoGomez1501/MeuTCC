<?php
include("excluir.php");
$sql2 = "SELECT * FROM produto";
$resultado2 = $conexao ->query($sql2);
$tabela2 = "
<table class='table'>
<thead>
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nome</th>
        <th scope='col'>Descrição</th>
        <th scope='col'>Foto</th>
        <th scope='col'>Ambiente</th>
        <th scope='col'>Excluir</th>
        <th scope='col'>Atualizar</th>
    </tr>
</thead>"
;

while($linha2 = mysqli_fetch_array($resultado2)){
    $id2 = $linha2["id_prod"];
    $nome2 = $linha2["nome_prod"];
    $desc2 = $linha2["desc_prod"];
    $foto2 = $linha2["foto_prod"];
    @$AMB = $linha2["Ambientes"];
    $exclui = "<a href ='?acao=excluir&codigo=$id2' onclick='return deletar();return false;'>Excluir</a>";
    //$atualizar = "<a class = 'piso' href ='../cadpiso/cadprodatualiza.php?id=$id2&nome=$nome2&desc=$desc2&foto=$foto2'>Atualizar</a>";
    $atualizar2 = "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' id ='$id2' onclick='teste(this)' data-whatever='@fat'><a id = '$prod' onclick='nome(this)'>Editar</a></button>";

    $tabela2 .= "
     <tbody>
            <tr>
                <th scope='row'>$id2</th>
                <td>$nome2</td>
                <td>$desc2</td>
                <td>$foto2</td>
                <td>$AMB</td>
                <td>$exclui</td> 
                <td>$atualizar2<td>
                
            </tr>
        </tbody>
    ";
}
$tabela2 .="</table>";
?>