<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        setlocale(LC_TIME, 'es_ES'); // Establecer la configuración regional a español
        echo "La fecha de hoy es"; 
        $fecha = strftime("%e/%m/%y"); 
        echo $fecha; 
        echo "<br>";  
        ?>
        <a href="fecha3.php">Siguiente problema</a>
    </body>
</html>
