<?php 
/************* FUNCIONES DE CARACTER GENERAL ********************/
 
class Funciones{
	
	var $admin=0;

	function dirIP($SERVER){
	//	print_r($SERVER);
	//*********
	//* Devuelve la dirección IP del visitante
	//***********
		if ($SERVER) {
		
		$realip = $SERVER["REMOTE_ADDR"];
		} else {
		if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
		$realip = getenv( 'HTTP_X_FORWARDED_FOR' );
		} elseif ( getenv( 'HTTP_CLIENT_IP' ) ) {
		$realip = getenv( 'HTTP_CLIENT_IP' );
		} else {
		$realip = getenv( 'REMOTE_ADDR' );
		}
		}
		return $realip;

	}
	
	// Función para Verificar permisos
	function permControl($sistemaBaseIs, $permisoBuscar,$valorVerdadero=TRUE,$valorFalso=FALSE){
	$resultado = $valorFalso; 
	$salir = 0;
		for ($i = 0; $i < count($_SESSION['permiso'][$sistemaBaseIs]); $i ++){
			if ($permisoBuscar == $_SESSION['permiso'][$sistemaBaseIs][$i]){
				$resultado = $valorVerdadero;
				$salir = 1;
				break;
			}
		
		if ($salir == 1){
			break;
		}
	}
	//echo $resultado;
	return $resultado;
} 
	
	function elementosDirectorio($directorio){
		if(is_dir($directorio)){
			$elementos = array_diff(scandir($directorio), array('..', '.'));	
		}else{
			$elementos =FALSE;
		}
		return $elementos;
	}

	function enumeracionMysql($tabla, $columna ) {
// Consultamos todos los posibles valores de la columna ENUM 
        $dbConn = $GLOBALS['dbConn'];

		$sqlStatement = "SHOW COLUMNS FROM " . $tabla ." LIKE '" . $columna ."'";
			print_r($sqlStatement);
		// Creamos un Array con el resultado de la consulta 
 		$__resObj =array();
         $__resObj = $dbConn->doQuery($sqlStatement);
			
		 $__resObj = explode("','",preg_replace("/(enum|set)\('(.+?)'\)/","\\2",$__resObj[0]['Type']));
 		 //print_r( $__resObj);
		 return  $__resObj; 
    }	
	
	function diferenciaFechas($fecha1, $fecha2=''){
			/*	La fecha tiene que resibirla en formato 2014-05-25 **************
			*	Calcula la diferencia que existe entre dos fechas, 
			*	devolviendo un Array con los días, horas, minutos 
			*	y segundos de diferencia
			*	Si no se especifica la segunda fecha y hora, toma la actual del sistema
			*
			*	Si Fecha 1 es menor a Fecha 2 Esta dará valores negativos
			*	Si Fecha 2 es menor a Fecha 1 Esta dará valores positivos	
			*/
	//	echo "<br>D1= ".$fecha1;
	//	echo "<br>D2= ".$fecha2;		
		date_default_timezone_set("America/Argentina/Mendoza");				
		$datetime1 = date("d/m/Y H:i:s",strtotime($fecha1));

				
		list($fecha1,$hora1)=explode(" ",$datetime1);
		if($fecha2 <>''){
			$datetime2 = date("d/m/Y H:i:s",strtotime($fecha2));
			list($fecha2,$hora2)= explode(" ",$datetime2);
		}
		date_default_timezone_set("America/Argentina/Mendoza");
		$hora1 =($hora1=='')?date('H:i:s'):$hora1;
		date_default_timezone_set("America/Argentina/Mendoza");
		$fecha2 =($fecha2=='')?date('d/m/Y'):$fecha2;
		$hora2 =($hora2=='')?date('H:i:s'):$hora2;	
	/*		echo "<br>D1= ".$fecha1." * ".$hora1;		
		echo "<br>D2= ".$fecha2." * ".$hora2;	
	echo "<br>" . date("l jS \of F Y h:i:s A – \G\M\T: P", time()) . " - " .date('d/m/Y h:i:s');
		echo "<br><br>" . date_default_timezone_get ();			*/
		list($dia1,$mes1,$ano1)=explode("/",$fecha1);
		list($hora1,$minuto1,$segundo1)=explode(":",$hora1);
		list($dia2,$mes2,$ano2)=explode("/",$fecha2);
		list($hora2,$minuto2,$segundo2)=explode(":",$hora2);
			
//		$date1=mktime($hora1, $minuto1, $segundo1, $mes1, $dia1, $ano1);
//		$date2=mktime($hora2, $minuto2, $segundo2, $mes2, $dia2, $ano2);
		$date1=mktime($hora1, $minuto1, "00", $mes1, $dia1, $ano1);
		$date2=mktime($hora2, $minuto2, "00", $mes2, $dia2, $ano2);			
		$diferencia2 = $date1-$date2;
			
		$diff['segundos'] = $diferencia2 % 60;
		$diff['minutos'] = (int)($diferencia2/(60));
		$diff['minutos'] = $diff['minutos'] % 60;
		$diff['minutos'] = ($diff['minutos']<0)?$diff['minutos']+1:$diff['minutos'];
		$diff['horas'] = (int)($diferencia2/(60*60));
		$diff['horas'] = $diff['horas'] % 60;
			
		$diff['dias'] = (int)($diferencia2/(60*60*24));
	//	echo "<br>D1= ".$hora1;	
	//echo "<br>D2= ".$hora2;
	//	print_r("<br>");
	//	print_r($diff);
	//	print_r("<hr>");
		return $diff;
	}
