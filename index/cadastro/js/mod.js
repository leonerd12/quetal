$(document).ready(function() {
    $("#cadbtn").click(function() {
        $.ajax({
            url: '/quetal/index/cadastro/cadastrar.php',
            type: 'POST',
            data: {
                nome: $("#nomeInput").val(),
                sNome: $("#snomeInput").val(),
                aaaa: $("#anoInput").val(),
                mm: $("#mesInput").val(),
                dd: $("#diaInput").val(),
                email: $("#ecadInput").val(),
                senha: $("#scadInput").val(),
                1: ($("#g1")[0].checked) ? 1 : 0,
                2: ($("#g2")[0].checked) ? 1 : 0,
                3: ($("#g3")[0].checked) ? 1 : 0,
                4: ($("#g4")[0].checked) ? 1 : 0,
                5: ($("#g5")[0].checked) ? 1 : 0,
                6: ($("#g6")[0].checked) ? 1 : 0,
                7: ($("#g7")[0].checked) ? 1 : 0,
                9: ($("#g9")[0].checked) ? 1 : 0
            }
        }).done(function(data) {
            var dados = JSON.parse(data);
            if (dados.sucesso) {
                window.location.replace("/quetal/index/");
            } else {
                alert("Email já cadastrado.");
            }
        });
    });
    $("#limparcadbtn").click(function() {
        $("#nomeInput").val("");
        $("#snomeInput").val("");
        $("#anoInput").val("");
        $("#mesInput").val("");
        $("#diaInput").val("");
        $("#ecadInput").val("");
        $("#scadInput").val("");
    });
});