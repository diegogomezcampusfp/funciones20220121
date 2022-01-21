<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones_resueltas</title>
</head>
<body>
    <h2>Actividad funciones PHP</h2>
    <h3>Convertir texto con primera letra en mayúscula</h3>
    <?php
        require_once("libreria.php");
        $resultadoMayuscula = primeraMayuscula("un texto");
        echo $resultadoMayuscula;
    ?>

<h3>Reemplazar una a por una e</h3>
    <?php
        require_once("libreria.php");
        $resultadoReemplazar=reemplazar("a", "e", "texto a reemplazar");
        echo $resultadoReemplazar;
    ?>

<h3>Mostrar mes</h3>
    <?php
        setlocale(LC_ALL, "es_ES.UTF-8", 'Spanish_Spain', 'Spanish');
        $string = "21/01/2022";
        $date = DateTime::createFromFormat("d/m/Y", $string);
        echo strftime("%B",$date->getTimestamp());
    ?>

<h3>Mostrar info</h3>
    <?php
        require_once("libreria.php");
        $resultadoInfo = Info("01/03/2022");
        echo $resultadoInfo;
    ?>

<h3>Números primos</h3>
    <?php
        function esPrimo($n)
        {
         for($x=2; $x<$n; $x++)
           {
              if($n %$x ==0)
                  {
                   return 0;
                  }
            }
          return 1;
           }
        $a = esPrimo(3);
        if ($a==0)
        echo 'No es un número primo'."\n";
        else
        echo 'Es un número primo...'."\n";
    ?>

<h3>Año bisiesto</h3>
    <?php
        $año = 2022;
        $bisiesto = date('L', mktime(0, 0, 0, 1, 1, $año));
        echo $año . ' ' . ($bisiesto ? 'es' : 'no es') . ' un año bisiesto.';
    ?>

</body>
</html>
