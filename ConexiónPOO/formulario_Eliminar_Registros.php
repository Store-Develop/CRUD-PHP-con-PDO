<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación de Registros.</title>

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
    <form action="pagina_Eliminar_PDO.php" method="post">
    <table><tr><td>
    Código:</td><td><input type="text" name="C_emp"/></td></tr>
    <tr><td><input type="submit" name="enviando" value="Eliminar"/></td></tr>
    </table>
    </form>
</body>
</html>