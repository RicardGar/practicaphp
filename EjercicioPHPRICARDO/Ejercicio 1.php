<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/Style.css">
        <title>Ejercicios PHP</title>
    </head>
    <body>
        <div>
            <img src="img/banner-php.jpg">
        </div>
        <div class="div" style="font-family: Arial">
            <h1>PROGRAMACION DE APLICACIONES WEB</h1>
            <h4> Suma, Resta, Multiplicacion y Division de dos variables</h4>
            <?php
                $Numero1=10;
                $Numero2=12;
                //SUMAR
                $Suma = $Numero1 + $Numero2;
                echo "$Numero1 + $Numero2"."<br>";
                echo "Suma = ".$Suma."<br>";
                //RESTAR
                $Resta = $Numero1 - $Numero2;
                echo "$Numero1 - $Numero2"."<br>";
                echo "Resta = ".$Resta."<br>";
                //Multiplicar
                $Multiplicacion = $Numero1 * $Numero2;
                echo "$Numero1 + $Numero2"."<br>";
                echo "Multiplicacion = ".$Multiplicacion."<br>";
                //DIVISION
                $Division = $Numero1 / $Numero2;
                echo "$Numero1 + $Numero2"."<br>";
                echo "Division = ".$Division."<br>";
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p> Ricardo García Guillén </p>
            <a href="index.php">Regresar A Menu</a>
        </div>
        <div class="piePagina">
            <p>
                UNIVERSIDAD AUTONOMA DE CHIAPAS<br>             
                ALUMNO: Ricardo García Guillén
            </p>
        </div>
    </body>
</html>
