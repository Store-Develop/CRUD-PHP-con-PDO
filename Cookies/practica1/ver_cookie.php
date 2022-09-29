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

    if (!$_COOKIE["idioma_seleccionado"]) {

        header("Location: page1.php");
    } elseif ($_COOKIE["idioma_seleccionado"] == "es") {

        header("Location: spanish.php");
    } elseif ($_COOKIE["idioma_seleccionado"] == "en") {

        header("Location: english.php");
    }

    ?>
</body>

</html>