$(document).ready(function() {
    $("#cep").blur(function() {

        $.post("/biodex/back/cep/buscarcep.php", "cep=" + $("#cep").val(), function(data) {
            if (data != "") {
                var obj = jQuery.parseJSON(data);
                $("#cidade").val(obj.localidade);
                $("#estado").val(obj.uf);

            }

        })

    });

});