/* Tres el nombre del mes corto */
	function traeMesEntero($mesNro){
	switch ($mesNro){
		case '01':
			$mesNro = "Enero";
			break;
		case '02':
			$mesNro = "Febrero";
			break;
		case '03':
			$mesNro = "Marzo";
			break;
		case '04':
			$mesNro = "Abril";
			break;
		case '05':
			$mesNro = "Mayo";
			break;
		case '06':
			$mesNro = "Junio";
			break;
		case '07':
			$mesNro = "Julio";
			break;
		case '08':
			$mesNro = "Agosto";
			break;
		case '09':
			$mesNro = "Septiembre";
			break;
		case '10':
			$mesNro = "Octubre";
			break;	
		case '11':
			$mesNro = "Noviembre";
			break;	
		case '12':
			$mesNro = "Diciembre";
			break;
		case 'S':
			$mesNro = "SAC";
			break;		
		default:
			$mesNro = "";
			break;											
	}
	return $mesNro;
}
//------------------------------------------------------
// Devuelve el primer día de un mes - Argumentos Mes y Año
//------------------------------------------------------

  /** Actual month last day **/
  function ultimoDiaMes($mes,$anio) { 
	$mes = ($mes<>'')?$mes:date('m');
	$anio = ($anio<>'')?$anio:date('Y');	
      $dia = date("d", mktime(0,0,0, $mes+1, 0, $anio));
 
      return date('d/m/Y', mktime(0,0,0, $mes, $dia, $anio));
  }
 
  /** Actual month first day **/
  function primerDiaMes($mes,$anio) {
	$mes = ($mes<>'')?$mes:date('m');
	$anio = ($anio<>'')?$anio:date('Y');	
      return date('d/m/Y', mktime(0,0,0, $mes, 1, $anio));
  }

  function PrimerUltimoDiaSemana($fecha="") {
	  //Determina el primer y último día de la semana de la fecha seleccionada
	list($dia,$mes,$anio) = explode("/",$fecha);
	  
	  $semana=date("W",mktime(0,0,0,$mes,$dia,$anio));	 
	  $diaSemana=date("w",mktime(0,0,0,$mes,$dia,$anio));	  

	  # el 0 equivale al domingo...
	$diaSemana=($diaSemana==0)?7:$diaSemana;

	# A la fecha recibida, le restamos el dia de la semana y obtendremos el lunes
	$primerDia=date("d-m-Y",mktime(0,0,0,$mes,$dia-$diaSemana+1,$anio));

	# A la fecha recibida, le sumamos el dia de la semana menos siete y obtendremos el domingo
	$ultimoDia=date("d-m-Y",mktime(0,0,0,$mes,$dia+(7-$diaSemana),$anio));

	  $retorna['semana']=$semana;
	  $retorna['pdia']=$primerDia;
	  $retorna['udia']=$ultimoDia;

      return $retorna;
  }	
	
