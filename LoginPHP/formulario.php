<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>formulario</title>
  </head>
  <body>
    <h1>LOGIN</h1>
    <form action="pagina_Validar_Usuarios.php" method="POST">
      <table>
        <tr>
          <td class="izq">Usuario:</td>
          <td class="der"><input type="text" name="login" /></td>
        </tr>
        <tr>
          <td class="izq">Contraseña:</td>
          <td class="der"><input type="password" name="password" /></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="enviar" value="INGRESAR" />
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
