<HTML>
<HEAD></HEAD>
<BODY>

<?php
require "validar.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre1=limpiar_campo($_POST['nombre']);
$apellido_1=limpiar_campo($_POST['apellido1']);
$apellido_2=limpiar_campo($_POST['apellido2']);
$fecha1=limpiar_campo($_POST['fecha']);
$localidad1=limpiar_campo($_POST['localidad']);


if (fechaValidada($fecha1)) {

//Meter datos en un fichero
//abrir fichero
$f1=fopen("alumnos2.txt","a+");
//escribir fichero
$nombre=str_pad($nombre1, 41,"#", STR_PAD_RIGHT);
$apellido1=str_pad($apellido_1, 41,"#", STR_PAD_RIGHT);
$apellido2=str_pad($apellido_2, 41,"#", STR_PAD_RIGHT);
$fecha=str_pad($fecha1, 10,"#", STR_PAD_RIGHT);
$localidad=str_pad($localidad1, 27,"#", STR_PAD_LEFT);
fwrite($f1,$nombre.$apellido1.$apellido2.$fecha.$localidad."\n");
//cerramos el fichero
fclose($f1);
echo "Se ha introducido el alumno";
}
	else {

	echo "La fecha debe tener el formato dd/mm/aa";

}

}


function fechaValidada ($fecha) {

	$fechacomprobada=true;
	$fechaSeparada = explode("/", $fecha);


	if (count($fechaSeparada)==3 && checkdate($fechaSeparada[1], $fechaSeparada[0], $fechaSeparada[2])) { 
																										
		 $fechacomprobada=true;
 
	} else {
  
  		$fechacomprobada=false;
        
	}

		return $fechacomprobada;

}
?>
</BODY>	 
</HTML>	