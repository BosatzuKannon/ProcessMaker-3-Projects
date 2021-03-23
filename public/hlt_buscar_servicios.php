<?php 

	$db_connection = pg_connect("host=localhost dbname=shealth user=postgres password=carajo123");
	if (!$db_connection) {
		$error = pg_last_error();
    	echo $error;
	    exit;
	}
	
	if(!isset($_GET['q'])){
		//echo "no se ha recibido nada";
		die();
	}

	$datos = explode('*-*',$_GET['q']);	

	if($datos[0] == '1'){
		$query = "SELECT cod_atencion,descripcion FROM hlt_atencion ORDER BY descripcion";
	}
	else{
		$empresa = $datos[1];
		$query = "SELECT DISTINCT a.cod_atencion,a.descripcion FROM hlt_atencion a LEFT JOIN hlt_contratacion_servicios b ON a.cod_atencion=b.cod_atencion LEFT JOIN hlt_contratacion c ON b.consecutivo_contratacion=c.consecutivo_contratacion where c.estado = '1' and c.cod_empresa = (SELECT cod_empresa FROM hlt_empresa where nombre = '$empresa') ORDER BY a.descripcion";
	}

	$result = pg_query($db_connection, $query);    
    $atencion = '';
	while($r = pg_fetch_array($result)) {		
		$atencion .= (empty($atencion) ? '' : ', ') . '{ "value" : "' . $r['cod_atencion']  .  '", "label" : "' . $r['descripcion'] . '" }';
	}	
	
	die('[' . $atencion . ']');	
?>