<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php
if (isset($_COOKIE["idioma_seleccionado"])) {
   
    
        if ($_COOKIE["idioma_seleccionado"] == "es") {

            header("Location: spanish.php");
        } elseif ($_COOKIE["idioma_seleccionado"] == "en") {
    
            header("Location: english.php");
        }
    }
?>

    <table width="25%" border="0" align="center">
        <tr>
            <td colspan="2" align="center">
                <h1>Elige el idioma</h1>
            </td>
        </tr>
        <tr>
            <td align="center"><a href="creaCookie.php?idioma=es" ><img src="https://astelus.com/wp-content/viajes/la-bandera-representativa-de-colombia-1152x759.png" alt="español" width="90" height="60"></a></td>
            <td align="center"><a href="creaCookie.php?idioma=en"><img src="https://static8.depositphotos.com/1518767/1030/i/600/depositphotos_10307320-stock-photo-uk-flag.jpg" alt="ingles" width="90" height="60"></a></td>
        </tr>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

</body>

</html>