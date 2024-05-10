<?php
include("banco.php");

// ambiente
$sql = "SELECT * FROM ambiente";
$resultado = $conexao ->query($sql);

$lista = "";
while($linha = mysqli_fetch_array($resultado)){
    $id = $linha["id_Amb"];
    $nome = $linha["nome_amb"];
    $desc = $linha["desc_amb"];
    $foto = $linha["foto_amb"];
    if($nome != "Sala"){
        $lista .="<button type='button' class='botao btn btn-primary' value = $nome>$nome</button>";
    }else{
        $sala = $nome;
    }

    
}
$lista .=""; 
// ---------------------------------------------------PISO------------------------------------------------
$sql2 = " SELECT ambiente.nome_amb as NomeAmb
,produto.Ambientes as ProdutoAmbientes
,produto.foto_prod as FotoProd
,produto.desc_prod as DescricaoProd
,produto.nome_prod as NomeProd
FROM produto
INNER JOIN ambiente ON ambiente.nome_amb = produto.Ambientes
WHERE ambiente.nome_amb = 'Sala' 
AND produto.desc_prod = 'piso'
";
$resultado2 = $conexao ->query($sql2);

// ----------------------------------------REVESTIMENTO-------------------------------------------------------

$sql3 = " SELECT ambiente.nome_amb as NomeAmb
,produto.Ambientes as ProdutoAmbientes
,produto.foto_prod as FotoProd
,produto.desc_prod as DescricaoProd
,produto.nome_prod as NomeProd
FROM produto
INNER JOIN ambiente ON ambiente.nome_amb = produto.Ambientes
WHERE ambiente.nome_amb = 'Sala' 
AND produto.desc_prod = 'revestimento'
";
$resultado3 = $conexao ->query($sql3);

$conexao->close(); // fechar conexão

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.2.1.3.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/function.js"></script>   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Inicio</title>
</head>
<body>
   <?php include("menu.php");?>
    <section class = "conatainer">
        <h3 class="h3">Ambientes</h3>
        <div class="menu-teste">
            <ul class='teste nav justify-content-center'>
                <a href='index.php' class = "botao">
                    <button type='button'class='btn btn btn-primary'><?php echo $sala?></button>
                </a>
                <?php echo $lista;?>
            </ul>
           
        </div>       
        <span id = "lista">
            <section class = "conatainer">
                <div class="row tamanho">       
                    <div class = "col-sm-2 d-flex flex-column bd-highlight mb-3">            
                        <!-- Piso -->
                        <div class="piso p-2 bd-highlight">
                            <p><a type="button" data-toggle="collapse" href = "#piso"  class="btn btn-dark" data-toggle="collapse">Piso</a></p>
                            <div class="collapse" id = "piso">
                                <div class="imgPiso card card-body" id = "">
                                        <?php
                                            while($linha2 = mysqli_fetch_array($resultado2)){
                                                echo "<img src='uploads/Miniaturas/".$linha2["FotoProd"]."
                                                'class = 'figure-img img-fluid rounded' alt ='" .$linha2["NomeProd"]."' id = 'meuBotao' onclick='PisoNome(this)'>";
                                                echo "<p>".$linha2["NomeProd"]."</p>";
                                            }
                                        ?>
                                </div>
                            </div>
                        </div>
                        <!-- Resvestimento -->
                        <div class="revestimento p-2 bd-highlight">
                           
                            <p><a type="button" data-toggle="collapse" href = "#rev"  class="btn btn-dark" data-toggle="collapse">Revestimento</a></p>
                            <div class="collapse" id = "rev">
                                <div class="imgRev card card-body" id = "revestimento">
                                    <?php
                                        while($linha3 = mysqli_fetch_array($resultado3)){
                                            echo "<img src='uploads/Miniaturas/".$linha3["FotoProd"]."
                                            'class = 'figure-img img-fluid rounded' alt='" .$linha3["NomeProd"]."' id = 'meuBotao' onclick='RevNome(this)'>";
                                            echo "<p>".$linha3["NomeProd"]."</p>";
                                        }
                                    ?>
                                </div>
                            </div> 
                            <div>
                                <h5>O que está sendo Usado.</h5>
                                <p><b>Piso:</b> <span class="nomePiso">Dunas Bianco</span></p>
                                <p><b>Revestimento:</b> <span class="nomeRev">Concption Branco</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Conteudo do Site -->
                    <div class="conteudo col">
                        <div class="imagem img-fluid">
                            <div class="ambiente fotoPiso">
                                <img src="uploads/Piso/Dunas Bianco.png" alt="">
                            </div>
                            <div class="ambiente fotoRev">
                                <img src="uploads/Revestimento/SALA 2 - REV - 32140 - Concption Branco.png" alt="">
                            </div>
                            <div class="ambiente">
                                <img src="uploads/Ambientes/SALA 2.png" alt="Sala">
                            </div>             
                        </div>
                    </div>
                    
                </div>    
            </section>
           
        </span>
    </section>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>