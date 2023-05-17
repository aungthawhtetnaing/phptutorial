<?php 
session_start();


$item=['book','TV','Phone','Laptop'];
$price=['122.99','145.00','134.889','234'];

if(!isset($_SESSION['buy'])){
    session_destroy();
}

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
<table>
        <thead>
            <tr>
                <td>Category</td>
                <td>Price</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $sum=[];
            foreach ($_SESSION['cart'] as $x) { 
                array_push($sum,$price[$x]);
                echo "<tr>";
                echo "<td>".$item[$x]."</td>";
                echo "<td>".$price[$x]."</td>";
                
                echo "</tr>";
               
            }
            
            echo "<h4>".array_sum($sum)."</h4>";
            ?>
            
        </tbody>
    </table>
    <a href="catlog.php">shoppingcat</a>
   <?php
   echo "<a href=".$_SERVER['PHP_SELF'].">CLear</a>"
   ?>
</form>
</body>
</html>