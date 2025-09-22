<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numero_1= $_GET['num1'];
        $numero_2= $_GET['num2'];
        $res= $numero_1 * $numero_2;
    echo "La multiplicación de $numero_1 y $numero_2 es : $res"
    ?>
</body>
</html>