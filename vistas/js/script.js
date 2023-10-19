$("#email").change(function(){
    var email = $(this).val();
    //console.log("tu email es :", email);
    var datos = new FormData();
    datos.append("validadEmail", email);

    $.ajax({

        url:"ajax/formularios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        success: function(respuesta){
            console.log("Contenido de respuesta:", respuesta);
        }
    });

})