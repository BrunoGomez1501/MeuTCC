<?php 
include("banco.php");

$prod = "produto";
$rev = "revestimento";
$piso = "piso";
$ambteste = "ambiente";

$sql = "SELECT * FROM ambiente";
$resultado = $conexao ->query($sql);

//painel de exclusão
include("painel/excluir.php");
//painel de header tabela
include("painel/headertabela.php");
//painel de piso
include("painel/tabelapiso.php");
//painel de produto
include("painel/tabelaproduto.php");
//painel de rev piso
include("painel/tabelarevpiso.php");

$conexao->close(); // fechar conexão



?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <meta charset="utf-8"/>
    <title>Painel</title>
    <meta name="description" content="descriçãoda pagina..."/>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="style.css"/> 
    <script src="js/function.js"></script>
    <script>
        function codigo(elemento) {
            var conteudo = elemento.id;
            document.querySelector('.meuid').value = conteudo;
        }
        function nome(elementonome) {
            var data = elementonome.id;
            $('.prod').text(data); 
            alert(data);
        }
        function teste(elemento1) {
            var conteudo1 = elemento1.id;
            document.querySelector('.teste').value = conteudo1;
        }


        
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <?php include("menu.php");?>
    <section class="container">
        <h1 class = 'd-flex justify-content-center'>Painel de Controle</h1>
        <br>
        <div class="col-12 col-md-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ambiente" role="tab" aria-controls="home" aria-selected="true">Ambiente</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#miniaturas" role="tab" aria-controls="profile" aria-selected="false">Miniaturas</a>
            </li>
                <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#piso" role="tab" aria-controls="contact" aria-selected="false">Piso e Revestimento</a>
            </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="ambiente" role="tabpanel" aria-labelledby="home-tab"> 
                    <?php echo $tabela?>
                    
                </div>

                <div class="tab-pane fade" id="miniaturas" role="tabpanel" aria-labelledby="profile-tab">
                    <?php echo $tabela2?>
                </div>

                <div class="tab-pane fade" id="piso" role="tabpanel" aria-labelledby="contact-tab">
                    <?php echo $tabela3?>
                    <?php echo $tabela4?>
                </div>

            </div>
            
        </div>
    </section> 
    <?php include("painel/formulario.php");?>
    <?php include("painel/formpiso.php");?>    
</body>
</html>
</html>