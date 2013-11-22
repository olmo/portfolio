$(document).ready(function() {

    $("#resp").hide();

    $(".responder").click(function(e){
        $("#pers").text($(this).parent().parent().parent().find("strong").text());
        $("#BlogComentario_id_padre").val($(this).parent().find("div").text());

        $("#resp").show();
    });

    $("#noresp").click(function(e){
        $("#BlogComentario_id_padre").val(0);
        $("#resp").hide();
    });
});
