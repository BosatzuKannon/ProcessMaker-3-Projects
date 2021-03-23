<?php 

	$db_connection = pg_connect("host=localhost dbname=shealth user=postgres password=carajo123");
	if (!$db_connection) {
		$error = pg_last_error();
    	echo $error;
	    exit;
	}
	
	if(!isset($_GET['q'])){
		echo "no se ha recibido nada";
	}

	$datos = $_GET['q'];
	$query = "select distinct a.caso,b.fecha_cita,c.descripcion,b.profesional from hlt_formula_medica a left join hlt_citas b on a.caso=b.caso left join hlt_atencion c on b.cod_atencion=c.cod_atencion where b.no_historia = '$datos';";

	$result = pg_query($db_connection, $query);    
    $formulas = '';
    while($r = pg_fetch_array($result)){

		$caso = $r['caso'];

		$query1 = "select count(*) as cantidad from hlt_formula_medica where caso = '$caso' and estado = 'p';";
		$result1 = pg_query($db_connection, $query1);
		while($r1 = pg_fetch_array($result1)){
			$cont = $r1['cantidad'];
		}

		if((int)$cont != 0){
			$formulas .= (empty($formulas) ? '' : ', ') . '{ "caso" : "' . $r['caso']  .  '","fecha_cita" : "' . $r['fecha_cita']  .  '", "descripcion" : "' . $r['descripcion'] . '" , "profesional" : "' . $r['profesional'] . '"}';
		}
	}	
	
	die('[' . $formulas . ']');
?>