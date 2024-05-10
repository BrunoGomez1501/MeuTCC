<?php
include("banco.php");

$fotoAmb = "";
$fotoPiso = "";
$fotoRev = "";

if($_GET['ambiente']){
    $nome = $_GET['ambiente'];
    $sql = "SELECT
                A.NOME_AMB AS NOME,
                A.FOTO_AMB AS FOTO,
                PI.NOME_PISO AS NOMEPISO,
                PI.FOTO_PISO AS FOTOPISO,
                REV.NOME_REVPISO AS NOMEREVPISO,
                REV.FOTO_REVPISO AS FOTOREVPISO
            FROM AMBIENTE A
            LEFT JOIN PISO PI ON PI.FK_AMBIENTE = A.ID_AMB
            LEFT JOIN REVPISO REV ON REV.FK_AMB = A.ID_AMB
            WHERE NOME_AMB = '$nome'
    ";
    $resultado = $conexao->query($sql);
    
    while($linha = mysqli_fetch_array($resultado)){
        $nomeAmb = $linha['NOME'];
        $fotoAmb = $linha['FOTO'];
        $nomePiso = $linha['NOMEPISO'];
        $fotoPiso = $linha['FOTOPISO'];
        $nomeRev = $linha['NOMEREVPISO'];
        $fotoRev = $linha['FOTOREVPISO'];
    }
//--------------------------PISO----------------------------------------------------------
    $sql2 = "SELECT	ambiente.nome_amb as NomeAmb
    ,produto.Ambientes as ProdutoAmbientes
    ,produto.foto_prod as FotoProd
    ,produto.desc_prod as DescricaoProd
    FROM produto
    INNER JOIN ambiente ON ambiente.nome_amb = produto.Ambientes
    WHERE ambiente.nome_amb = '$nome' 
    AND produto.desc_prod = 'piso'    
    ";
    $resultado2 = $conexao->query($sql2);
//---------------------------REVESTIMENTO---------------------------------------------------
    $sql3 = "SELECT	ambiente.nome_amb as NomeAmb
    ,produto.Ambientes as ProdutoAmbientes
    ,produto.foto_prod as FotoProd
    ,produto.desc_prod as DescricaoProd
    FROM produto
    INNER JOIN ambiente ON ambiente.nome_amb = produto.Ambientes
    WHERE ambiente.nome_amb = '$nome' 
    AND produto.desc_prod = 'Revestimento'    
    ";
    $resultado3 = $conexao->query($sql3);
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <script src="js/function.js"></script>   
</head>
<body>
    <section class = "conatainer">
        <div class="row tamanho">       
            <div class = "col-sm-2 d-flex flex-column bd-highlight mb-3">
                <!-- Piso -->
                <div class="piso p-2 bd-highlight">
                    <p><a type="button" data-toggle="collapse" href = "#piso"  class="btn btn-dark" data-toggle="collapse">Piso</a></p>
                    <div class="collapse" id = "piso">
                        <div class='imgPiso card card-body'>
                            <div class = "piso">
                                <?php 
                                    while($linha2 = mysqli_fetch_array($resultado2)){
                                        echo "<img src='uploads/Miniaturas/" .$linha2["FotoProd"] ."' alt=''>";                             
                                    } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Resvestimento -->
                <div class="revestimento p-2 bd-highlight">
                    <p><a type="button" data-toggle="collapse" href = "#rev"  class="btn btn-dark" data-toggle="collapse">Revestimento</a></p>
                    <div class="collapse" id = "rev">
                        <div class='imgRev card card-body' id = 'revestimento'>
                            <?php 
                                while($linha3 = mysqli_fetch_array($resultado3)){
                                    echo "<img src='uploads/Miniaturas/" .$linha3["FotoProd"] ."' alt=''>"; 
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Conteudo do Site -->
            <div class="conteudo col">
                <div class="imagem img-fluid">
                    <div class="ambiente fotoPiso">
                        <img src="uploads/Piso/<?php echo $fotoPiso?>" alt="<?php echo $nomePiso?>">
                    </div>
                    <div class="ambiente fotoRev">
                        <img src="uploads/Revestimento/<?php echo $fotoRev?>" alt="<?php echo $nomeRev?>">
                    </div>
                    <div class="ambiente">
                        <img src="uploads/Ambientes/<?php echo $fotoAmb?>" alt="<?php echo $nomeAmb?>">
                    </div>             
                </div>
            </div>
        </div>    
    </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
