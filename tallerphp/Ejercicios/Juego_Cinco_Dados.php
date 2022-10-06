
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DADOS</title>
</head>
<style>
    .juego1{
        font-size: 5rem;
        color: green;
    }
    .juego{
        font-size: 5rem;
        color: red;
    }
</style>
<body>
    <div>
     <h1>Cinco dados</h1>
        <p>Actualize la página para mostrar otra partida</p>
        <br></br>
      
    </div>       
    <?php
   function funcion1(){
    $arrayDados=[1=>DADO1,2=>DADO2,3=>DADO3,4=>DADO4,5=>DADO5,6=>DADO6];
    $random=array_rand($arrayDados,5);
    foreach ($random as $key) {
         echo($arrayDados[$key]);
    }

    $maximoValor=max($random);
    $minValor=min($random);

    $totalSuma=array_sum($random);
   
    echo $total=$totalSuma-$maximoValor-$minValor." puntos";
    
    return $total;

   }
   ?>
   <?php
   define('DADO1','&#9856;');
   define('DADO2','&#9857;');
   define('DADO3','&#9858;');
   define('DADO4','&#9859;');
   define('DADO5','&#9860;'); 
   define('DADO6','&#9861;');
   ?>
<div class="juego1">
<?php
echo("J1 ");
$totalJ1=funcion1();

?>
</div>
<div class="juego">
<?php
echo("J2 ");

$totalJ2=funcion1();
?>
</div>
<br><br>
<div class="resultado">
<?php
if ($totalJ1>$totalJ2) {
   echo "<b>Resultado:</b> Ha Ganado el Jugador 1";
}elseif ($totalJ1<$totalJ2) {
    echo "<b>Resultado:</b> Ha Ganado el Jugador 2";
}else{
    echo "<b>Resultado:</b> Empate";
}
?>
</div>

    
</body>
</html>