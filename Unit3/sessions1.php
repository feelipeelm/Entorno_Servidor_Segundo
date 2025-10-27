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
    $_SESSION["t-shirt"] = " ";
    if(isset($_POST["T-shirts"])) && (isset($_POST["Jumpers"])) && (isset($_POST["Jeans"])){
    ?>
    <form>
       <label for="lang">T-Shirts</label>
        <select name="T-shirts" id="lang">
         <option value="red">Long-sleeves, Red</option>
         <option value="green">Short-sleeves, Green</option>
         <option value="pink">Sleevesless, Pink</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    }
    if (isset($_POST["T-shirts"])){ $_SESSION["Shirt"]=$_POST["T-shirts"];
    ?>
    <form>
         <label for="lang">Jumpers</label>
        <select name="Jumpers" id="lang">
          <option value="blue">Hoodie, Blue</option>
          <option value="black">Zipper, Black</option>
          <option value="grey">Crewneck, Grey</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    }
    if (isset($_POST["Jumpers"])){ $_SESSION["Jumper"]=$_POST["Jumpers"];
    ?>
    <form>
        <label for="lang">Jeans</label>
        <select name="Jeans" id="lang">
          <option value="darkblue">Skinny, Dark Blue</option>
          <option value="lightblue">Regular, Light Blue</option>
          <option value="black">Ripped, Black</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    }
</body>
</html>