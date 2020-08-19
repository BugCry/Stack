$(function() {
        $('#F01').find("input,select,textarea").jqBootstrapValidation({
        submitSuccess: function($form, event) {
            event.preventDefault();
            $('#B01').prop('disabled', true);
            $.ajax({
                type: 'POST', //método de envio
                url: '../createUse.php', //archivo que recibe la peticion
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
                            title: 'Oppsie',
                            text: 'Error al crear Usuario :C',
                            icon: 'error',
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    Swal.fire({
                        title: 'Oppsie',
                        html: jqXHR.responseText + '<b> Error al crear Usuario :C </b>',
                        icon: 'error',
                    });
                }
            });
        }
    });
});