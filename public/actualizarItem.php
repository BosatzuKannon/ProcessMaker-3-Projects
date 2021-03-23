<?php 

	ini_set("soap.wsdl_cache_enabled", "0");
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', True);
	header('Content-Type: text/html; charset=utf-8');
	$servername = "localhost";
	$username = "root";
	$password = "asus62819k";
	$dbname = "wf_americana";

	if(!isset($_GET['q'])){
		echo "no se ha recibido nada";
	}

	$datos = explode('*-*',$_GET['q']);	

	
	$conn = new mysqli($servername, $username, $password, $dbname);	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "UPDATE PMT_PRODUCTOS SET NOMBRE = '$datos[1]',MARCA = '$datos[2]',PROVEEDOR = '$datos[3]',MODELO = '$datos[4]',SERIALL = '$datos[5]',REFERENCIA = '$datos[6]',CATEGORIA = '$datos[7]',COLOR = '$datos[8]',PRECIO_COMPRA = '$datos[9]',FECHA_COMPRA = '$datos[10]',DEPRECIACION = '$datos[11]',FECHA_CADUCIDAD = '$datos[12]',ESTADO = '$datos[13]',PLACA = '$datos[14]',VEHICULO_TIPO = '$datos[15]',TIPO_COMBUSTIBLE = '$datos[16]',LITROS_COMBUSTIBLE = '$datos[17]',KILOMETRAJE = '$datos[18]',NO_MOTOR = '$datos[19]',NO_CHASIS = '$datos[20]',UBICACION = '$datos[21]',RESPONSABLE = '$datos[22]',CANTIDAD = '$datos[23]' WHERE CODIGO_PLACA = '$datos[0]';";
	 

	if ($conn->query($sql) === TRUE) {
    	$agenda = "Record updated successfully";
	} else {
	    $agenda = $conn->error;
	}
	
	$conn->close();
	die('[' . $agenda . ']');	
?>