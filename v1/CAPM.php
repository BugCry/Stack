<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax+php+mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form action="">
            <label>Filtrar6:</label>
            <input name="users" onkeyup="showUser(this.value)">
            <!--onkeyup ejecuta el script showHint declarado en el Head-->
        </form>
        <br>
        <div id="txtHint"><b>Person info will be listed here...</b></div>
    </div>
    <form id="F01" class="container">
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
        </div>
        
    </form>
    <button type="button" id="btnF01" class="btn btn-primary">Registrar Nuevo Usuario</button>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script>
        //java ? + ajax xmlHttpRequest() => ajax
        /*function showUser(str) { //con la funcion caputrada, se ejecuta la funcion showUser que espera un string
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
*/
        
            $("#btnF01").onclick(function() {
                Swal.fire({
                                title: 'Ok',
                                text: 'Usuario Creado',
                                icon: 'success',
                            });
                            /*
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
                    error: function(jqXHR, textStatus, errorThrown){
                        Swal.fire({
                        title: 'Oppsie',
                        html: jqXHR.responseText + '<b> Error al crear Usuario :C </b>',
                        icon: 'error',
                    });
                    } 
                });*/
            });
    </script>
</body>


</html>