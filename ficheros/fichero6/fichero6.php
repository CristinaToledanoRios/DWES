<HTML>
<HEAD>
</HEAD>
<BODY>
<h1>Operaciones Ficheros</h1>
</br>
<?php
require "validar.php";
$nombre=limpiar_campo($_REQUEST['nombre']);

if(file_exists($nombre)){
	
	echo '<strong>Nombre del fichero: </strong>',basename($nombre),'</br>';
	echo '<strong>Directorio: </strong>',realpath($nombre),'</br>';	
	echo '<strong>Tamaño del fichero: </strong>',filesize($nombre),'bytes</br>';
	echo '<strong>Fecha de la ultima modificación: </strong>',date("d/m/Y H:i",filemtime($nombre)),'</br>';
}
else{
	echo 'El fichero no existe';
}
?>
</BODY>	 
</HTML>	