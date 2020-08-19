<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Stack Ajax + Php + Mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <p>WEB V2.8</p>

        <form id="F01" method="POST">
            <div class="form-row">
                <div class="form-group col-md-5 control-group">
                    <label class="control-label">Nombre</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="C01" name="C01" required />
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group col-md-5">
                    <label class="control-label">Apellido</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="C02" name="C02" required />
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label class="control-label">Edad</label>
                    <div class="controls">
                        <input type="number" class="form-control" id="C03" name="C03" required />
                        <p class="help-block"></p>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Trabajo</label>
                <div class="controls">
                    <input type="text" class="form-control" id="C04" name="C04" placeholder="PHP test" required />
                    <p class="help-block"></p>
                </div>
            </div>
            <input type="submit" name="Registro" value="Registrar Nuevo Usuario" class="btn btn-primary"></input>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        /*/
        $(function() {
            $('#F01').find("input,select,textarea").not("[type=submit]").jqBootstrapValidation({
                preventSubmit: true,
                submitSuccess: function($form, event) {
                    event.preventDefault();
                    //Prueba de datos enviados del formulario
                    var datos = $('#F01').serialize();
                    alert(datos);
                    
                    $.ajax({
                        type: 'POST', //método de envio
                        url: 'createUse.php', //archivo que recibe la peticion
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
        /*/
        $(document).ready(function() {
            $('#F01').submit(function(e) {
                e.preventDefault();
                /*/ Prueba de datos enviados del formulario
                var datos = $('#F01').serialize();
                alert(datos);
                /*/
                $.ajax({
                    type: 'POST', //método de envio1
                    url: 'createUse.php', //archivo que recibe la peticion
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
    
    </script>
</body>

</html>