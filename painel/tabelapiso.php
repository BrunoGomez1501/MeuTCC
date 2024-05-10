<?php
include("excluir.php");

$sql3 = "SELECT 
    pis.id_piso,
    CONCAT(pis.FK_Ambiente,' - ',amb.nome_amb) as Ambiente,
    CONCAT(pis.FK_Prod,' - ',pro.nome_prod) as Produto,
    pis.nome_piso,
    pis.desc_piso,
    pis.foto_piso

FROM piso pis
inner join produto pro on pis.FK_Prod = pro.id_prod
inner join ambiente amb on pis.FK_Ambiente = amb.id_Amb";
$resultado3 = $conexao ->query($sql3);
$tabela3 = "
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
while($linha3 = mysqli_fetch_array($resultado3)){
    $id3 = $linha3["id_piso"];
    $nome3 = $linha3["nome_piso"];
    $desc3 = $linha3["desc_piso"];
    $foto3 = $linha3["foto_piso"];
    $fk_prod = $linha3["Produto"];
    $fk_amb = $linha3["Ambiente"];
    $exclui = "<a href ='?acao=excluir&codigo=$id3' onclick='return deletar();return false; type='button' class='btn btn-primary'>Excluir</a>";
    $atualizar1 = "<button id ='$id3' onclick='teste(this)' type='button' class='btn btn-primary' data-toggle='modal' data-target='#addpiso'>Editar</button>";
    //$atualizar1 = "<button type='button' class='btn btn-primary' data-toggle='modal' id ='$id3' onclick='teste(this)' data-target='#piso' data-whatever='@mdo'><a id = '$piso' onclick='nome(this)'>Editar</a></button>";
    $tabela3 .= "
     <tbody>
            <tr>
                <th scope='row'>$id3</th>
                <td>$nome3</td>
                <td>$desc3</td>
                <td>$foto3</td>
                <td>$fk_prod</td>
                <td>$fk_amb</td>
                <td>$exclui</td>
                <td>$atualizar1</td>
            </tr>
        </tbody>
    ";
}
$tabela3 .="</table>";
?>