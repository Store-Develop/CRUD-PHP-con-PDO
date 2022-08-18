<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Style.css" type="text/css" />
    <title>Formulario</title>
   
</head>
<body>
    <h1>Eliminar Personal</h1>
    <form name="form1" method="get" action="eliminar_Registro.php">

    <table border="0" align="center">
        <tr>
            <td class="Tlabel">Código:</td>
            <td><label for="C_emp"></label>
            <input type="number" name="C_emp" id="C_emp"></td>
        </tr>

        <tr>
            <td class="Tlabel">Apellido:</td>
            <td><label for="A_emp"></label>
            <input type="text" name="A_emp" id="A_emp"></td>
        </tr>

        <tr>
            <td class="Tlabel">Nombre:</td>
            <td><label for="N_emp"></label>
            <input type="text" name="N_emp" id="N_emp"></td>
        </tr>

        <tr>
            <td class="Tlabel">Cargo:</td>
            <td><label for="Cargo_emp"></label>
            <input type="text" name="Cargo_emp" id="Cargo_emp"></td>
        </tr>

        <tr>
            <td class="Tlabel">Departamento:</td>
            <td><label for="D_emp"></label>
            <input type="text" name="D_emp" id="D_emp"></td>
        </tr>

        <tr>
            <td class="Tlabel">Salario:</td>
            <td><label for="S_emp"></label>
            <input type="number" name="S_emp" id="S_emp"></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td align="center"> <input type="submit" name="enviar" id="enviar" value="Eliminar"/></td>
            <td align="center"> <input type="reset" name="borrar" id="borrar" value="Borrar"/></td>
        </tr>
        
    </table>
    </form>
</body>
</html>