<html>
	<body>
		<h1>CALCULADORA</h1>
		<form name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
			<p>Operando1:</p>
			<input type="text" name="operando1" required><br>
			<p>Operando2:</p>
			<input type="text" name="operando2" required><br>
			<p>Selecciona operaci&oacute;n:</p>
			<input type="radio" name="operacion" value="Suma">Suma</br>
			<input type="radio" name="operacion" value="Resta">Resta</br>
			<input type="radio" name="operacion" value="Producto">Producto</br>
			<input type="radio" name="operacion" value="Division">Division</br>
			<input type="submit" name="enviar" value="enviar">
			<input type="reset" value="borrar"><br><br>
			
			<?php
			require "limpiar.php";
			if($_SERVER["REQUEST_METHOD"]=="POST" {
				
				$operando1=$_POST['Operando1'];
				$operando2=$_POST['Operando2'];
				$operacion=$_POST['operacion'];
					
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
			
		</form>
	</body>
</html>