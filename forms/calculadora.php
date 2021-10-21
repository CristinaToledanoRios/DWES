<HTML>
<HEAD>
</HEAD>
<BODY>
<?php

$Operacion=($_REQUEST['Operacion']);
$Operando1=($_REQUEST['Operando1']);
$Operando2=($_REQUEST['Operando2']);
if ($Operacion=='Suma'){
	echo 'Resultado Operacion: ',$Operando1,' + ',$Operando2,' = ',$Operando1+$Operando2;
}
else if($Operacion=='Resta'){
	echo 'Resultado Operacion: ',$Operando1,' - ',$Operando2,' = ',$Operando1-$Operando2;
}
else if($Operacion=='Producto'){
	echo 'Resultado Operacion: ',$Operando1,' x ',$Operando2,' = ',$Operando1*$Operando2;
}
else if($Operacion=='Division'){
	echo 'Resultado Operacion: ',$Operando1,' / ',$Operando2,' = ',$Operando1/$Operando2;
}
?>
</BODY>	 
</HTML>	