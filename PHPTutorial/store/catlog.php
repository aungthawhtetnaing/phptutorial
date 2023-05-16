<?php 
session_start();
if(isset($_GET['buy'])){
    $_SESSION['cart'][]=$_GET['buy'];
    header('location:'.$_SERVER['PHP_SELF']);
    exit();
}


$item=['book','TV','Phone','Laptop'];
$price=['122.99','145.00','134.889','234'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_SESSION['cart'])){
        echo "<p>".count($_SESSION['cart'])."</p>";
    }else{
        echo "0";
    }
    ?>
    <table>
        <thead>
            <tr>
                <td>Category</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
        <?php
            for ($i=0; $i <count($item) ; $i++) { 
                echo "<tr>";
                echo "<td>".$item[$i]."</td>";
                echo "<td>".number_format($price[$i],2)."</td";
                echo "<td><a href=".$_SERVER['PHP_SELF']."?buy=".$i.">Add to Cart</a></td>";
                echo "</tr>";
               
            }
            ?>
        </tbody>
    </table>
  <a href="shoppingcart.php">Shopping cart</link>
 
</body>
</html>