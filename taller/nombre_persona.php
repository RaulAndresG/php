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
    

<form action="nombre_persona.php" method="post">
<!--     <select name="cripto" id="">

    <option value="">bitcon</option>
    <option value="">eteriun</option>
    <option value="">XRP</option>

    </select> -->

    <label class="form-control" > edad 1</label>
        <input type="number" name="edad1" >
        <label class="form-control" > nombre 1</label>
        <input type="text" name="nombre1" >


    <label class="form-control" >edad 2</label>
        <input type="number" name="edad2">
        <label class="form-control" >nombre 2</label>
        <input type="text" name="nombre2" >


    <label class="form-control" >edad 3</label>
        <input type="number" name="edad3">
        <label class="form-control" >nombre 3</label>
        <input type="text" name="nombre3" >
        <input type="submit" value ="Send">

        </form>
</body>
</html>
<?php

$nombre = $_POST['nombre1'.'nombre2'. 'nombre3' ];
$edad = $_POST['edad1'.'edad2'. 'edad3'];


/* $edad . $nombre = $personas;  */

$personas = array($nombre . $edad);

for ($i = 1; $i <= 3; $i++) {
    echo "Persona " . $i . ":\n";
    echo "Nombre: ";
    $nombre = readline();
    echo "Edad:";
    $edad = readline();
    
    $personas[] = array(
        "nombre" => $nombre,
        "edad" => $edad
    );
}

$personaMayorEdad = $personas[0];
foreach ($personas as $persona) {
    if ($persona['edad'] > $personaMayorEdad['edad']) {
        $personaMayorEdad = $persona;
    }
}

echo "La persona con mayor edad es: " . $personaMayorEdad['nombre'];
?>