//------------------------------------------------------
// SUMAR HORAS - Argumentos hora1 y hora2
//------------------------------------------------------

	function datetimeMYSQtoFH($dato){
	//	print_r($dato);
		list($fecha, $hora)=explode(" ",$dato);
		list($anio,$mes, $dia)=explode("-",$fecha);
		$devuelve[fecha] = $dia ."/".$mes ."/".$anio;
		$devuelve[hora] = $hora;
		return($devuelve);
	}
	
	function sumarHoras($hora1,$hora2){
//print_r("<br>-*".$hora1." + ". $hora2);
		list($horai, $mini,$segi)=explode(":",$hora1);
		list($horaf, $minf,$segf)=explode(":",$hora2);
		$segi="00";
		$segf="00";		
		$horai = is_numeric($horai)?$horai:"00";
		$mini=is_numeric($mini)?$mini:"00";
		$segi=is_numeric($segi)?$segi:"00";
		$horaf = is_numeric($horaf)?$horaf:"00";
		$minf=is_numeric($minf)?$minf:"00";
		$segf=is_numeric($segf)?$segf:"00";
		
	
	$ini=((($horai*60)*60)+($mini*60)+$segi);
	$fin=((($horaf*60)*60)+($minf*60)+$segf);
	
	$sum=$ini+$fin;
	
	$sumh=floor($sum/3600);
	$summ=floor(($sum-($sumh*3600))/60);
	$sums=$sum-($summ*60)-($sumh*3600);
	
	if(strlen($sumh)<2){
	    $sumh = "0" . $sumh;  
	    }
	if(strlen($summ)<2){
	    $summ = "0" . $summ;  
	}
	if(strlen($sums)<2){
	    $sums = "0" . $sums;  
	}
	return ($sumh . ":" . $summ . ":" . $sums);
}

	function restaHoras($inicio, $fin) {
	$dif=date("H:i:s", strtotime("00:00:00") + strtotime($fin) - strtotime($inicio) );
	return $dif;
}
	
	function HoraASegundos($hora) { 
    list($h, $m, $s) = explode(':', $hora); 
    return ($h * 3600) + ($m * 60) + $s; 
} 
	
	function SegundosAHoras($segundos) { 
    $h = floor($segundos / 3600); 
    $m = floor(($segundos % 3600) / 60); 
    $s = $segundos - ($h * 3600) - ($m * 60); 
    return sprintf('%02d:%02d:%02d', $h, $m, $s); 
}
	
	function fechaMssqlTodmY($fecha) { 
	list( $mes, $dia, $ano )= explode( '[ ]', substr(trim($fecha),0,11) );	
		switch ($mes){
		  case "Jan";
			$mes = '01'; 
			break;
		  case "Feb";
			$mes = '02'; 
			break;
		  case "Mar";
			$mes = '03'; 
			break;
		  case "Apr";
			$mes = '04'; 
			break;
		  case "May";
			$mes = '05'; 
			break;
		  case "Jun";
			$mes = '06'; 
			break;
		  case "Jul";
			$mes = '07'; 
			break;
		  case "Aug";
			$mes = '08'; 
			break;
		  case "Sep";
			$mes = '09'; 
			break;
		  case "Oct";
			$mes = '10'; 
			break;
		  case "Nov";
			$mes = '11'; 
			break;
		  case "Dec";
			$mes = '12'; 
			break;																						
			
		}
	
		$dia = str_pad($dia,2,"0", STR_PAD_LEFT);
		return $dia . "/" . $mes. "/" . $ano; 
	}

/************ Devuelve dia/mes/anio H:M:S ************/
function fechaHoraMssqltodmYH($fechahora) { 
		list($mes, $dia, $ano, $hora, $hora1)= explode('[ ,  ]', $fechahora );	
	
		$fecha = $this->fechaMssqlTodmY($fechahora);
	
		return $fecha. " " . $hora.$hora1; 
	}

/************ Devuelve hora H:M:S ************/
function FechaHoratoHora($fechahora,$tipo=0) 	{ //Manda Hora:minutos:segundos
	//	list($mes, $dia, $ano, $hora, $hora1)= explode('[ ,  ]', $fechahora );	
		$formato= ($tipo == 0)?"H:i":"H:i:s";
		$devuelve=(date($formato, strtotime($fechahora)));
	//	print_r("<br>" .  $fechahora." - ". $devuelve);
		return  $devuelve; 
	}

/************ Devuelve hora H:M:S en caso de que la fecha es muy vieja o nula************/
function FechaHoratoHora2($fechahora,$tipo=0) { //Fecha a enviar formato mes/dia/año Hora:minutos:segundos
		list($mes, $dia, $ano, $hora1)= preg_split("/[\s,]+/", $fechahora);	
	//	print_r("<br>* ". $mes." | ". $dia." | ". $ano." | ". $hora1);
		$formato= ($tipo == 0)?"H:i":"H:i:s";
		$fechahora1=date("Y-m-d"). " ". $hora1;
		$devuelve=(date($formato, strtotime($fechahora1)));
		//print_r($devuelve);
		return  $devuelve; 
	}
		
