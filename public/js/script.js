//retorna cidade e estado a partir do CEP
function consultaCep() {

  var cep = $('#inputCep').val();

  $.getJSON("https://viacep.com.br/ws/" + cep + "/json/", function (dados) {

    if (!("erro" in dados)) {
      $("#inputEstado").val(dados.uf)
      $("#inputCidade").val(dados.localidade)
    }
  });
}

//Máscara dos inputs
$(document).ready(function () {
  var $cpf = $("#inputCpf");
  var $telefone = $("#inputTelefone");
  var $dataNasc = $("#inputDataNasc");
  $cpf.mask('000.000.000-00', { reverse: true });
  $telefone.mask('(00)0000-0000', { reverse: true });
  $dataNasc.mask('00/00/0000', { reverse: true });
});
