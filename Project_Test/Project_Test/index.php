<?php
    include("assets/mysql/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cascade - Home</title>
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
        <?php
            $sql = "SELECT `order`.order_id, `snacks`.snacks_name, `coffee`.coffee_name, `drinks`.drinks_name
            FROM
                `order`
            LEFT JOIN
                `snacks` ON `order`.snacks_id = `snacks`.snacks_id
            LEFT JOIN
                `coffee` ON `order`.coffee_id = `coffee`.coffee_id
            LEFT JOIN
                `drinks` ON `order`.drinks_id = `drinks`.drinks_id";
            $result = $conn->query($sql);
            
            echo "<h1>Displaying orders</h1>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Order ID" , "</th>";
            echo "<th>Snacks" , "</th>";
            echo "<th>Coffee" , "</th>";
            echo "<th>Drinks" , "</th>";
            echo "</tr>";
            if($result->num_rows > 0){
                while($rows = $result->fetch_assoc()){
                    $snacks_name = $rows["snacks_name"] ? $rows["snacks_name"] : "No Snacks";
                    $drinks_name = $rows["drinks_name"] ? $rows["drinks_name"] : "No Drinks";
                    $coffee_name = $rows["coffee_name"] ? $rows["coffee_name"] : "No coffee";
                    echo "<tr>";
                    echo "<td>" , $rows["order_id"] , "</td>";
                    echo "<td>" , $snacks_name, "</td>";
                    echo "<td>" , $coffee_name, "</td>";
                    echo "<td>" , $drinks_name, "</td>";
                    echo "</tr>";
                }
            }
            else{
                echo "0 results";
            }
            echo "</table>";
            ?>
    </main>
</body>
</html>
<?php
mysqli_close(mysql: $conn);
?>
