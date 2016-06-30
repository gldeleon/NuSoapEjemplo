<?php
require_once('lib/nusoap.php');

class aplicaciones{
	
	/*Método para obtener datos por webservice
	 * INPUT: $query consulta para el webservice
	 * OUTPUT: $result resultado de la consulta*/	 
	 function obtienedatos($query){
	 	
	 	$cliente = new nusoap_client("http://URL/webservice/service.asmx?WSDL", true);

			$resultado = $cliente->call(
			     "ConsultaSimple", 
			     
			      array(
			            'squery'=> $query
			            )
			);
			
			return $resultado['ConsultaSimpleResult'];
	 }
}

?>
