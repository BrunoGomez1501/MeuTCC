<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/function.js"></script>
    <script src="verificar.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <?php include("menu.php");?>
    <section class="container">
      
        <h1 class = "d-flex justify-content-center">Cadastro do Simulador de Ambientes</h1>
        <h2 class = "d-flex justify-content-center">Ambientes</h2>
        <div class=" mt-5">
            <form name = "form1" onsubmit="return validarFormulario()" method="post" class = "form-group row" enctype="multipart/form-data" action="./gravar.php">
                <div class="form-group row mt-3">
                    <label  class="" for="exampleFormControlSelect1"><h5>Nome do Ambiente :</h5></label>
                    <div class = "col-sm-10 mb-4">
                    <input type="text" name = "nome" id= "ambiente" class = "select" placeholder = "Ambientes">
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class=""><h5>Descrição:</h5></label>
                        <div class="col-sm-5">
                            <input type="text" name = "desc" class=" select" id="inputEmail3" placeholder="Descrição">
                        </div>
                    </div>
                    <div class="form-group row input-group mb-3 mt-4">
                        <div class="input-group-prepend col-sm-2">
                            <span class="col-form-label" id="inputGroupFileAddon01"><h5>Foto:</h5></span>
                        </div>
                        <div class="">
                            <input type="file" class="select custom-file-input" name="foto" id="addFotoGaleria" aria-describedby="inputGroupFileAddon01">
                        </div>
                        <div class="galeria"></div>
                    </div>
                    <input id="salvar" class="btn btn-primary" type="submit" value="Salvar" name = "salvar" data-loading-text="Salvando..."/>
                </div>
            </form>
        </div> 

    </section>
</body>
</html>