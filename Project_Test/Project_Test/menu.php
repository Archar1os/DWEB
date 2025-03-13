<?php
    include("assets/mysql/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cascade - Menu</title>
    <link rel="stylesheet" href="assets/css/styles.css"/>
</head>
<body>
    <header>
        <nav>
            <ul>
            <li><a href="index.php" class="links black">Home</a></li>
                <li><a href="about.php" class="links black">About</a></li>
                <li><a href="contact.php" class="links black">Contact</a></li>
                <li><a href="menu.php" class="links black">Menu</a></li>
                <li><a href="receipt.php" class="links black">Receipt</a></li>
                <li><a href="cart.php" class="links colorless"><img id="cart" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAA5UlEQVR4nN2UsQ7BUBSGPwsGAxEziweQiGdQEpNX8QzSd5B0EJ7AKGG3moytCSPBQKXJGZpI6tzmVsKX3O075z+3PS38C08glONlEfCIBdyAGhmxiAWlPaukgJ6FgG1SQA7YiRiFaSkDR6kbfJJHIkaPS4srNWuNXAEusllNhd8AruK3tRN5MpGrcOfiTjGgJUUnoJjgdWTy6AZ1DNkYbM7YtHkVOCgaR5PPgIJpwEQaLGV1rVKS38VduUXG5IFzyq9YzVD5DsK0AZnTB/ZAADgWvDeC2LV9C973Axwp9oGuBe+HeQGdhY4nafPkOQAAAABJRU5ErkJggg==" alt="shopping-cart--v1"></a></li>
            </ul>
        </nav>
    </header>
    <main>
        
    </main>
</body>
</html>
<?php
mysqli_close(mysql: $conn);
?>
