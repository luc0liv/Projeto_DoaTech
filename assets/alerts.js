
function Enviar() {
  
  var nome = document.getElementById("nomeContato");
  var email = document.getElementById("emailContato");
  var mensagem = document.getElementById("mensagemContato");

  if (nome.value == "") {
    bootbox.alert("Nome não informado");
    nome.focus();
    
    return;
  }
  
  if (email.value == "") {
    bootbox.alert("E-mail não informado");
    email.focus();
    return;
  }

  if (mensagem.value == "") {
    bootbox.alert("Digite uma mensagem");
    mensagem.focus();
    return;
  }
  
  alert("Mensagem enviada!");
  
}


  