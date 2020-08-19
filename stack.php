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

        <p>WEB V5.5 (now with jqBootstrapValidation! :D)</p>

        <form id="F01" method="POST">
            <div class="form-row">
                <div class="form-group col-md-5 control-group">
                    <label class="control-label">Nombre</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="C01" name="C01" pattern="^[0-9]{1,20}" data-validation-pattern-message="Se requiere un nombre valido" required="required" />
                        <p class="text-danger help-block"></p>
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
                        <input type="number" class="form-control" id="C03" name="C03" pattern="[1-9]{3}" data-validation-pattern-message="Seleccione una edad Valida" required="required" />
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
            <input type="submit" name="B01" id="B01" value="Registrar Nuevo Usuario" class="btn btn-primary"></input>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>
  

    <!--<script src="./Stack/Scripts/F01_create.js"></script>-->
    <!--<script src="./Stack/Scripts/F01_createUser.js"></script>-->
    <!--<script src="./Stack/Scripts/tutorial.js"></script>-->


    <script>
        $(document).ready(function() {

            $('#F01 input, #F01 textarea').jqBootstrapValidation({
                preventSubmit: true,
                submitSuccess: function($form, event) {
                    event.preventDefault();
                    $this = $('#B01');
                    $this.prop('disabled', true);
                    var form_data = $("#F01").serialize();
                    $.ajax({
                        url: "createUser.php",
                        method: "POST",
                        data: form_data,
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
                                title: 'Oppsie',
                                html: jqXHR.responseText + '<b> Error al crear Usuario :C </b>',
                                icon: 'error',
                            });
                        },
                        complete: function() {
                            setTimeout(function() {
                                $this.prop("disabled", false);
                            }, );
                        }
                    });
                },
            });

        });
    </script>

</body>

</html>