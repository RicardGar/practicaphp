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
        <div class="dive" style="font-family: Century Gothic; color: white;">
            <h1>PROGRAMACION DE APLICACIONES WEB</h1>
            <h4>Se Mostrara en Pantalla una tabla de 10 por 10 con los numeros del 1 al 100</h4>
            <table>
                <?php
                    echo "<CENTER>";
                    echo "<table border=1>";
                    $n = 1;
                    for ($n1 = 1; $n1 <= 10; $n1++)
                    {
                        echo "<tr>";
                        for($n2 = 1; $n2 <= 10; $n2++)
                        {
                            echo "<td>"," ", $n," ", "</td>";
                            $n = $n + 1;
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                    echo "</CENTER>";
                ?>
            </table>
            <p>Ricardo García Guillén</p>
            <a href="index.php">Regresar A Menu</a>
        </div>
        <div class="piePagina2">
            <p>
                UNIVERSIDAD AUTONOMA DE CHIAPAS<br>
                ALUMNO: Ricardo García Guillén
            </p>
        </div>
    </body>
</html>
