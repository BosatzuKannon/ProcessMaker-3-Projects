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

	$conn = new mysqli($servername, $username, $password, $dbname);	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$datos = $_GET['q'];
	$sql = "SELECT CATEGORIA,ESTADO,VEHICULO_TIPO,TIPO_COMBUSTIBLE,UBICACION,RESPONSABLE,FECHA_COMPRA,FECHA_CADUCIDAD FROM PMT_PRODUCTOS WHERE CODIGO_PLACA = '$datos';";
	$citas = '';	

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$citas .= (empty($citas) ? '' : ', ') . '{ "categoria" : "' . $row['CATEGORIA']  .  '", "estado" : "' . $row['ESTADO'] . '", "vehiculo_tipo" : "' . $row['VEHICULO_TIPO'] . '", "tipo_combustible" : "' . $row['TIPO_COMBUSTIBLE'] . '", "ubicacion" : "' . $row['UBICACION'] . '", "responsable" : "' . $row['RESPONSABLE'] . '", "compra" : "' . $row['FECHA_COMPRA'] . '", "caducidad" : "' . $row['FECHA_CADUCIDAD'] . '"  }';
		}
    	
	} 
	
	$conn->close();	
	die('[' . $citas . ']');
?>