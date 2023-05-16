<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="valitationform.php"><script>alert('hacked')</script>
        name:<input type="text" name="name"/></br>
        email:<input type="text" name="email"/></br>
        website:<input type="text" name="website"/></br>
        comment:<textarea name="comment" cols='15' row="10"></textarea></br>

        gender
        <input type="radio" name="gender" value="male"/>:male</br>
        <input type="radio" name="gender" value="female"/>:female</br>
        <input type="radio" name="gender" value="tarn"/>:matarnle</br>
        <input type="submit"/>

    </form>
</body>
</html>