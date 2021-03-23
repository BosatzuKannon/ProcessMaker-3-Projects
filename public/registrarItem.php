<?php 

	ini_set("soap.wsdl_cache_enabled", "0");
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', True);
	header('Content-Type: text/html; charset=utf-8');
	$servername = "localhost";
	$username = "root";
	$password = "asus62819k";
	$dbname = "wf_americana";
	$agenda = "";

	if(!isset($_GET['q'])){
		echo "no se ha recibido nada";
	}

	$datos = explode('*-*',$_GET['q']);	

	
	$conn = new mysqli($servername, $username, $password, $dbname);	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "INSERT INTO PMT_PRODUCTOS(CODIGO_PLACA,NOMBRE,MARCA,PROVEEDOR,MODELO,SERIALL,REFERENCIA,CATEGORIA,COLOR,PRECIO_COMPRA,FECHA_COMPRA,DEPRECIACION,FECHA_CADUCIDAD,ESTADO,PLACA,VEHICULO_TIPO,TIPO_COMBUSTIBLE,LITROS_COMBUSTIBLE,KILOMETRAJE,NO_MOTOR,NO_CHASIS,UBICACION,RESPONSABLE,HORAS_USO,CANTIDAD)
	 VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]','$datos[12]','$datos[13]','$datos[14]','$datos[15]','$datos[16]','$datos[17]','$datos[18]','$datos[19]','$datos[20]','$datos[21]','$datos[22]','$datos[23]','$datos[24]');";
	 

	if ($conn->query($sql) === TRUE) {
    	//$agenda = "New record created successfully";

    	$sql1 = "SELECT CONCAT('A',COUNT(*)+1) as codigo FROM PMT_PRODUCTOS";
    	$result = $conn->query($sql1);

    	while($r = $result->fetch_assoc()) {
    		
    			$agenda =  $r['codigo'];    		
    	}
	} 
	else {
	    $agenda = $sql;
	}
	
	$conn->close();
	die($agenda);	
?>