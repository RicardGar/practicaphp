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
        <div class="div" style="font-family: Calibri; color: orange">
            <h1>PROGRAMACION DE APLICACIONES WEB</h1>
            <h4> Mostrar en pantalla cual es el mayor de dos numeros</h4>
            <?php
                $n1 = 54;
                $n2 = 10;

                if($n1 > $n2){
                    echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
                }
                else if($n1 == $n2){
                    echo "El primer número (".$n1.") es igual que el segundo (".$n2.")";
                }
                else{
                    echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
                }
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p> Ricardo García Guillén </p>
            <a href="index.php">Regresar A Menu</a>
        </div>
        <div class="piePagina4">
            <p>
                UNIVERSIDAD AUTONOMA DE CHIAPAS<br>
                ALUMNO: Ricardo García Guillén
            </p>
        </div>
    </body>
</html>
