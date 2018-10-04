<?php

if(isset($_SESSION)){
		session_destroy();
}

if (isset($_POST['usuario']) and isset($_POST['contrasenia']))
{
	include_once('include/parametros.php');
	include_once('../../clases/sysbarrio/funciones.class.php');
	include_once('../../clases/sysbarrio/configuration.php');
	include_once('../../clases/sysbarrio/usuarioEx.class.php');
	include_once('../../clases/sysbarrio/auditausuario.class.php');
	include_once('../../clases/sysbarrio/permisoEx.class.php');
	//include_once('../../clases/seguridad/ingreso.class.php');	
	//include_once('../general2/includev2/funcionesgenerales.php');
	$funcion = new Funciones();
	$legajo = $funcion->quitarCaracteres($_POST['usuario']);
	$legajo1 = $funcion->quitarCaracteres($_POST['contrasenia']);
	$legajo2 = md5($funcion->quitarCaracteres($_POST['contrasenia']));

	$ipusuario = $funcion->dirIP($_SERVER);

	$usuarioEx = new usuarioEx();
	$usuarioA = $usuarioEx->get_usuarioEx($legajo,$legajo2);
//	print_r($usuarioA);
	//die('TERMINA ACA');
//	$usuarioAcceso = new UsuarioAcceso();
//	conectarBdEncuesta();
//	$usuarioAcceso = $usuarioAcceso->IngresoUsuario($legajo,$legajo2);

//	if ($usuarioAcceso->get_Usuario() === $legajo)



	if($usuarioA instanceof usuarioEx){
		
		if($usuarioA->get_vigente() == '1'){
		

			session_name("loginSistemasEPAS"); 
			session_start(); 

			$_SESSION["autentificado"]= "SI"; 
			$_SESSION["usuario"]= $usuarioA->get_nomusuario();
			$_SESSION["usuarioid"]= $usuarioA->get_idUsuario();
			//$_SESSION["nombreusuario"]= utf8_encode($usuarioA->get_apellidoNombre()); 
			
			$_SESSION["SistemaIdAcceso"]= ''; 			

			$_SESSION["SistemaBaseId"]= (SISTEMABASE>0)?SISTEMABASE:''; 
			$_SESSION["sistemaid"]= (SISTEMAACCESO<>'')?SISTEMAACCESO:''; 
			$_SESSION["sistemaIdActual"]= $_SESSION["sistemaid"]; 
			//$_SESSION["TipoUsuario"]= $usuarioAcceso->get_TipoUsuario();			
			$_SESSION["legajo"]=$legajo;
			$_SESSION["legajo2"]=$legajo2;
			//$_SESSION["nombreOficina"]=utf8_encode($usuarioA->get_nombreOficina());
			//$_SESSION["idLegajo"]=$usuarioA->get_idLegajo();
			
			//$_SESSION["codAmbito"]=$usuarioA->get_codAmbito();
			//$_SESSION["codOficina"]=$usuarioA->get_codOficina();	
			//$_SESSION["userIdReloj"]=$usuarioA->get_userIdReloj();			
			
			
			$_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s"); 			
			
			$texto = "Ingreso Usuario " . $_SESSION["usuario"] . " a Sistema Id " . $_SESSION["sistemaIdActual"];
			
			$auditaUsuario = new AuditaUsuario();
			$FechaAudita= date("Y-n-j H:i:s");
			$auditaUsuario->createnew_AuditaUsuario('',$_SESSION["usuarioid"], $_SESSION["sistemaIdActual"], $FechaAudita, $texto, $ipusuario, AUDITAINGRESO);
			unset($auditaUsuario);
			$actualizar = array();
			$actualizar['fechaUltimoAcceso']=date("d-m-Y H:i:s");
			$actualizar['ip']=$ipusuario;

			//$usuarioAcceso->update_UsuarioAcceso($_SESSION["usuarioid"], $actualizar);
			header ("Location: principal.php"); 

			}else {

				$texto = "El Usuario " . $legajo . " NO se encuentra Habilitado para ingresar al Sistema ". $sistemaid;
				$auditaUsuario = new AuditaUsuario();
				$FechaAudita= date("Y-n-j H:i:s");				
				$auditaUsuario->createnew_AuditaUsuario($_SESSION["usuarioid"], $_SESSION["sistemaIdActual"], $FechaAudita, $texto, $ipusuario,AUDITADESHA);
				unset($auditaUsuario);
				header("Location: index.php?E=1&P=2"); 
			}
			
		}else {
			
			$texto = "Error en el Ingreso del Usuario " . $legajo . " al Sistema ". SISTEMAACCESO . "<br> Usuario = ". $legajo . " <br>Pass = ". $legajo1;
				$auditaUsuario = new AuditaUsuario();
				$FechaAudita= date("Y-n-j H:i:s");		

				$auditaUsuario->createnew_AuditaUsuario(USUARIOERROR, SISTEMAACCESO, $FechaAudita, $texto, $ipusuario,AUDITAERRORUSR);
				unset($auditaUsuario);
			header("Location: index.php?E=1&P=3"); 
		}
}else {

    header("Location: index.php?E=1&P=1"); 
}
