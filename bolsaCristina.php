<HTML>
<HEAD><TITLE> Ej_Bolsa_CristinaToledano </TITLE></HEAD>
<BODY>

<?php
//Array asociativo almacenando INDITEX también para después seguir almacenando la info de otras empresas



$ibex35=array(array());

$desdeletra="a";
$hastaletra="z";
for($x=0;$x<6;$x++){
     for($y=0;$y<9;$y++)
		 // if($x==0){
			 // $ibex35[$x][$y]=chr(rand(ord($desdeletra),ord($hastaletra))); 
		 // }
          $ibex35[$x][$y]=rand(0,1000);

}			

foreach($ibex35 as $producto => $detalles)
{
	echo "<h1> $producto </h1>";
 
    foreach($detalles as $indice => $valor)
	{
		echo "<p> $indice:$valor </p>";
	}
}




?>
</BODY>
</HTML>