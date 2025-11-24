<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['jumper'] = $_POST['jumper'];
    header("Location: jeans.php");
    exit;
}
?>
<form method="post">
    <label>Sudadera:</label>
    <select name="jumper">
        <option value="Hoodie, Blue">Hoodie, Blue</option>
        <option value="Zipper, Black">Zipper, Black</option>
        <option value="Crewneck, Grey">Crewneck, Grey</option>
    </select>
    <input type="submit" value="Siguiente">
</form>
