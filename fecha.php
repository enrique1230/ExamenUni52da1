<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME, 'es_ES'); // Establecer la configuración regional a español
        echo "La fecha de hoy es"; 
        $fecha = strftime("d/m/Y"); 
        echo $fecha; 
        echo "<br>"; 
        echo "La hora actual es"; 
        $hora = date("H:i:s"); 
        echo $hora; 
        echo "<br>"; 
        ?>
        <a href="fecha2.php">Siguiente problema</a>
    </body>
</html>

