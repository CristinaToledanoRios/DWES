<HTML>
<HEAD>
</HEAD>
<BODY>
<h1>MOSTRAR ALUMNOS</h1>
</br>
<?php
//abrimos el fichero en modo lectura con "r"
$f1=fopen("alumnos2.txt","r");
$cont=0;
echo "<table border='1'>";
while(!feof($f1)){ //funcion feof para que siga leyendo hasta llegar al final del archivo
	$linea=fgets($f1); //funcion que devuelve una linea desde un archivo
	if($linea!=""){ //si la linea no esta vacia la imprime
	echo '<tr><td>',$linea,'</tr></td>';
	$cont+=1;
	}
}
echo "</table>";
fclose($f1); //cerramos el fichero
echo "El fichero ha leido",$cont," filas";
?>
</BODY>	 
</HTML>	