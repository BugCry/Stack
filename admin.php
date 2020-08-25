<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administracion de datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card text-center">
                    <div class="card-header text-left">
                        Administración de Usuario V1.0
                    </div>
                    <div class="card-body text-left">
                        <span class="btn btn-primary">Agregar Usuario</span>
                    </div>
                    <hr>
                    <div id="T01"></div>
                    <div class="card-footer text-muted">
                        -----
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.6/jqBootstrapValidation.js"></script>

<script>
    $(document).ready(function() {
        $('#T01').load('tabla.php');
    });
</script>