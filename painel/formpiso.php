<div id="addpiso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addpiso">Editar Piso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form name = "form1" method="post" class = "form-group row" enctype="multipart/form-data" action="gravarRev.php">
            <div class="modal-body">
                <input type="hidden" class = 'teste' name = 'id' value = >

                <div class="form-group">                   
                    <label  class="" for="exampleFormControlSelect1"><h5>Nome do Piso ou Revestimento :</h5></label>
                    <input type="text" name = "nome_RevPiso" class = "select" placeholder = "Ambientes">
                    <br>
                    
                    <label for="inputEmail3" class=""><h5>Descrição:</h5></label>
                    <select name="desc" id="" class = "select">
                        <option></option>
                        <option>Piso</option>
                        <option>Revestimento</option>                          
                    </select>

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