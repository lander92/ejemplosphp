<html>
<head>
<title>Tablas</title>
</head>
<body>
<?php 
	if(isset($_POST['enviar'])){
		if(!empty($_POST['filas']) && !empty($_POST['columnas'])){
			$filas=$_POST['filas'];
			$columnas=$_POST['columnas'];
			if($filas<=0 || $columnas<=0){
				echo "Debes introducir numeros positivos";
			}else{
				echo "<table border='1' style='width:50%'>";
				for($i=0; $i<$filas; $i++){
					echo "<tr>";
					for($j=0; $j<$columnas; $j++){
						echo "<td height='50'></td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
			
		}
	}else{
?>
<form action=<?php echo $_SERVER['PHP_SELF']?> method="post">
	Numero de filas:<input type="text" name="filas">
	Numero de columnas:<input type="text" name="columnas">
	<input type="submit" name="enviar" value="enviar">

</form>
<?php 
	}
?>
</body>
</html>