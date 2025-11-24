<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['camisetas'] = $_POST['Tshirts'] ?? [];
    $_SESSION['Cantidad_Tshirts'] = $_POST['Cantidad_Tshirts'] ?? [];
    header("Location: jumpers2.php");
    exit;
}
?>
<h2>Selecciona tus camisetas</h2>

<form method="post">
    <label>Camisetas:</label><br>
    <input type="checkbox" name="Tshirts[Long-sleeves, Red]" value="yes" 
        <?php if(isset($_SESSION['camisetas']['Long-sleeves, Red'])) echo "checked"; ?>> Long-sleeves, Red
    Cantidad: <input type="number" name="Cantidad_Tshirts[Long-sleeves, Red]" min="0" 
        value="<?php echo $_SESSION['Cantidad_Tshirts']['Long-sleeves, Red'] ?? 0; ?>"><br>

    <input type="checkbox" name="Tshirts[Short-sleeves, Green]" value="yes"
        <?php if(isset($_SESSION['camisetas']['Short-sleeves, Green'])) echo "checked"; ?>> Short-sleeves, Green
    Cantidad: <input type="number" name="Cantidad_Tshirts[Short-sleeves, Green]" min="0"
        value="<?php echo $_SESSION['Cantidad_Tshirts']['Short-sleeves, Green'] ?? 0; ?>"><br>

    <input type="checkbox" name="Tshirts[Sleeveless, Pink]" value="yes"
        <?php if(isset($_SESSION['camisetas']['Sleeveless, Pink'])) echo "checked"; ?>> Sleeveless, Pink
    Cantidad: <input type="number" name="Cantidad_Tshirts[Sleeveless, Pink]" min="0"
        value="<?php echo $_SESSION['Cantidad_Tshirts']['Sleeveless, Pink'] ?? 0; ?>"><br>

    <input type="submit" value="Siguiente">
</form>
