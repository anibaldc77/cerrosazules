<?php 
session_name("loginSistemasEPAS"); 
session_start();

if ($_SESSION["autentificado"] != "SI") 
{ 
   header("Location: index.php?E=1&P=8"); 
} else { 

    $fechaGuardada = $_SESSION["ultimoAcceso"]; 
    $ahora = date("Y-n-j H:i:s"); 
    $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada)); 
//print_r("Tiempo= ".$tiempo_transcurrido);
     if($tiempo_transcurrido >= 10000) { 
      session_destroy(); 
      header("Location: index.php?E=1&P=15"); 
	  
	}else { 
		$_SESSION["ultimoAcceso"] = date("Y-n-j H:i:s"); 
		$sistemaentra = ($S)?$S:$_SESSION["sistemaid"];
		
	//	$permisosUsuario = new UsuarioSistema();
  	//    $_SESSION["permiso"]= $permisosUsuario->PermisosUsuarioSistema($_SESSION["usuarioid"],1);
		
	//include_once('../../clases/sysbarrio/personaex.class.php');
		 
		$permisoConsulta = new PermisoEx();
		$persona = new PersonaEx();
		
		//$permisosConsulta = $permisoConsulta->get_permisoSistema($_SESSION["usuarioid"], 1, 1);

		$_SESSION["permiso"] = $permisoConsulta->PermisosUsuarioSistema($_SESSION["usuarioid"], 1,'','');
	//	print_r("<hr>");
	//			print_r($_SESSION["idLegajo"]	);
	//					print_r("<hr>");
		$_SESSION["personales"] = $persona->get_datosPersonaEx($_SESSION["idLegajo"]); 
	//	print_r($_SESSION["personales"]);
		//die();
	} 
}
