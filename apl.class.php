<?php
require_once('lib/nusoap.php');

class aplicaciones{
	
	/*Método para obtener datos por webservice
	 * INPUT: $query consulta para el webservice
	 * OUTPUT: $result resultado de la consulta*/	 
	 function obtienedatos($query){
	 	
	 	$cliente = new nusoap_client("http://189.203.7.229/webservice/service.asmx?WSDL", true);

			$resultado = $cliente->call(
			     "ConsultaSimple", 
			     
			      array(
			            //'squery'=>'SELECT  top 1 totalpuntos FROM smnctepuntos WHERE cliente = \'ABASTOS 3\' ORDER BY Id DESC'
			            'squery'=> $query
			            )
			);
			
			return $resultado['ConsultaSimpleResult'];
	 }
}

?>