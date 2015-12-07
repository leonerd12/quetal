$(document).ready(function() {
    $("#cadbtn").click(function() {
        $.ajax({
            url: '/cadastro/cadastrar.php',
            type: 'POST',
            data: {
                nome: $("#nomeInput").val(),
                sNome: $("#snomeInput").val(),
                aaaa: $("#anoInput").val(),
                mm: $("#mesInput").val(),
                dd: $("#diaInput").val(),
                email: $("#ecadInput").val(),
                senha: $("#scadInput").val(),
                1: $("#g1")[0].checked,
                2: $("#g2")[0].checked,
                3: $("#g3")[0].checked,
                4: $("#g4")[0].checked,
                5: $("#g5")[0].checked,
                6: $("#g6")[0].checked,
                7: $("#g7")[0].checked,
                9: $("#g9")[0].checked
            }
        }).done(function(data) {
            var dados = JSON.parse(data);
            if (dados.sucesso) {
                window.location.replace("/");
            } else {
                alert("Email já cadastrado.");
            }
        });
    });
    $("#limparcadbtn").click(function() {
        $("#emailInput").val("");
        $("#senhaInput").val("");
    });
});