function validarFormulario() {
    var campoValor = document.getElementById("ambiente").value;
    if (campoValor.trim() === '') {
      alert("Por favor, preencha o campo.");
      return false; // Impede o envio do formulário
    }
    return true; // Permite o envio do formulário se o campo não estiver vazio
  }