function Edad($fechanacimiento){
		list($dia,$mes,$anio) = explode("/",$fechanacimiento);
		//$anio_dif = date("Y") - $anio;
		$edad=date("Y")- $anio - 1;
		if (date("m") - $mes < 0){
			return $edad;
		}
		//$mes_dif = date("m") - $mes;
		if(date("m") - $mes > 0){
			$edad = $edad +1;
			return $edad;
		}
	
		if (date("d") - $dia >= 0){ 
			//   return edad + 1 
			$edad = $edad + 1;
			return $edad;
		}else{
		   // return edad 
			return $edad;
		}
	}	

function diaHabil($fecha) 	{      
	//Devuelve la fecha y si es un día sabado, domingo o feriado la salta y devuelve la próxima fecha habil
	/* No elige como alternativa sábados ni domingos */
		list($dia,$mes,$ano)=explode("/",$fecha);
		$fecha=$ano."/".$mes."/".$dia;
		$numDia = date('w', strtotime($fecha));
		//print_r(  $numDia);
			if ($numDia == '6') //Es Domingo         
			{            
				
				$fecha_final =  strtotime ( '+2 day' , strtotime ( $ano."/".$mes."/".$dia ) ) ;   
				$fecha_final = date ( 'd/m/Y' , $fecha_final );   
			}
			if ($numDia == '0') //Es Domingo         
			{            
				$fecha_final =  strtotime ( '+1 day' , strtotime ( $ano."/".$mes."/".$dia ) ) ;      
				$fecha_final = date ( 'd/m/Y' , $fecha_final );        
			}
			if (($numDia <> '6')and($numDia <> '0')) //Es Domingo         
			{            
				$fecha_final =  strtotime ( '+0 day' , strtotime ( $ano."/".$mes."/".$dia ) ) ;      
				$fecha_final = date ('d/m/Y', $fecha_final );        
			}		
			list($dia,$mes,$ano)=explode("/",$fecha_final);
			$fecha=$ano."/".$mes."/".$dia;
		
			$link = Conectarse();
			$sql = "select * from facturacion.dbo.feriado where [dia] = '". $dia."' and [mes] = '". $mes."' and [anio] = '". $ano."'";
	//		echo "<hr>" . $sql; 
			$result  =  mssql_query($sql, $link);
	
			if ($result)
			{
	
				if ($userData = mssql_fetch_array($result))
				{
					
					$fecha_final =  strtotime ( '+1 day' , strtotime ( $ano."/".$mes."/".$dia ) ) ;      
					
					$fecha_final = diaHabil(date ( 'd/m/Y' , $fecha_final )); 
					
				}
			}
		//echo($link);
	
		return $fecha_final;   
	}

/*****************************************************************************/
//		Devuelve de un esquema ID, Nombre, Padre ID, el árbol de depedencias
/*****************************************************************************/
function treemenu($rows,$parent=0) { 
//Devuelve de un esquema ID, Nombre, Padre ID, el árbol de depedencias
	$result = "<ul>"; 
	foreach ($rows as $row) {
		if ($row['SUPDEPTID'] == $parent) { 
			$result.= "<li>{$row[DEPTNAME]}"; 
			foreach ($row as $r) { 
				if ($r['SUPDEPTID'] == $r['DEPTID']) {
					$children = true; 
				}else{
					 $children = false; 
				}
		
			} 
			if ($children = true) 
			{
				$result.= treemenu($rows,$row['DEPTID']) . "</li>"; 
			}
		}
	} 
	$result .= "</ul>"; 
	return $result; 
}

	
function mensaje($mensaje, $color,$colortexto='white', $iconotitulo='', $titulo='', $urlimage=''){
		$respuesta = "<div id='card-alert' class='card ".$color ."'>\n";
        $respuesta .= "<div class='card-content ".$colortexto."-text'>\n";
		if($urlimage<>""){
        	$respuesta .= "<img src='".$urlimage."' alt='avatar' class='alert-circle responsive-img valign profile-image'/>\n";
		}
		$respuesta .= "<span class='card-title ".$colortexto."-text darken-1'><i class='".$iconotitulo."'></i>  ".$titulo."</span>\n";
        $respuesta .= "<p>".$mensaje."</p>\n";
        $respuesta .= "</div>\n";
		
        //$respuesta .= "<div class="card-action green darken-2">\n";
        //$respuesta .= "<a class="btn-flat waves-effect light-blue ".$colortexto."-text"><i class="mdi-navigation-check left"></i> Ok</a>\n";
        //$respuesta .= "<a class="btn-flat waves-effect red accent-2 ".$colortexto."-text"><i class="mdi-content-clear left"></i> Cancle</a>\n";
        //$respuesta .= "</div>\n";
        $respuesta .= "<button type='button' class='close ".$colortexto."-text' data-dismiss='alert' aria-label='Cerrar'>\n";
        $respuesta .= "<span aria-hidden='true'>×</span>\n";
        $respuesta .= "</button>\n";
        $respuesta .= "</div>\n";
		return($respuesta);
	}

