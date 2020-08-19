<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajax+php</title>
    <script>
        function showHint(str) {
            if (str.length == 0) { //valida que no esté vacio, de estarlo no retorna nada
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "gethint.php?q=" + str, true); //aqui llama al archivo getHint.php donde ... deberia estar la base de datos ? de donde recibe los datos
                xmlhttp.send();
            }
        }
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <p><b>Start typing a name in the input field below:</b></p>
        <form action="">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            <!--onkeyup ejecuta el script showHint declarado en el Head-->
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>
    </div>
</body>

</html>