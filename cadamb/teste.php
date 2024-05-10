<div class=" mt-5">
    <form name = "form1" method="post" class = "form-group row" enctype="multipart/form-data" action="../gravar.php">
        <div class="form-group row mt-3">
            <label  class="" for="exampleFormControlSelect1"><h5>Nome do Ambiente :</h5></label>
            <div class = "col-sm-10 mb-4">
                <input type="hidden" name="id_amb" value =  '<?php echo $_GET['id'];?>' >
                <input type="text" name = "nome" id = 'ambiente' class = "select" placeholder = "Ambientes">
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