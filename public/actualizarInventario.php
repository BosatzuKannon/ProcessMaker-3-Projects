<?php 

	ini_set("soap.wsdl_cache_enabled", "0");
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', True);
	header('Content-Type: text/html; charset=utf-8');
	$servername = "localhost";
	$username = "root";
	$password = "asus62819k";
	$dbname = "wf_americana";

	$conn = new mysqli($servername, $username, $password, $dbname);	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$query = "SELECT a.CODIGO_PLACA as codigo,a.NOMBRE as nombre,b.DESCRIPCION as estado,d.DESCRIPCION as ubicacion,concat(c.USR_FIRSTNAME,\" \",c.USR_LASTNAME) as responsable FROM PMT_PRODUCTOS a LEFT JOIN PMT_ESTADOS b on a.ESTADO=b.COD_ESTADO LEFT JOIN USERS c on a.RESPONSABLE=c.USR_UID LEFT JOIN PMT_UBICACIONES d on a.UBICACION=d.COD_UBICACION";
	
	$result = $conn->query($query);
    $formulas = '';
    
    while($r = $result->fetch_assoc()){

		
		$formulas .= (empty($formulas) ? '' : ', ') . '{ "codigo" : "' . $r['codigo']  .  '","nombre" : "' . $r['nombre']  .  '", "estado" : "' . $r['estado'] . '" , "ubicacion" : "' . $r['ubicacion'] . '", "responsable" : "' . $r['responsable'] . '"}';
				
	}
	
	die('[' . $formulas . ']');
?>