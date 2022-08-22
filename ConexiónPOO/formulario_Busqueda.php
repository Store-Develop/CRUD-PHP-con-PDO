<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda.</title>

    <style>
    table{
        width:300px;
        margin:auto;
        background-color: #FFC;
        border: 2px solid #f00;
        padding: 5px;
    }

    td{
        text-align: center;
    }
    </style>
</head>
<body>
    <form action="pagina_Busqueda_PDO.php" method="post">
    <table><tr><td>
    Nombre:</td><td><input type="text" name="nombre"/></td></tr>
    <tr><td>Área:</td><td><input type="text" name="area"/></td></tr>
    <tr><td colspan="2"><input type="submit" name="enviando" value="Realizar Busqueda"/></td></tr>
    </table>
    </form>
</body>
</html>