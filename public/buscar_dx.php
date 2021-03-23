<?php 

	$db_connection = pg_connect("host=localhost dbname=health user=postgres password=carajo123");
	if (!$db_connection) {
		$error = pg_last_error();
    	echo $error;
	    exit;
	}
	
	if(!isset($_GET['q'])){
		echo "no se ha recibido nada";
	}
	
	$datos = explode('*-*',$_GET['q']);

	if($datos[1] == "1"){

		$query = "SELECT descripcion as response FROM pmt_cei WHERE codigo = '$datos[0]';";
	}
	else{

		$query = "SELECT codigo as response FROM pmt_cei WHERE descripcion = '$datos[0]';";
	}
	
	$result = pg_query($db_connection, $query);

    $dx = '';
	while($r = pg_fetch_array($result)) {
		
		$dx .= (empty($dx) ? '' : ', ') . '{ "response" : "' . $r['response']  .  '"}';
	}	
	
	die('[' . $dx . ']');

?>