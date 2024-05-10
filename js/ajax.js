// Refresh da pagina do simulador
//----------------------------------

$(document).ready(function () {
    $(".botao").click(function () {
        var idClicado = $(this).val();
        $.ajax({
            type: "POST",
            url: "conteudo.php?ambiente=" + idClicado,
            data: "",
            success: function (resposta) {
                $("#lista").html(resposta);
            },
            error: function (resposta) {
                alert("Deu erro:" + resposta);
            }
        });
    });
});
// ---------------------------------------------------------------------------------------------------------------
