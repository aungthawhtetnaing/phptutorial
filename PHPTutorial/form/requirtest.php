<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
        $name=$email=$phone="";
        $nameErr=$emailErr=$phoneErr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"])){
                $nameErr="name is required";
          
            }else{
                $name= test_input($_POST["name"]);
            }
            if(empty($_POST["email"])){
                $emailErr="email is required";
            }else{
                $email=test_input($_POST['email']);
            }
            if(empty($_POST["phone"])){
                $phoneErr="phone is required";
            }else{
                $phone=test_input($_POST['phone']);
            }
        }
    
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }

    ?>


    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        name:<input type="text" name="name"/>
        <span clasName="err"><?php echo $nameErr?></span>
        </br>
        email:<input type="text" name="email"/>
        <span class="err"><?php echo $emailErr?></span>
        </br>
        phone:<input type="text" name="phone"/>
        <span class="err"><?php echo $phoneErr?></span>
        </br>
 
        <input type="submit" name="submit" value="Submit"/>
    </form>


    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
    ?>


</body>
</html>