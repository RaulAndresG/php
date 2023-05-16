<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="factura.php" method="post">
    <select name="cripto" id="">

    <option value="">bitcon</option>
    <option value="">eteriun</option>
    <option value="">XRP</option>

    </select>

    <label >cantidad</label>
        <input type="number" name="cantidad">

    <label >precio</label>
        <input type="number" name="precio">

        <input type="submit" value ="Send">

        </form>
</body>
</html>
<?php 




/* 
$a="El Usuario es {$_POST["cantidad"]} <br> " ;

$b="<br> Su Contraseña es {$_POST["precio"]}" ;



$hola = $a * $b;

echo $a;
echo $b;

echo "<br> el total es {$hola}"
 */


$bit = $_POST['cripto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$may = $cantidad * $precio;

echo "nombre de bitcon {$bit} y la cantidad es {$may}";


?>