function mensajeInformativo($datos){ //SweetAlert
	// type: "warning", "error", "success" and "info"
	//info http://t4t5.github.io/sweetalert/

	$retorna="<script type=\"text/javascript\">\n";
	$retorna.="$(document).ready(function(){\n";
	$retorna.="swal({\n";
	$retorna.= ($datos['titulo']<>"")?"title: '".$datos['titulo']."',\n":"";
	$retorna.=($datos['text']<>"")?"text: '".$datos['text']."',\n":"";
	$retorna.=($datos['tipo']<>"")?"type: '".$datos['tipo']."',\n":"";
	$retorna.=($datos['aceptar']<>"")?"confirmButtonText: '".$datos['aceptar']."',\n":"";
	$retorna.=($datos['cancelar']<>"")?"cancelButtonText: '".$datos['cancelar']."',\n":"";
	$retorna.=($datos['cancelar']<>"")?"showCancelButton: true,\n":"";
	$retorna.=($datos['timer']<>"")?"timer: '".$datos['timer']."',\n":"";
	$retorna.=($datos['imageUrl']<>"")?"imageUrl: '".$datos['imageUrl']."',\n":"";
	$retorna.=($datos['allowEscapeKey']<>"")?"allowEscapeKey: '".$datos['allowEscapeKey']."',\n":"allowEscapeKey: true,\n";
	$retorna.=($datos['showConfirmButton']<>"")?"showConfirmButton: '".$datos['showConfirmButton']."',\n":"showConfirmButton: true,\n";
	$retorna.=($datos['confirmButtonColor']<>"")?"confirmButtonColor: '".$datos['confirmButtonColor']."',\n":"";

	
	$retorna.="});\n";
	$retorna.="});\n";
	$retorna.="</script>  \n";
	return($retorna);
	
}	
	
function valorDecimalPunto($mensaje) 	{ 
		$especiales = array(".");
		$mensaje = str_replace($especiales, "", $mensaje);	
		$especiales = array(",");
		$mensaje = str_replace($especiales, ".", trim($mensaje));
		return $mensaje; 
	}
	
function valorDecimalComa($mensaje) 	{ 
		$especiales = array(",");
		$mensaje = str_replace($especiales, ".", $mensaje);	
		return $mensaje; 
	}
	
function auditaUsuario($quien, $sistema = '1', $accion, $comentario = '',$ip = '', $tabla = 'encuesta.audita.AuditaUsuario') { //OBSOLETA Reemplazada por la clase funciones.class.php
	
		echo "<br>ENTRA 3 <br>"; 
		$link = Conectarse();
				
		$sql = "Insert into " . $tabla ." (UsuarioId, SistemaId, Descripcion, Ip, Accion, Fecha) values (";
		$sql = $sql . "". $quien .",";			
		$sql = $sql . "". $sistema .",";			
		$sql = $sql . "'".$comentario."',";	
		$sql = $sql . "'".$ip."',";				
		$sql = $sql . "'".$accion."',";	
		$sql = $sql . "'". date('d/m/Y h:i:s a') ."');";	
				
		if(!($result1 = mssql_query($sql))){
				$mensaje = new Mensaje();
				$mensaje->titulo="Error - Base de Datos";
				$mensaje->mensaje="No se pudo realizar la consulta solicitada.<br />";
				if($this->admin==1){
					$mensaje->mensaje.="<br />".$sql;
					$mensaje->mensaje.="<br /><br />Causa :";
					$mensaje->mensaje.=mssql_get_last_message() . "<br />";
				}
				$mensaje->tipo="error_msg";
				$mensaje->cerrar=0;
				$mensaje->ancho='300px';
				$mensaje->url=1;
				$mensaje->Mostrar_Mensaje();
				unset($mensaje);			

				}					
	
	}	
	
		
