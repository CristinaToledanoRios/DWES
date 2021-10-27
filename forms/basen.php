<html>
	<body>
		<h1>CONVERSOR NUMERICO</h1>
		<form name="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
		
			Numero Decimal <input type="text" name="decimal" /><br>
			
			Selecciona una operación: <br>
			<input type="radio" name="operacion" value="binario" /> Binario <br>
			<input type="radio" name="operacion" value="octal"/> Octal <br>
			<input type="radio" name="operacion" value="hexadecimal"/> Hexadecimal <br>
			<input type="radio" name="operacion" value="todos"/>Todos sistemas<br><br>

			<input type="submit" name="enviar" value="enviar">
			<input type="reset" value="borrar"><br>
			
			<?php
			//declaro parametros
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$decimal = $_POST['decimal'];
				$operacion =  $_POST['operacion'];
			//incluyo php con las funciones
			require "validar.php";
			require'funcionesBasen.php';
				
			if ($operacion == "binario"){
				$binario = pasoBinario($decimal);
				echo $binario;
			}else if ($operacion == "octal"){
				$octal = pasoOctal($decimal);
				echo $octal;
			}else if ($operacion == "hexadecimal"){
				$hexadecimal = pasoHexadecimal($decimal);
				echo $hexadecimal;
			}else if ($operacion == "todos"){
				$binario = pasoBinario($decimal);
				echo $binario;
				echo "<br>";
				$octal = pasoOctal($decimal);
				echo $octal;
				echo "<br>";
				$hexadecimal = pasoHexadecimal($decimal);
				echo $hexadecimal;
			}
			}
			
			
			?>
		</form>
	</body>