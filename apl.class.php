<?php
require_once('lib/nusoap.php');

 $oSoapClient = new nusoap_client('http://ruta/del/service.asmx?wsdl', true); 
//parametros a enviar, deben ser en array
$param = array('XMLCFD' => $xml);

$oSoapClient->loadWSDL();
//en call colocamos el nombre del metodo a usar
$respuesta = $oSoapClient->call("RecibeCFD", $param);
if ($oSoapClient->fault) { 
        echo 'No se pudo completar la operación '.$oSoapClient->getError();
        die();
} else { // No
        $sError = $oSoapClient->getError();
       if ($sError) { 
                echo 'Error!:'.$sError;
        }
}
echo '<br>';
echo '<pre>';
print_r( $respuesta );
echo '</pre>';  
