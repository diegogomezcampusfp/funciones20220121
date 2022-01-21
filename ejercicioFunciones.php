<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad_2022/01/21</title>
</head>
<body>
<?php
//Función mayúscula
echo ucfirst("<h2>hola soy diego</h2>");
//Función reemplazar
echo str_replace("a","e", "Hola" . "\n");
//Función fecha
setlocale(LC_ALL, "es_ES", 'Spanish_Spain', 'Spanish');
$string = "21/01/2022";
$date = DateTime::createFromFormat("d/m/Y", $string);
echo strftime("%A",$date->getTimestamp());
//Función muestras PHP y Server
phpinfo();
//Función número primo
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
//Función año bisiesto
$año = 2022;
$bisiesto = date('L', mktime(0, 0, 0, 1, 1, $año));
echo $año . ' ' . ($bisiesto ? 'es' : 'no es') . ' un año bisiesto.';
?>

</body>
</html>
