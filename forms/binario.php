<?php

	require "validar.php";

	$decimal =  $_POST['decimal'];
		
	$binario = convertirBinario($decimal);
	
	function convertirBinario ($decimal){
		return decbin($decimal);
	}
	
	echo "<h1>CONVERSOR BINARIO</h1>";
	echo "<br>";
	echo "Numero Decimal: <input type='text' name='decimal' value=$decimal>";
	echo "<br>";
	echo "Numero Binario: <input type='text' name='binario' value=$binario>"; 
	echo "<br>";
?>