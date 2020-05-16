
<?php
$resultado ="";
if(isset($_POST["texSueldo"])){
   # todos los calculos 
   $sueldo= $_POST["txtSueldo"];
   $numeroVenta = $_POST["txtVentas"];
   $totalVenta =$_POST["txtTotalVentas"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sueldo base </title>
</head>
<body>
<form action ="" method="post">

<label for="txtSueldo">sueldo base:</label>
<input type="text" name= "texSueldo"
 id="txtVentas" > 

<hr>

<label for="txtVentas">Ventas:</label>
<input type="text" name= "texVentas" 
id="txtVentas" > 

<hr>

<label for="txtTotalVentas">total de cada ventas:</label>
<input type="text" name= "txTotalVentas" 
id="txtTotalVentas" > 

 <hr>

 <input type="sumit" value="calcule ">
</form>
    
</body>
</html>
