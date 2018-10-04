<?php

function resaltaTexto($texto, $criterioResaltar){
	
	if( $criterioResaltar=='' or is_numeric($criterioResaltar)){
		
		return $texto;
	
	} else {
	
		$pos = strpos(strtolower($texto), strtolower($criterioResaltar));
		$valor = substr($texto,0, $pos) . "<b>" . $criterioResaltar . "</b>" . substr($texto,$pos+strlen($criterioResaltar), strlen($texto)) . " <br> ";
		return $valor;
		
	
	}
}  

?>