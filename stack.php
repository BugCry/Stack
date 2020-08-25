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
    <div>
        <div class="text-center fixed-top w-100 h-100 p-5" id="loader" style="display: none; background-color: #000000a3;">
            <img src="load.svg" class="p-5 m-5 w-50 h-50" alt="">
        </div>

        <div class="container">

            <p>WEB V6.5 (validations & loader :D)</p>

            <form id="F01" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-5 control-group">
                        <label class="control-label">Nombre</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="C01" name="C01" pattern="[a-zA-Z]{1,15}" data-validation-pattern-message="Se requiere un nombre valido" required="required" />
                            <p class="text-danger help-block"></p>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group col-md-5 control-group">
                        <label class="control-label">Apellido</label>
                        <div class="controls">
                            <input type="text" class="form-control" id="C02" name="C02" pattern="[A-Za-z]{1,15}" data-validation-pattern-message="Se requiere un apellido valido" required="required" />
                            <p class="text-danger help-block"></p>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="form-group col-md-2 control-group">
                        <label class="control-label">Edad</label>
                        <div class="controls">
                            <input type="number" class="form-control" id="C03" name="C03" pattern="[0-9]{1,3}" data-validation-pattern-message="Seleccione una edad Valida" required="required" />
                            <p class="text-danger help-block"></p>
                            <p class="help-block"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group control-group">
                    <label class="control-label">Trabajo</label>
                    <div class="controls">
                        <input type="text" class="form-control" id="C04" name="C04" placeholder="PHP test" required />
                        <p class="help-block"></p>
                    </div>
                </div>
                <input type="submit" name="B01" id="B01" value="Registrar Nuevo Usuario" class="btn btn-primary"></input>
            </form>

        </div>
        <!--END Registro-->
        <br>

        <div class="container">

            <form action="">
                <label>Filtrar:</label>
                <input name="users" onkeyup="showUser(this.value)">
                <!--onkeyup ejecuta el script showHint declarado en el Head-->
            </form>
            <br>
            <div id="txtHint">
                <b>La tabla se mostrará aqui...</b>
                <div class="text-center position-sticky" id="loader" style="display: none">
                    <img src="load.gif" class="" alt="">
                </div>
            </div>
        </div>
        <!--END tabla-->
    </div>
    <!--END HTML-->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>

    <!--Boootstrap-->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    Bootstrap no funciona .-.-->


    <script>
        $(document).ready(function() {
            var screen = $('#loader');
            loadingScreen(screen);
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
        //loader function
        function loadingScreen(screen) {
            $(document)
                .ajaxStart(function() {
                    screen.fadeIn();
                })
                .ajaxStop(function() {
                    screen.fadeOut();
                });
        }
    </script>

    <script>
        //consulta por id
        function showUser(str) { //con la funcion caputrada, se ejecuta la funcion showUser que espera un string
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST", "getuser.php?q=" + str, true);
                xmlhttp.send();
            }
        }
    </script>
</body>

</html>