<?php 
    include("../banco.php");
    include("select.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<!-- Header principal do html -->
<?php include("head.php");?>
<body>
    <?php include("../menu.php");?>
    <section class="container">
        <h1 class = "d-flex justify-content-center">Cadastro do Simulador de Ambientes</h1>
        <div class=" mt-5">
            <form name = "form1" method="post" class = "form-group row" enctype="multipart/form-data" action="../gravarProd.php">
                <div class="form-group row mt-3">
                    <label  class="" for="exampleFormControlSelect1"><h5>Nome Piso :</h5></label>
                    <input type="hidden" name="id" value = <?php echo $_GET['id']?> >
                    <div class = "col-sm-10 mb-4">
                        <input type="text" name = "nome_Prod" class = "select" placeholder = <?php echo $_GET['nome']?> >
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class=""><h5>Descrição:</h5></label>
                        <div class="col-sm-5">
                            <input type="text" name = "desc" class = "select" placeholder = <?php echo $_GET['desc']?> >
                        </div>
                    </div>
                    <div class="form-group row mt-3                                                                                                                                                                                                                                                                          ">
                        <label for="inputEmail3" class=""><h5>Ambientes</h5></label>
                        <div class="col-sm-5">
                            <?php echo $select ?>
                        </div>
                    </div>
                    <div class="form-group row input-group mb-3 mt-4">
                        <div class="input-group-prepend col-sm-2">
                            <span class="col-form-label" id="inputGroupFileAddon01"><h5>Foto:</h5></span>
                        </div>
                        <div class="">
                            <input type="file" class="select custom-file-input" name="foto" id="addFotoGaleria" aria-describedby="inputGroupFileAddon01">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <br>
                                    <span class="input-group-text" id="basic-addon1"><?php echo $_GET['foto']?></span>
                                </div>
                            </div>
                        </div>
                         <div class="galeria"></div>
                    </div>
                    <input id="salvar" class="btn btn-primary" type="submit" value="Salvar" data-loading-text="Salvando..."/>
                </div>
            </form>
        </div> 

    </section>
</body>
</html>