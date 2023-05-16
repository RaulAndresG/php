<form action="voltaje.php" method="post">
<!--     <select name="cripto" id="">

    <option value="">bitcon</option>
    <option value="">eteriun</option>
    <option value="">XRP</option>

    </select> -->

    <label class="form-control" >Digita</label>
        <input type="number" name="res" >
        <input type="number" name="inten" >



        <input type="submit" value ="Send">

        </form>



<?php





$resistencia = $_POST['res']; 
$intensidad = $_POST['inten']; 

$voltaje = $intensidad * $resistencia;

echo "El voltaje del circuito es: " . $voltaje . " voltios.";
?>
