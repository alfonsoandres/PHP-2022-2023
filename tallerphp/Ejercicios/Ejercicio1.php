<!DOCTYPE html>	
<html>
<head>
<title>Ejercicio1</title>
<style>
body {
	background: white;
	text-align: justify;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 14px;
}
.tabla{
  font-family: arial, sans-serif;
  border-collapse: collapse;
}


td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<?php
$valores =[];
$string;

for ($x=0;$x<=20;$x++) {
    $num_aleatorio = rand(1,10);
    array_push($valores,$num_aleatorio);
  }
?>
<table class="tabla"> 
  <tr>
      <th>Numeros</th>
  </tr>
  <tr>
      <?php 
        foreach ($valores as $value) {
          echo"<td>".$value."</td>";
        }
        ?>
  </tr> 
  <tr> 
    <?php
    echo "<td>"."maximo: ".max($valores)."</td>";
    ?>
  </tr>
  <tr> 
    <?php
    echo "<td>"."minimo: ".min($valores)."</td>";
    ?>
  </tr>
  <tr> 
    <?php
    echo "<td>"."repetición max: ".max(array_count_values($valores))."</td>";
   ?>
  </tr>
</table>    
</body>
</html>