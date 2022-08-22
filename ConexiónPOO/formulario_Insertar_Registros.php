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
    <form action="pagina_Insertar_PDO.php" method="post">
    <table>
    <tr><td>Código:</td><td><input type="text" name="C_emp"/></td></tr>
    <tr><td>Apellidos:</td><td><input type="text" name="A_emp"/></td></tr>
    <tr><td>Nombre:</td><td><input type="text" name="N_emp"/></td></tr>
    <tr><td>Cargo:</td><td><input type="text" name="CA_emp"/></td></tr>
    <tr><td>Departamento:</td><td><input type="text" name="D_emp"/></td></tr>
    <tr><td>Salario:</td><td><input type="text" name="S_emp"/></td></tr>
    <tr><td colspan="2"><input type="submit" name="enviando" value="Registrar"/></td></tr>
    </table>
    </form>
</body>
</html>