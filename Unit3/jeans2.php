<?php
session_start();

// Guardar selección si viene del POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['jeans'] = $_POST['Jeans'] ?? [];
    $_SESSION['Cantidad_Jeans'] = $_POST['Cantidad_Jeans'] ?? [];
    header("Location: sessions3.php");
    exit;
}
?>

<h2>Selecciona tus vaqueros</h2>
<form method="post">
    <input type="checkbox" name="Jeans[Skinny, Dark Blue]" value="yes"
        <?php if(isset($_SESSION['jeans']['Skinny, Dark Blue'])) echo "checked"; ?>> Skinny, Dark Blue
    Cantidad: <input type="number" name="Cantidad_Jeans[Skinny, Dark Blue]" min="0"
        value="<?php echo $_SESSION['Cantidad_Jeans']['Skinny, Dark Blue'] ?? 0; ?>"><br>

    <input type="checkbox" name="Jeans[Regular, Light Blue]" value="yes"
        <?php if(isset($_SESSION['jeans']['Regular, Light Blue'])) echo "checked"; ?>> Regular, Light Blue
    Cantidad: <input type="number" name="Cantidad_Jeans[Regular, Light Blue]" min="0"
        value="<?php echo $_SESSION['Cantidad_Jeans']['Regular, Light Blue'] ?? 0; ?>"><br>

    <input type="checkbox" name="Jeans[Ripped, Black]" value="yes"
        <?php if(isset($_SESSION['jeans']['Ripped, Black'])) echo "checked"; ?>> Ripped, Black
    Cantidad: <input type="number" name="Cantidad_Jeans[Ripped, Black]" min="0"
        value="<?php echo $_SESSION['Cantidad_Jeans']['Ripped, Black'] ?? 0; ?>"><br>

    <input type="submit" value="Finalizar">
</form>
