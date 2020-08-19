$(document).ready(function() {
    preventSubmit: true,
    $('#F01').submit(function(e) {
        e.preventDefault();
        // Prueba de datos enviados del formulario
        //var datos = $('#F01').serialize();
        //alert(datos);
        //
        $.ajax({
            type: 'POST', //método de envio1
            url: 'createUser.php', //archivo que recibe la peticion
            data: $('#F01').serialize(), //datos que se envian a traves de ajax
            success: function(respuesta) {
                if (respuesta == 1) {
                    Swal.fire({
                        title: 'Ok',
                        text: 'Usuario Creado',
                        icon: 'success',
                    });
                } else {
                    Swal.fire({
                        title: 'Oppsie doopsie',
                        text: 'Error al crear Usuario :C',
                        icon: 'error',
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Oppsie',
                    html: jqXHR.responseText + '<b> Error al crear Usuario :C </b>',
                });
            }
        });
    });
});