<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['camiseta'] = $_POST['camiseta'];
    header("Location: jumper.php");
    exit;
}
?>
<form method="post">
    <label>Camiseta:</label>
    <select name="camiseta">
        <option value="Long-sleeves, Red">Long-sleeves, Red</option>
        <option value="Short-sleeves, Green">Short-sleeves, Green</option>
        <option value="Sleeveless, Pink">Sleeveless, Pink</option>
    </select>
    <input type="submit" value="Siguiente">
</form>
