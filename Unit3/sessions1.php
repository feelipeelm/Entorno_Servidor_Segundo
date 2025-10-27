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
    // Set session variables
    $_SESSION["t-shirt"] = " ";


    ?>
    
    <form>
         <label for="lang">T-Shirts</label>
        <select name="products" id="lang">
         <option value="red">Long-sleeves, Red</option>
         <option value="green">Short-sleeves, Green</option>
         <option value="pink">Sleevesless, Pink</option>
        </select>
        <br>
         <label for="lang">Jumpers</label>
        <select name="products" id="lang">
          <option value="blue">Hoodie, Blue</option>
          <option value="black">Zipper, Black</option>
          <option value="grey">Crewneck, Grey</option>
        </select>
        <br>
        <label for="lang">Jeans</label>
        <select name="products" id="lang">
          <option value="darkblue">Skinny, Dark Blue</option>
          <option value="lightblue">Regular, Light Blue</option>
          <option value="black">Ripped, Black</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>