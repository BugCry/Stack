<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Full Stack Ajax+Php+Mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <p>WEB V2.0</p>

        <form id="F01" method="POST">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="C01" name="C01">
                </div>
                <div class="form-group col-md-5">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="C02" name="C02">
                </div>
                <div class="form-group col-md-2">
                    <label>Edad</label>
                    <input type="text" class="form-control" id="C03" name="C03">
                </div>
            </div>
            <div class="form-group">
                <label>Trabajo</label>
                <input type="text" class="form-control" id="C04" name="C04" placeholder="PHP test">
            </div>
            <input type="submit" name="Registro" value="Registrar Nuevo Usuario" class="btn btn-primary"></input>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#F01').submit(function(e) {
                e.preventDefault();
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
            });
        });
    </script>
</body>

</html>