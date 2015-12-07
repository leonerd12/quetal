$(document).ready(function() {
    $("#logarbtn").click(function() {
        $.ajax({
            url: '/login.php',
            type: 'POST',
            data: {
                email: $("#emailInput").val(),
                senha: $("#senhaInput").val()
            }
        }).done(function(data) {
            var dados = JSON.parse(data);
            if (dados.sucesso) {
                window.location.replace("/principal/");
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
    $("#limparbtn").click(function() {
        $("#emailInput").val("");
        $("#senhaInput").val("");
    });
});