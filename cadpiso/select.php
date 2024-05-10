<?php 
$sql = "SELECT ambiente.nome_amb FROM ambiente ";
$resultado = $conexao -> query($sql);

$select ="<select class='select' id='inputGroupSelect01' name = 'ambientes' type = 'text'>";
 
while($linha = mysqli_fetch_array($resultado)){
    $nome = $linha["nome_amb"];
    $select .= "<option>$nome</option>";
}

$select .="</select>";

$conexao->close();
?>