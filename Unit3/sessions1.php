<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Set session variables

    if(!isset($_POST["T-shirts_input"]) && !isset($_POST["Jumpers_input"]) && !isset($_POST["Jeans_input"])){
    ?>
    <form action="sessions1.php" method="post">
       <label for="lang">¿Quieres una camiseta?</label>
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
        <br><br>
        <label>Cantidad:</label>
        <input type="number" name="cantidad_camiseta" min="0" value="1">
        <br><br>
        <input type="submit" value="Sigiuiente">
    
    <?php
    }
    if (isset($_POST["T-shirts"])){ 
        if (isset($_POST["quiero_camiseta"])){
            $_SESSION["Shirt"]= $_POST["T-shirts"];
            $_SESSION["Cantidad_Camiseta"]=$_POST["cantidad_camiseta"];
        }else {
            $_SESSION["Shirt"]="No ha seleccionado ninguna camiseta";
            $_SESSION["Cantidad_Camiseta"]=0;
        } 
    ?>
    <form action="sessions1.php" method="post">
         <label for="lang">¿Quieres una Jumper</label>
          <input type="checkbox" name="quiero_jumper" value="yes"> Sí
        <br><br>
        <label for="lang">Elige el tipo:</label>
        <select name="Jumpers" id="lang">
          <option value="blue">Hoodie, Blue</option>
          <option value="black">Zipper, Black</option>
          <option value="grey">Crewneck, Grey</option>
        </select>
        <div>
            <input type="checkbox" name="Jumpers[Long-sleeves, Red]" value="yes"> Long-sleeves, Red 
            Cantidad: <input type="number" name="cantidad_jumper[Hoodie, Blue]" min="0" value="0"><br>

            <input type="checkbox" name="Jumpers[Short-sleeves, Green]" value="yes"> Short-sleeves, Green 
            Cantidad: <input type="number" name="cantidad_jumper[Short-sleeves, Green]" min="0" value="0"><br>

            <input type="checkbox" name="Jumpers[Sleeveless, Pink]" value="yes"> Sleeveless, Pink 
            Cantidad: <input type="number" name="cantidad_jumper[Sleeveless, Pink]" min="0" value="0"><br>
        </div>
        <br><br>
        <label>Cantidad:</label>
        <input type="number" name="cantidad_jumper" min="0" value="1">
        <br><br>
        <input type="submit" value="Siguiente">
    
    <?php
    }
    if (isset($_POST["Jumpers"])){ 
        if(isset($_POST["quiero_jumper"])){
            $_SESSION["Jumper"]= $_POST["Jumpers"];
            $_SESSION["Cantidad_Jumper"]=$_POST["cantidad_jumper"];
        }else {
            $_SESSION["Jumper"]="No ha seleccionado ninguna sudadera";
            $_SESSION["Cantidad_Jumper"]=0;
        }
    ?>
    <form action="sessions1.php" method="post">
        <label>¿Quieres vaquero?</label>
        <input type="checkbox" name="quiero_jean" value="yes"> Sí
        <br><br>
        <label for="lang">Elige el tipo:</label>
        <select name="Jeans" id="lang">
          <option value="darkblue">Skinny, Dark Blue</option>
          <option value="lightblue">Regular, Light Blue</option>
          <option value="black">Ripped, Black</option>
        </select>
        <br><br>
        <br><br>
        <label>Cantidad:</label>
        <input type="number" name="jean_qty" min="0" value="1">
        <input type="submit" value="Siguiente">
    
    <?php
    }
    if(isset($_POST["Jeans"])){ 
        if(isset($_POST["quiero_jean"])){
            $_SESSION["Jean"]= $_POST["Jeans"];
            $_SESSION["Cantidad_Jean"]=$_POST["jean_qty"];
        }else {
            $_SESSION["Jean"]="No ha seleccionado ningun vaquero";
            $_SESSION["Cantidad_Jean"]=0;
        }
        echo "<h2>Resumen de tu compra:</h2>";
        echo "Has seleccionado la camiseta " . $_SESSION["Shirt"] . " (Cantidad: " . $_SESSION["Cantidad_Camiseta"] . ")";    
        echo "<br>";
        echo "Has seleccionado la sudadera " . $_SESSION["Jumper"] . " (Cantidad: " . $_SESSION["Cantidad_Jumper"] . ")";
        echo "<br>";
        echo "Has seleccionado el vaquero " . $_SESSION["Jean"] . " (Cantidad: " . $_SESSION["Cantidad_Jean"] . ")";
    }
    ?>
</body>
</html>