function phpQrCode($datos,$level='L',$size='2'){
	/* ******************** Función que genera la imagen para el código QR ************************** */
	//
	//
	//		
		include "../general2/phpqrcode/qrlib.php";  
		$PNG_TEMP_DIR =  "E:\\usuariosftp\\academica\\encuesta\\general2\\phpqrcode\\temp\\";
		$puntos = $this->buscaDirBase(getcwd(),'encuesta');
	  
		$PNG_WEB_DIR = $puntos.'general2/phpqrcode/temp/';
	
		$this->eliminaContenidoDirectorio($PNG_WEB_DIR);	
	  
			$base_url = str_replace($DOCUMENT_ROOT, "", dirname($PHP_SELF)); 
	  
			//echo "<br> *** BASE = " .dirname($_SERVER['PHP_SELF'])." - ". $_SERVER['HTTP_HOST'] . " *** <br>";
	 
		//ofcourse we need rights to create temp dir
		if (!file_exists($PNG_TEMP_DIR))
			mkdir($PNG_TEMP_DIR);
		
		
		$filename = $PNG_TEMP_DIR.'test.png';
		
		//processing form input
		//remember to sanitize user input in real-life solution !!!
		if (!file_exists($PNG_TEMP_DIR))
			mkdir($PNG_TEMP_DIR);
		
		
		$filename = $PNG_TEMP_DIR.'test.png';
		
		//processing form input
		//remember to sanitize user input in real-life solution !!!
		$errorCorrectionLevel = 'L';
		if (isset($level) && in_array($level, array('L','M','Q','H')))
			$errorCorrectionLevel = $level;    
	
		$matrixPointSize = 2;
		if (isset($size))
			$matrixPointSize = min(max((int)$size, 1), 10);
	
	
		if (isset($datos)) { 
		
			//it's very important!
			if (trim($datos) == '')
				die('No se han suministrado Datos');
				
			// user data
			$filename = $PNG_TEMP_DIR.'test'.md5($datos.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
	       //echo "ARCHIVO = " . $filename;
		   $filename1 =$filename;
		if (file_exists($filename))
			unset($filename);
			
			$filename =$filename1;
			
			QRcode::png($datos, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
			
		} else {    
		
			QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
			
		}    
			
		$archivo=$PNG_WEB_DIR.basename($filename);
		//echo $PNG_WEB_DIR;
	
//		echo "<br> Puntos = " .$puntos."<br> ";	

		//echo "<br> Puntos = " . $archivo;
		return $archivo;
	}


function eliminaContenidoDirectorio($dir,$borraDirectorio=0){
	//echo $dir;
       $Res = false;

		if (file_exists($dir))
		{
			$dh = opendir($dir);
	
			while ($file=readdir($dh)) 
			{
				if ($file!="." && $file!=".."&& $file!="test.png") 
				{
					$fullpath=$dir."/".$file;
	
					if (!is_dir($fullpath)) 
					{
						$fechaArchivo=date ("Y-m-d H:i:s",filemtime($fullpath));

						$dias=$this->diferenciaFechas($fechaArchivo);
					//	echo "<br>==++= ".$fechaArchivo;
						//echo "<br>==++= ".$dias['dias'];
				if($dias['dias']<-3){
						//echo "<br> " . $fullpath . " - " . date ("Y-m-d H:i:s",filemtime($fullpath));
					unlink($fullpath);
				}
						
						$Res = true;
						//unlink($fullpath);
					} 
					else 
					{
	
	//					fDeldir($fullpath);
					}
				}
			}
	
			closedir($dh);
	
		}
		
			return $Res;		

	}	
	
function buscaDirBase($dir,$dirbase=''){

		$part = explode('[/\]', $dir);
		$cantidad = count($part);
		$puntos="";
		$h=1;
		for ($i=0;$i<$cantidad;$i++){
//			echo "<br>$i= " . $part[$i];
			if($part[$i]<>$dirbase and ($h<>'1')){
				$puntos.="../";
			}else{
				$h=($part[$i]==$dirbase)?2:$h; 
//				$puntos=($part[$i]==$dirbase)?"":$puntos;
			}
	
		}
	return $puntos;
	}
	
function quitar($mensaje) { 
		$especiales = array("<", ">", "\'", "\"", "\\", ")", "(", "*", "%", "$", "#", "}", "{", "[", "]", "&", "+", "^", "'");
		//$especiales = array( "\'", "\"", "\\", ")", "(", "*", "%", "$", "#", "}", "{", "[", "]", "&", "+", "^", "'");
		$mensaje = str_replace($especiales, "", trim($mensaje));
		return $mensaje; 
	}
	
function quitarCaracteres($mensaje) { 
//*********
//* Elimina caracteres password
//***********
	$especiales = array("%", "&", "'");
	$mensaje = str_replace($especiales, "", trim($mensaje));
	return $mensaje; 
}
	
	//------------------------------------------------------
	// Coloca los cartelitos de Toolstips 
	//------------------------------------------------------
function informacionAdicional($texto, $icono = '?'){
		$informacion='';
		if($texto<>''){
			$informacion = "<div class='item'>";	
			  $informacion .= "<div class='tooltip help'>";
			  $informacion .= "<span>".$icono."</span>";
			  $informacion .= "<div class='content'>";
			  $informacion .= "<b></b>";
			  $informacion .= "<p>" . $texto . "</p>";
			  $informacion .= "</div></div></div>";
		}
		
		return $informacion;
	} 	
	
	
	//FUNCIONES PARA MANEJO DE DIRECTORIOS SISTEMA DE RESOLUCIONES 
	
	//------------------------------------------------------
	// Muestra el Archivo que se le da como parámetro 
	function muestraArchivo($path,$file = ''){
		
//$mi_pdf = '/resoluciones/despacho2/res/2011/co016-2011.pdf'; 

	$falsa_url_pdf = $file;
	header('Content-type: application/pdf');
	header('Content-Disposition: attachment; filename="'.$falsa_url_pdf.'"');
	readfile($path.$file);
	
	}

	//**************************************************
	//    Envía un Array Cerealizado
	function array_envia($array) {
	
		$tmp = serialize($array);
		$tmp = urlencode($tmp);
	
		return $tmp;
	}

	//**************************************************
	//    Recibe un Array Cerealizado
	function array_recibe($url_array) {
		$tmp = stripslashes($url_array);
		$tmp = urldecode($tmp);
		$tmp = unserialize($tmp);
	
	   return $tmp;
	} 

function borrarArchivo($path, $elemento){
	$exito=0;
	if (file_exists($path.$elemento)) {
		$trozos = explode(".", $elemento); 
		$extension = end($trozos); 
		if(strlen($extension)==3)
		{
			if (!unlink($path.$elemento)){ //Borra el archivo, si no puede da error 
				echo 'no se pudo borrar el archivo :'.$path.$elemento; 
			}else{
				$exito=1;	
			}
		}
	}
	return $exito;	
}

function numero($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}

function getBrowser() { 
    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $ub = ''; 
    if(preg_match('/MSIE/i',$u_agent)) 
    { 
        $ub = "ie"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $ub = "firefox"; 
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { 
        $ub = "chrome"; 
    } 
	elseif(preg_match('/Safari/i',$u_agent)) 
    { 
        $ub = "safari"; 
    } 

    elseif(preg_match('/Flock/i',$u_agent)) 
    { 
        $ub = "flock"; 
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    { 
        $ub = "opera"; 
    } 
    
    return $ub; 
} 

function grabaArchivo($archivo, $directorio,$urlfoto1=''){
	
	if(count($archivo)>0){
		if (is_uploaded_file($archivo['tmp_name'])){
			if($urlfoto1<>""){
				unlink($urlfoto1);
			}
			$nombreDirectorio = $directorio;
			$nombreFichero = $archivo['name'];
			
			$nombreCompleto = $nombreDirectorio . $nombreFichero;
//print_r(getcwd());
			if (is_file($nombreCompleto)){
				$idUnico = time();
			 	$nombreFichero = $idUnico . "-" . $nombreFichero;
			}
				$resultado['urlfotoG'] = $nombreDirectorio . $nombreFichero;
				if(is_dir($nombreDirectorio)){
					$resultado['archivo'] = (move_uploaded_file($archivo['tmp_name'], $resultado['urlfotoG']));
				}else{
					if(mkdir($nombreDirectorio, 0777, true)){
						$resultado['archivo'] = (move_uploaded_file($archivo['tmp_name'], $resultado['urlfotoG']));
					}else{
						$mensaje = "Existieron problemas al grabar el archivo, no se pudo crear el directorio correspondiente";
						$color ="red";
						$iconotitulo="mdi-alert-error";
						$colortexto="white";
						$titulo="Archivo No ingresado";	
						$resultado['error'] = $this->mensaje($mensaje,$color,$colortexto,$iconotitulo,$titulo);						
					}
				}
				
			}else{
				if($urlfoto1==""){
					$mensaje = "Existieron problemas al grabar el archivo";
					$color ="red";
					$iconotitulo="mdi-alert-error";
					$colortexto="white";
					$titulo="Archivo No ingresado";	
					$resultado['error'] = $this->mensaje($mensaje,$color,$colortexto,$iconotitulo,$titulo);
				}else{
					$resultado['urlfotoG'] = $urlfoto1;
				}
				
										
			}
				
		}else{
			if($urlfoto1==''){
				
				$mensaje = "No se ha ingresado ningún archivo";
				$color ="red";
				$iconotitulo="mdi-alert-error";
				$colortexto="white";
				$titulo="Archivo No ingresado";	
				$resultado['error'] = $this->mensaje($mensaje,$color,$colortexto,$iconotitulo,$titulo);
				
			}else{
				$resultado['urlfotoG'] = $urlfoto1;
			}
					
		}
		
	return $resultado;
	}	
	
	//Funciones de Manejo de Imágenes
function imageCreateFromAny($filepath) { 
		$type = exif_imagetype($filepath); // [] if you don't have exif you could use getImageSize() 
		$allowedTypes = array( 
			1,  // [] gif 
			2,  // [] jpg 
			3,  // [] png 
			6   // [] bmp 
		); 
		if (!in_array($type, $allowedTypes)) { 
			return false; 
		} 
		switch ($type) { 
			case 1 : 
				$im = imageCreateFromGif($filepath); 
			break; 
			case 2 : 
				$im = imageCreateFromJpeg($filepath); 
			break; 
			case 3 : 
				$im = imageCreateFromPng($filepath); 
			break; 
			case 6 : 
				$im = imageCreateFromBmp($filepath); 
			break; 
		}    
		return $im;  
} 
	
function imageCambiarTamanio($filepath, $nombreFinal, $altoT, $anchoT) {
	$rutaImagenOriginal=$filepath;
	
	//Creamos una variable imagen a partir de la imagen original
	$img_original = $this->imageCreateFromAny($rutaImagenOriginal);
	
	//Se define el maximo ancho o alto que tendra la imagen final
	$max_ancho = $anchoT;
	$max_alto = $altoT;
	
	//Ancho y alto de la imagen original
	list($ancho,$alto)=getimagesize($rutaImagenOriginal);
	
	//Se calcula ancho y alto de la imagen final
	$x_ratio = $max_ancho / $ancho;
	$y_ratio = $max_alto / $alto;
	
	//Si el ancho y el alto de la imagen no superan los maximos, 
	//ancho final y alto final son los que tiene actualmente
	if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
		$ancho_final = $ancho;
		$alto_final = $alto;
	}
	/*
	 * si proporcion horizontal*alto mayor que el alto maximo,
	 * alto final es alto por la proporcion horizontal
	 * es decir, le quitamos al alto, la misma proporcion que 
	 * le quitamos al alto
	 * 
	*/
	elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	}
	/*
	 * Igual que antes pero a la inversa
	*/
	else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
	
	//Creamos una imagen en blanco de tamaño $ancho_final  por $alto_final .
	$tmp=imagecreatetruecolor($ancho_final,$alto_final);	
	
	//Copiamos $img_original sobre la imagen que acabamos de crear en blanco ($tmp)
	imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
	
	//Se destruye variable $img_original para liberar memoria
	imagedestroy($img_original);
	
	//Definimos la calidad de la imagen final
	$calidad=95;
	
	//Se crea la imagen final en el directorio indicado
	imagejpeg($tmp, $directorio."/".$nombre.".jpg",$calidad);
	
	/* SI QUEREMOS MOSTRAR LA IMAGEN EN EL NAVEGADOR
	 * 
	 * descomentamos las lineas 64 ( Header("Content-type: image/jpeg"); ) y 65 ( imagejpeg($tmp); ) 
	 * y comentamos la linea 57 ( imagejpeg($tmp,"./imagen/retoque.jpg",$calidad); )
	 */ 
	//Header("Content-type: image/jpeg");
	//imagejpeg($tmp);
	
	
}	
}