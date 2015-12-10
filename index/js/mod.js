$(document).ready(function () {
    $("#logarbtn").click(function () {
        $.ajax({
            url: '/quetal/index/login.php',
            type: 'POST',
            data: {
                email: $("#emailInput").val(),
                senha: $("#senhaInput").val()
            }
        }).done(function (data) {
            var dados = JSON.parse(data);
            if (dados.sucesso) {
                location.replace("/quetal/index/");
            } else {
                if (dados.erroSenha) {
                    alert("Dados incorretos.");
                }
                if (dados.noMail) {
                    alert("Usuário não cadastrado.");
                }
            }
        });
    });
    $("#limparbtn").click(function () {
        $("#emailInput").val("");
        $("#senhaInput").val("");
    });
    $("#cadastrarbtn").click(function(){
        location.replace("/quetal/index/cadastro/");
    });
});