//-------------------------------------------------- Visualização de Imagem na pagina de cadastro-------------------------------------------------------------

$(function() {
    // Pré-visualização de várias imagens no navegador
    var visualizacaoImagens = function(input, Imagem) {
    
        if (input.files) {
            var quantImagens = input.files.length;
            for (i = 0; i < quantImagens; i++) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $($.parseHTML('<img class="miniatura">')).attr('src', event.target.result).appendTo(Imagem);
                }
    
                reader.readAsDataURL(input.files[i]);
            }
        }
    
    };
    
    $('#addFotoGaleria').on('change', function() {
        visualizacaoImagens(this, 'div.galeria');
    });
});

// ------------------------------------------------------------------Troca de Imagem--------------------------------------------------------------

$(document).ready(function(){
    // Troca de Piso
    $('.piso img').click(function(){
        var urlcompleta =  $(this).attr("src");
        var nome = urlcompleta.lastIndexOf("/") + 1;
        var nomeArq = urlcompleta.substr(nome);

        var miniatura_alt =  $(this).attr("alt");
        var nome_alt = miniatura_alt.lastIndexOf("/") + 1;
        var nomePiso = miniatura_alt.substr(nome_alt);

        
        $('.fotoPiso img').attr({
           src:'uploads/Piso/' + nomeArq,
           alt:'uploads/Piso/' + nomePiso
        });
       
    });
    // Troca de Revestimento

    $('.revestimento img').click(function(){
        var Revestimeto =  $(this).attr("src");
        var nomeRev = Revestimeto.lastIndexOf("/") + 1;
        var RevNome = Revestimeto.substr(nomeRev);
        
        var RevAlt =  $(this).attr("alt");
        var RevAltNome = RevAlt.lastIndexOf("/") + 1;
        var NomeAltRev = RevAlt.substr(RevAltNome);

       
        $('.fotoRev img').attr({
           src:'uploads/Revestimento/' + RevNome,
           alt:'uploads/Revestimento/' + NomeAltRev
        });
       
    });
});
//--------------------------Seleciona o que esta sendo usado---------------------------------------------------------------------------------------------------------
//Piso
function PisoNome(elemento) {
    var conteudo = elemento.alt;
    $('.nomePiso').text(conteudo); 
}
//Revestimento
function RevNome(elemento) {
    var conteudo = elemento.alt;
    $('.nomeRev').text(conteudo);
}
//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------
function validarFormulario() {
    var amb = document.getElementById("ambiente").value;
    var descr = document.getElementById("descr").value;
    if (amb.trim() === '') {
      alert("Por favor, preencha o campo.");
      return false; // Impede o envio do formulário
    }

    if (amb.length > 30) {
        alert("O campo deve ter no máximo 30 caracteres.");
        return false; // Impede o envio do formulário
    }

    return true; // Permite o envio do formulário se o campo não estiver vazio
}