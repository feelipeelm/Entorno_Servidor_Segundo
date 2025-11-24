<?php
session_start();

// Guardar selección si viene del POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['jumpers'] = $_POST['Jumpers'] ?? [];
    $_SESSION['Cantidad_Jumpers'] = $_POST['Cantidad_Jumpers'] ?? [];
    header("Location: jeans2.php");
    exit;
}
?>

<h2>Selecciona tus sudaderas</h2>
<form method="post">
    <input type="checkbox" name="Jumpers[Hoodie, Blue]" value="yes"
        <?php if(isset($_SESSION['jumpers']['Hoodie, Blue'])) echo "checked"; ?>> Hoodie, Blue
    Cantidad: <input type="number" name="Cantidad_Jumpers[Hoodie, Blue]" min="0"
        value="<?php echo $_SESSION['Cantidad_Jumpers']['Hoodie, Blue'] ?? 0; ?>"><br>

    <input type="checkbox" name="Jumpers[Zipper, Black]" value="yes"
        <?php if(isset($_SESSION['jumpers']['Zipper, Black'])) echo "checked"; ?>> Zipper, Black
    Cantidad: <input type="number" name="Cantidad_Jumpers[Zipper, Black]" min="0"
        value="<?php echo $_SESSION['Cantidad_Jumpers']['Zipper, Black'] ?? 0; ?>"><br>

    <input type="checkbox" name="Jumpers[Crewneck, Grey]" value="yes"
        <?php if(isset($_SESSION['jumpers']['Crewneck, Grey'])) echo "checked"; ?>> Crewneck, Grey
    Cantidad: <input type="number" name="Cantidad_Jumpers[Crewneck, Grey]" min="0"
        value="<?php echo $_SESSION['Cantidad_Jumpers']['Crewneck, Grey'] ?? 0; ?>"><br>

    <input type="submit" value="Siguiente">
</form>
