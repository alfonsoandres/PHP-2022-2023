<!DOCTYPE html>
<html lang="es">
	<title>PIEDRA PAPEL O TIJERA</title>
<head>
    <meta charset="UTF-8">
    <style>

        .juego{
            font-size: 6rem;
        }
        p{
            font-size: 30px;
        }
	

    </style>
</head>
<body>
    <div>
    <h1>!Piedra , papel, tijera!</h1>
    <p>Actualize la página para mostrar otra partida</p>
    </div>
	<div>
    <?php
    define ('PIEDRA1',"&#x1F91C;");
    define ('PIEDRA2',"&#x1F91B;");
    define ('TIJERAS',"&#x1F596;");
    define ('PAPEL',"&#x1F91A;"  );

	$jugador1 = random_int(1,3);
    $jugador2 = random_int(1,3);
    ?>
	</div>

    <div class="juego">
        <?php 
        $piedra1 = PIEDRA1;
        $piedra2 = PIEDRA2;
        $tijeras = TIJERAS;
        $papel = PAPEL;
      

        if($jugador1 == 1 && $jugador2 == 1){
            
            echo "Jugador 1".$piedra1."<br>";
            echo "Jugador 2".$piedra2."<br>";
            echo "<p>Empate</p>";
        }elseif($jugador1 == 2 && $jugador2 == 2){
         
            echo "Jugador 1".$papel."<br>";
            echo "Jugador 2".$papel."<br>";
            echo "<p>Empate</p>";
        }elseif($jugador1 == 3 && $jugador2 == 3){
           
            echo "Jugador 1".$tijeras."<br>";
            echo "Jugador 2".$tijeras."<br>";
            echo "<p>Empate</p>";
        }elseif($jugador1 == 1 && $jugador2==2){
      
            echo "Jugador 1 ".$papel."<br>";
            echo "Jugador 2".$piedra1."<br>";
            echo "<p>Ha ganado el jugador 1</p>";
        }
        elseif($jugador1 == 1 && $jugador2==3){
            echo "Jugador 1".$piedra1."<br>";
            echo "Jugador 2".$tijeras."<br>";
            echo "<p>Ha ganado el jugador 1</p>";
        }elseif($jugador1== 2 && $jugador2 == 1){
            echo "Jugador 1".$piedra2."<br>";
            echo "Jugador 2".$papel."<br>";
            echo "<p>Ha ganado el jugador 2</p>";
        }elseif($jugador1 == 2 && $jugador2==3){
            echo "Jugador 1".$papel."<br>";
            echo "Jugador 2".$tijeras."<br>";
            echo "<p>Ha ganado el jugador 2</p>";
        }elseif($jugador1 == 3 && $jugador2 == 2){
            echo "Jugador 1".$tijeras."<br>";
            echo "Jugador 2".$papel."<br>";
            echo "<p>Ha ganado el jugador 1</p>";
        }elseif($jugador1 == 3 && $jugador2 == 1){
            echo "Jugador 1".$tijeras."<br>";
            echo "Jugador 2".$piedra2."<br>";
            echo "<p>Ha ganado el jugador 2</p>";
        }
        ?>
    </div>
</body>
</html>