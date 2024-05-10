
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            
                <form name = "form1" method="post" class = "form-group row" enctype="multipart/form-data" action="gravarid.php">
                    <div class="modal-body">
                       <input type="hidden" class = 'meuid' name = 'id' value = >
                        <div class="form-group"> 
                                              
                            <label  class="" for=""><h5>Nome do Ambiente :</h5></label>
                            <input type="text" name = "nome" id = 'ambiente' class = "select" placeholder = "Ambientes">
                            <br>
                            <label for="inputEmail3" class=""><h5>Descrição:</h5></label>
                            <input type="text" name = "desc" class=" select" id="inputEmail3" placeholder="Descrição">
                            <br>

                            <label for="exampleFormControlFile1"><h5>Foto</h5></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                        </div>
                        <div class="galeria"></div>
                        <div class="modal-footer">
                            <input id="salvar" class="btn btn-primary" type="submit" value="Salvar" name = "salvar" data-loading-text="Salvando..."/>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>    
                        </div> 
                    </div>
                </form>          
        </div>
    </div>
</div>
