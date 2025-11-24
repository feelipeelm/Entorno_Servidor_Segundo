<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    echo "<h2>Resumen de tu compra:</h2>";
    echo "Camiseta: " . $_SESSION['camiseta'] . "<br>";
    echo "Sudadera: " . $_SESSION['jumper'] . "<br>";
    echo "Vaquero: " . $_SESSION['jeans'] . "<br>";
    ?>
</body>
</html>