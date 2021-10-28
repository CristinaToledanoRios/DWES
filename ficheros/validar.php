<HTML>
<HEAD>
</HEAD>
<BODY>
<?php
function limpiar_campo($campoformulario) {
  $campoformulario = trim($campoformulario);
  $campoformulario = stripslashes($campoformulario);
  $campoformulario = htmlspecialchars($campoformulario);  
  return $campoformulario;
}
?>
</BODY>	 
</HTML>	