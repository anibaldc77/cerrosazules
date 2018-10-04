<?php 

include_once("cierrelote.class.php"); 
include_once("cierrelotedetalle.class.php"); 

class CierreLoteEx extends Cierrelote
{
/* DEVUELVE AÑOS CORRESPONDIENTES A LAS MARCACIONES */
	public function cierredetallecompleto($condicion = "")
	{
	
		$dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
		$condicion=($condicion<>"")?" where " . $condicion:"";
		
         $sqlStatement = "SELECT cierrelote.idcierrelote,
			cierrelote.idtipoterminal,
			tipoterminal.descripcion AS terminal,
			cierrelote.idcomercio,
			comercio.descripcion AS comercio,
			cierrelote.fechacomprobante,
			cierrelote.nrolote,
			cierrelote.terminal,
			cierrelotedetalle.idtarjeta,
			tarjeta.descripcion AS tarjeta,
			cierrelotedetalle.fechacierre,
			cierrelotedetalle.cantidad,
			cierrelotedetalle.cuotas,
			cierrelotedetalle.monto
			FROM systarjetas.cierrelote 
			LEFT JOIN systarjetas.cierrelotedetalle ON cierrelote.idcierrelote =  cierrelotedetalle.idcierrelote
			LEFT JOIN systarjetas.tipoterminal ON tipoterminal.idtipoterminal =  cierrelote.idtipoterminal
			LEFT JOIN systarjetas.comercio ON comercio.idcomercio = cierrelote.idcomercio
			LEFT JOIN systarjetas.tarjeta ON tarjeta.idtarjeta = cierrelotedetalle.idtarjeta" . $condicion; 
	
         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);
        
         
	     return $__resObj;
	}


	
}