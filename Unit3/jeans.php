<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['jeans'] = $_POST['jeans'];
    header("Location: sessions2.php");
    exit;
}
?>
<form method="post">
    <label>Vaquero:</label>
    <select name="jeans">
        <option value="Skinny, Dark Blue">Skinny, Dark Blue</option>
        <option value="Regular, Light Blue">Regular, Light Blue</option>
        <option value="Ripped, Black">Ripped, Black</option>
    </select>
    <input type="submit" value="Finalizar">
</form>
