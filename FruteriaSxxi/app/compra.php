<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compra</title>
</head>
<body>
  <h1>REALICE SU COMPRA </h1>
  <table>
  <?php
  
  foreach ($_SESSION['pedidos'] as $key => $value) {
    ?>
        <tr>
            <td><? echo $key   ?></td>
            <td><? echo $value ?> </td>
        </tr>
    <?php
  
  
  }
  ?>
  </table>

<b><?=$_SESSION['nombre']?></b><br>
<form method="POST">
  <p><b>Seleccione la Fruta:
    <select name="frutas" >
      <option value="Platano">Platanos</option>
      <option value="Naranjas">Naranjas</option>
      <option value="Limones">Limones</option>
      <option value="Fresas">Fresas</option>
    </select>
    Cantidad: <input name="cantidad" type="number">
    </b>
    <input type="submit" name="orden"  value="Anotar">
    <input type="submit" name="orden"  value="Terminar">
  </p>
 
</form>
</body>
</html>

