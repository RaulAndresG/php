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
    

<form action="estudiantes.php" method="post">
<!--     <select name="cripto" id="">

    <option value="">bitcon</option>
    <option value="">eteriun</option>
    <option value="">XRP</option>

    </select> -->

    <label class="form-control" >nota 1</label>
        <input type="number" name="nota1" >

    <label class="form-control" >nota 2</label>
        <input type="number" name="nota2">

    <label class="form-control" >nota 3</label>
        <input type="number" name="nota3">

        <input type="submit" value ="Send">

        </form>
</body>
</html>


<?php
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$promedio = ($nota1 + $nota2 + $nota3) / 3;

if ($promedio <= 4) {
    echo "estudie bobo mk"; 
} else {
    echo "Becado mi rey  " . "<br>"; 
}
echo " su nota fue de : {$promedio}"
?>
