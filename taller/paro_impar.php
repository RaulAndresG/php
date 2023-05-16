<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    

<form action="paro_impar.php" method="post">
<!--     <select name="cripto" id="">

    <option value="">bitcon</option>
    <option value="">eteriun</option>
    <option value="">XRP</option>

    </select> -->

    <label class="form-control" >Tu numero rey</label>
        <input type="number" name="numero1" >

        <input type="submit" value ="Send">

        </form>
</body>
</html>


<?php

$numero  = $_POST['numero1'];


if ($numero % 2 == 0) {
    echo "El número {$numero} es par.";
} else {
    echo "El número {$numero} es impar.";
}

echo "<br>";

if ($numero > 10) {
    echo "El número {$numero} es mayor que 10.";
} else {
    echo "El número {$numero} no es mayor que 10.";
}
?>
