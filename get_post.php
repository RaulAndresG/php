<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_post.php" method="post">

        <label >user</label>
        <input type="text" name="user">
        <label >Password</label>
        <input type="password" name="password">
<!--         <input type="submit" value ="Send"> -->
    </form>
</body>
</html>

<?php 



$a="El Usuario es {$_POST["user"]} <br> " ;

$b="<br> Su Contraseña es {$_POST["password"]}" ;



$hola = $a*$b;

echo "<br> el total es {$hola}"



?>