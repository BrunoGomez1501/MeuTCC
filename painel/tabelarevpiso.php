<?php

include("excluir.php");

$sql4 = "SELECT 
rev.id_RevPiso,
CONCAT(rev.FK_AMB,' - ',amb.nome_amb) as Ambiente,
CONCAT(rev.FK_Prod,' - ',pro.nome_prod) as Produto,
rev.nome_RevPiso,
rev.desc_RevPiso,
rev.foto_RevPiso

FROM revpiso rev
inner join produto pro on rev.FK_Prod = pro.id_prod
inner join ambiente amb on rev.FK_AMB = amb.id_Amb;
";

$resultado4 = $conexao ->query($sql4);
$tabela4 = "
<table class='table'>
<thead>
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Nome</th>
        <th scope='col'>Descrição</th>
        <th scope='col'>Foto</th>
        <th scope='col'>Miniatura</th>
        <th scope='col'>Ambiente</th>
        <th scope='col'>Excluir</th>
        <th scope='col'>Atualizar</th>
    </tr>
</thead>"
;
// 	FK_Amb 	FK_Prod 	 	 	 	
while($linha4 = mysqli_fetch_array($resultado4)){
    $id4 = $linha4["id_RevPiso"];
    $nome4 = $linha4["nome_RevPiso"];
    $desc4 = $linha4["desc_RevPiso"];
    $foto4 = $linha4["foto_RevPiso"];
    $fk_prod4 = $linha4["Produto"];
    $fk_amb4 = $linha4["Ambiente"];
    //$atualizar = "<a class = 'piso' href ='conteudo.php'>Atualizar</a>";
    $exclui = "<a href ='?acao=excluir&codigo=$id4' onclick='return deletar();return false;'>Excluir</a>";
    $atualizar3 = "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' id ='$id4' onclick='teste(this)' data-whatever='@getbootstrap'><a id = '$rev' onclick='nome(this)'>Editar</a></button>";

    $tabela4 .= "
     <tbody>
            <tr>
                <th scope='row'>$id4</th>
                <td>$nome4</td>
                <td>$desc4</td>
                <td>$foto4</td>
                <td>$fk_prod4</td>
                <td>$fk_amb4</td>
                <td>$exclui</td>
                <td>$atualizar3</td>
            </tr>
        </tbody>
    ";
}
$tabela4 .="</table>";

?>