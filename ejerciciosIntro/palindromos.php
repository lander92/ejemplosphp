<?php 
//guardo la palabra introducida en una variable
$palabra=$_POST['palabra'];
//invierto la palabra y la guardo en otra variable
$palabraInvertida=strrev($palabra);
//si la palabra introducida y la palabra invertida son iguales
if($palabra==$palabraInvertida){
	print "La palabra ".$palabra." es un palindromo";
//si no son iguales
}else{
	print "La palabra ".$palabra." no es un palindromo";
}

?>
