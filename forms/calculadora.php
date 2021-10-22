<?php

	$operando1 =  $_POST['operando1'];
	$operando2 =  $_POST['operando2'];
	$operacion =  $_POST['operacion'];
	calculadora($operando1, $operando2, $operacion);
	
	function calculadora($operando1, $operando2, $operacion) {
		switch ($operacion) {
			case 'Suma':
				$suma=$operando1+$operando2;
				echo "Resultado operacion: $operando1 + $operando2 = ".$suma;
				break;
			case 'Resta':
				$resta=$operando1-$operando2;
				echo "Resultado operacion: $operando1 - $operando2 = ".$resta;
				break;
			case 'Producto':
				$producto=$operando1*$operando2;
				echo "Resultado operacion: $operando1 X $operando2 = ".$producto;
				break;
			case 'Division':
				$division=$operando1/$operando2;
				echo "Resultado operacion: $operando1 : $operando2 = ".$division;
				break;
			default:
				echo "Introduce un valor válido";
				break;
		}
	}
	
?>
