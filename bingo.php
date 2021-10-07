<HTML>
<HEAD>
</HEAD>
<BODY>
<?php

//declaro el carton
$carton=array();

for( $i = 0 ; $i < 15 ; $i++) {
		$bola= rand(1,60);
		if (!in_array($bola,$carton));
		
		array_push($carton,$bola);
	}
	
var_dump($carton);

//declaro el bingo
$bingo=array();
for( $i = 1 ; $i < 60 ; $i++) {
		$bolaAleatoria = rand(1,60);
		array_push($carton,$bolaAleatoria);
	}
	

var_dump($bingo);

//comprobar bolas
$aciertos=0;
if ($bola==$bolaAletoria) {
	$aciertos++;
}
?>
</BODY>	 
</HTML>	