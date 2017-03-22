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
        <div class="div" style="font-family: Times New Roman; color: CadetBlue">
             <h1>PROGRAMACION DE APLICACIONES WEB</h1>
            <h4> Mostrar en pantalla cual es el mayor de TRES numeros</h4>
            <?php
                $n1 = 54;
                $n2 = 10;
                $n3 = 36;

                if($n1 > $n2 && $n1 > $n3){
                    echo "El primer número (".$n1.") es mayor que el segundo (".$n2.") y el tercero (".$n3.")";
                }
                else if($n1 < $n2 && $n2 > $n3){
                    echo "El segundo número (".$n2.") es mayor que el primero (".$n1.") y el tercero (".$n3.")";
                }
                else{
                    echo "El tercer número (".$n3.") es mayor que el primero (".$n1.") y el tercero (".$n3.")";
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
            <br>
            <p> Ricardo García Guillén</p>
            <a href="index.php">Regresar A Menu</a>
        </div>
        <div class="piePagina5" style="color: cyan">
            <p>
                UNIVERSIDAD AUTONOMA DE CHIAPAS<br>
                ALUMNO: Ricardo García Guillén
            </p>
        </div>
    </body>
</html>
