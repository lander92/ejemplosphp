<html>
<head>
<title>Intro</title>
</head>
<body>
<?php 
	//si se a pulsado el boton enviar
	if(isset($_POST['enviar'])){
		//guardo los datos en variables
		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$localidad=$_POST['localidad'];
		$edad=$_POST['edad'];
		//imprimo en pantalla los datos introducidos
		print "Tu nombre es ".$nombre." ".$apellido."<br>";
		print "Tu localidad es ".$localidad."<br>";
		if($edad=="menor"){
			print "Tienes menos de 18 años";
		}else{
			print "Tienes mas de 18 años";
		}
		/*foreach ($aficion as $valor){
			$valor=$_POST['aficion'];
		}*/
		
	}else{
?>
<form method="post" action=<?php echo $_SERVER['PHP_SELF']?>>
		Nombre:<input type="text" name="nombre"><br>
		Apellido:<input type="text" name="apellido"><br>
		Localidad:<select name="localidad">
					<option selected>--Elige una localidad--</option>
					<option value="Donostia">Donostia</option>
					<option value="Lasarte-Oria">Lasarte-Oria</option>
					<option value="Usurbil">Usurbil</option>
					<option value="Andoain">Andoain</option>
				</select><br>
		Edad:<input name="edad" type="radio" value="menor">Menor de 18 años
			 <input name="edad" type="radio" value="mayor">Mayor de 18 años
		<br>
		Aficiones: Deporte<input type="checkbox" name="aficion[]" value="deporte"/>
				   Musica<input type="checkbox" name="aficion[]" value="musica"/>
				   Literatura<input type="checkbox" name="aficion[]" value="literatura"/>
				   Cine<input type="checkbox" name="aficion[]" value="cine"/>
		<br>
		<input type="submit" value="enviar" name="enviar"/>
	</form>
<?php 
	}
?>	
</body>
</html>