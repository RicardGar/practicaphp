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
        <div class="divw" style="font-family: Garamond; color: white">
            <h1>PROGRAMACION DE APLICACIONES WEB</h1>
            <h4> Se mostrara en pantalla una tabla de 1 por 10</h4>
            <?php
                echo "<h2>BUCLE WHILE</h2><br>";
                echo "<table border=1>";
                //echo "<tr>";
                for($i = 0; $i < 10; $i++) //Este es el bucle, mientras se cumpla la condicion
                {
                    echo "<tr>"."<td>"."Linea". $i ."<br>"."</td>"."</tr>"; // Se ejecuta esta sentencia, es decir 10 veces
                }
                //echo "</tr>";
                echo "</table>";
            ?>
            <p> Ricardo García Guillén</p>
            <a href="index.php">Regresar A Menu</a>
        </div>
        <div class="piePagina3">
            <p>
                UNIVERSIDAD AUTONOMA DE CHIAPAS<br>
                ALUMNO: Ricardo García Guillén 
            </p>
        </div>
    </body>
</html>
