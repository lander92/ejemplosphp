<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Palindromos</title>
</head>
<body>
<?php 
	if(isset($_POST['enviar'])){
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
		
	}else{
?>
	<form action=<?php echo $_SERVER['PHP_SELF']?> method="post">
		Introduce una palabra: <input type="text" name="palabra"><br>
		<input type="submit" name="enviar" value="enviar">
	</form>
<?php 
	}
?>
</body>
</html>