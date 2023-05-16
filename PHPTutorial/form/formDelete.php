<?php 

$nameErr="";
if($_SERVER['REQUEST_METHOD']=='POST'){
   $data=file_get_contents("php://input");
   var_dump($data);
   parse_str($data,$_DELETE);
   var_dump($_DELETE);
    //var_dump($_POST);
    // var_dump($_REQUEST);
    // var_dump($_GET);
    // echo $_REQUEST['fname'];
    // return;
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="_method" value="DELETE"/></br>
    <input type="hidden" name="id" value="1"/></br>
        <input type="text" name="fname" id="fname"/></br>
        <span><?php echo $nameErr ?></span></br>
        <input type="submit"/>
    </form>
</body>
</html>