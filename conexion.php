<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es"> 
<head> 
</head> 
<body> 
<?php
# Configuración de datos para conectar al servidor de base de datos
$servidor              = 'localhost';         # Servidor (por defecto:localhost)
$prefijo_usuario       = 'nati2009';              # Usuario para el host
$usuario_mysql         = $prefijo_usuario.'_admin';  # Usuario MySql para la base de datos
$password_mysql      = 'Mon213';         # Contraseña MySql para la base de datos
$bd_mysql   = $prefijo_usuario.'_BDCCAM';  # Base de datos mysql
  
#  Verificando la conexión a la base de datos
if(!function_exists('mysql_connect'))
{
    echo 'PHP no puede encontrar la extension mysql. MySQL se requiere para ejecutar.';
    exit();
}

$dbh = @mysql_connect($servidor, $usuario_mysql, $password_mysql)
or die('Error para conectarse a la Base de Datos: '.mysql_error());

mysql_select_db($bd_mysql, $dbh)
or die('Error seleccionando la Base de Datos: '.mysql_error());

return $dbh;

//function Conectarse()  
//{  
//   if (!($conexion=mysql_connect("localhost","nati2009_admin","Mon213")))  
//   {  
//      echo "Error conectando a la base de datos.";  
//      exit();  
//   }  
//   if (!mysql_select_db("nati2009_BDCCAM",$conexion))  
//   {  
//      echo "Error seleccionando la base de datos.";  
//      exit();  
//   }  
//   return $conexion;  
//}  
//se envia la consulta  
//$result = mysql_query("SELECT * FROM NOTAS_LINK WHERE nota_URL ='/Historia/HIS_losgigantes-cordoba.htm'", //$conexion); 
//se despliega el resultado
//if($row = mysql_fetch_array($result)){
   //Guardo los datos de la BD en las variables de php
//   $var1 = $row["nota_LINK"];
//}  
//echo $var1; 
?>
</body> 
</html> 