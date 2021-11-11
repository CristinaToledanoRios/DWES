<HTML>
<HEAD>
</HEAD>
<BODY>
<h1>Operaciones Ficheros</h1>
</br>
<?php
//adjuntamos 
require "validar.php";
$nombre=limpiar_campo($_REQUEST['nombre']);
$operacion=limpiar_campo($_REQUEST['operacion']);
$mostrarLineas=limpiar_campo($_REQUEST['mostrarlinea']);
$primerasLineas=limpiar_campo($_REQUEST['primeraslineas']);

if(file_exists($nombre)){
	if($operacion=='fichero'){
		//abrir fichero
		$f1=fopen($nombre,"r");
		while(!feof($f1)){
		$z=fgets($f1);
		echo $z;
		}
		
		//cerrar fichero
		fflush($f1);
		fclose($f1);
	}
	else if($operacion=='linea'){
		//abrir fichero en modo lectura
		$f1=fopen($nombre,"r");
		$cont=0;
		while($cont<$mostrarLineas){
			$linea=fgets($f1);
			$cont++;
		}
		echo $linea;//tiene que ir fuera del while para que muestre la ultima linea y no todas
		//cerrar fichero
		fclose($f1);
	}
	else if($operacion=='mostrar'){
		//abrir fichero en modo lectura
		$f1=fopen($nombre,"r");
		$cont=0;
		while($cont<$primerasLineas){
			$linea=fgets($f1);
			echo $linea;
			$cont++;
		}
		//cerrar fichero
		fclose($f1);
	}
}
else{
	echo 'El fichero no existe';
}
?>
</BODY>	 
</HTML>	