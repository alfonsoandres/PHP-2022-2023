<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio2</title>
</head>
<body>
<ul>
  <?php
$medios = ["El Pais" => "https://elpais.com/","El Mundo" => "https://www.elmundo.es/",
"ABC" => "https://www.abc.es/", "La Razon" => "https://www.larazon.es/",
"La Vanguardia" => "https://www.lavanguardia.com/"];
  foreach ($medios as $key => $value) {
    echo "<a href=".$value.">"."<li>".$key."</li> </a>";
  }
  
  ?>
</ul>

</body>
</html>