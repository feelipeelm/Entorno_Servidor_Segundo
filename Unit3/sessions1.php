<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions Ejercicio</title>
</head>
<body>

<?php

// PASO 1 – CAMISETAS
if (!isset($_POST["Tshirts"]) && !isset($_POST["Jumpers"]) && !isset($_POST["Jeans"])) {
?>
<form action="sessions1.php" method="post">
    <label>¿Quieres una camiseta?</label>
    <input type="checkbox" name="quiero_camiseta" value="yes"> Sí
    <br><br>
    <div>
        <input type="checkbox" name="Tshirts[Long-sleeves, Red]" value="yes"> Long-sleeves, Red
        Cantidad: <input type="number" name="Cantidad_Tshirts[Long-sleeves, Red]" min="0" value="0"><br>

        <input type="checkbox" name="Tshirts[Short-sleeves, Green]" value="yes"> Short-sleeves, Green
        Cantidad: <input type="number" name="Cantidad_Tshirts[Short-sleeves, Green]" min="0" value="0"><br>

        <input type="checkbox" name="Tshirts[Sleeveless, Pink]" value="yes"> Sleeveless, Pink
        Cantidad: <input type="number" name="Cantidad_Tshirts[Sleeveless, Pink]" min="0" value="0"><br>
    </div>
    <br>
    <label>Cantidad total:</label>
    <input type="number" name="cantidad_camiseta" min="0" value="1">
    <br><br>
    <input type="submit" value="Siguiente">
</form>
<?php
exit;
}

// PASO 2 – JUMPERS
if (isset($_POST["Tshirts"])) {
    if (isset($_POST["quiero_camiseta"])) {
        $_SESSION["Shirt"] = $_POST["Tshirts"];
        $_SESSION["Cantidad_Camiseta"] = $_POST["cantidad_camiseta"];
        $_SESSION["Cantidad_Tshirts"] = $_POST["Cantidad_Tshirts"];
    } else {
        $_SESSION["Shirt"] = "No ha seleccionado ninguna camiseta";
        $_SESSION["Cantidad_Camiseta"] = 0;
    }
?>
<form action="sessions1.php" method="post">
    <label>¿Quieres una sudadera?</label>
    <input type="checkbox" name="quiero_jumper" value="yes"> Sí
    <br><br>
    <div>
        <input type="checkbox" name="Jumpers[Hoodie, Blue]" value="yes"> Hoodie, Blue
        Cantidad: <input type="number" name="Cantidad_Jumper[Hoodie, Blue]" min="0" value="0"><br>

        <input type="checkbox" name="Jumpers[Zipper, Black]" value="yes"> Zipper, Black
        Cantidad: <input type="number" name="Cantidad_Jumper[Zipper, Black]" min="0" value="0"><br>

        <input type="checkbox" name="Jumpers[Crewneck, Grey]" value="yes"> Crewneck, Grey
        Cantidad: <input type="number" name="Cantidad_Jumper[Crewneck, Grey]" min="0" value="0"><br>
    </div>
    <br>
    <label>Cantidad total:</label>
    <input type="number" name="cantidad_jumper" min="0" value="1">
    <br><br>
    <input type="submit" value="Siguiente">
</form>
<?php
exit;
}

// PASO 3 – JEANS
if (isset($_POST["Jumpers"])) {
    if (isset($_POST["quiero_jumper"])) {
        $_SESSION["Jumper"] = $_POST["Jumpers"];
        $_SESSION["Cantidad_Jumper"] = $_POST["cantidad_jumper"];
        $_SESSION["Cantidad_Jumper_detalle"] = $_POST["Cantidad_Jumper"];
        $_SESSION["Jumpers_detalle"] = $_POST["Jumpers"];
    } else {
        $_SESSION["Jumper"] = "No ha seleccionado ninguna sudadera";
        $_SESSION["Cantidad_Jumper"] = 0;
    }
?>
<form action="sessions1.php" method="post">
    <label>¿Quieres vaquero?</label>
    <input type="checkbox" name="quiero_jean" value="yes"> Sí
    <br><br>
    <div>
        <input type="checkbox" name="Jeans[Skinny, Dark Blue]" value="yes"> Skinny, Dark Blue
        Cantidad: <input type="number" name="Cantidad_Jean[Skinny, Dark Blue]" min="0" value="0"><br>

        <input type="checkbox" name="Jeans[Regular, Light Blue]" value="yes"> Regular, Light Blue
        Cantidad: <input type="number" name="Cantidad_Jean[Regular, Light Blue]" min="0" value="0"><br>

        <input type="checkbox" name="Jeans[Ripped, Black]" value="yes"> Ripped, Black
        Cantidad: <input type="number" name="Cantidad_Jean[Ripped, Black]" min="0" value="0"><br>
    </div>
    <br>
    <label>Cantidad total:</label>
    <input type="number" name="cantidad_jean" min="0" value="1">
    <br><br>
    <input type="submit" value="Siguiente">
</form>
<?php
exit;
}


if (isset($_POST["Jeans"])) {
    if (isset($_POST["quiero_jean"])) {
        $_SESSION["Jean"] = $_POST["Jeans"];
        $_SESSION["Cantidad_Jean"] = $_POST["cantidad_jean"];
    } else {
        $_SESSION["Jean"] = "No ha seleccionado ningún vaquero";
        $_SESSION["Cantidad_Jean"] = 0;
    }

    echo "<h2>Resumen de tu compra:</h2>";

    echo "Has seleccionado la camiseta ";
    echo is_array($_SESSION["Shirt"]) ? implode(", ", array_keys($_SESSION["Shirt"])) : $_SESSION["Shirt"];
    echo " (Cantidad: " . $_SESSION["Cantidad_Camiseta"] . ")<br>";

    echo "Has seleccionado la sudadera ";
    echo is_array($_SESSION["Jumper"]) ? implode(", ", array_keys($_SESSION["Jumper"])) : $_SESSION["Jumper"];
    echo " (Cantidad: " . $_SESSION["Cantidad_Jumper"] . ")<br>";

    echo "Has seleccionado el vaquero ";
    echo is_array($_SESSION["Jean"]) ? implode(", ", array_keys($_SESSION["Jean"])) : $_SESSION["Jean"];
    echo " (Cantidad: " . $_SESSION["Cantidad_Jean"] . ")<br>";
}
?>
</body>
</html>
