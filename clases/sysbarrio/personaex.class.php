<?php 

include_once("persona.class.php"); 
class PersonaEx extends Persona
{
	public function get_datosPersonaEx($idLegajo)
	{
		
	/*	print_r("<hr>");
				print_r($idLegajo);
						print_r("<hr>");*/
	//die($idLegajo);
		$usuarioid=($_SESSION["usuarioid"]<>'')?$_SESSION["usuarioid"]:$usuarioid;
	/*//	$permiso = new Permiso();
		$consulta = "UsuarioId='" .$usuarioid . "'";
		$consulta .= ($sistemaBaseId<>'')?" and SistemaBaseId='" .$sistemaBaseId . "'":"";
		$consulta .= ($sistemaentra<>'')?" and SistemaId='" .$sistemaentra . "'":"";
*/		
		$consulta = ($habilitadoUsuario==1)?" and usuario.vigente ='si'":"";
		$consulta .= ($habilitadoObjeto==1)?" and objeto.habilitado ='s'":"";
		$consulta .= ($idObjeto<>'')?" and objeto.idObjeto =".$idObjeto:"";


		$consulta = "SELECT usuario.idUsuario,usuario.apellidoNombre, IF(usuario.vigente ='si',1,0) AS personavigente, objeto.idObjeto, objeto.objeto,IF(objeto.habilitado ='s',1,0) AS objetohabilitado,tipopermiso.idTipoPermiso, tipopermiso.descripcionPermiso, permiso.* 
		FROM permiso 
LEFT JOIN usuario ON usuario.idUsuario = permiso.idUsuario
LEFT JOIN objeto ON objeto.idObjeto = permiso.idObjeto
LEFT JOIN tipopermiso ON tipopermiso.idTipoPermiso = permiso.idTipoPermiso
WHERE usuario.idUsuario = '" .$idUsuario . "'" . $consulta;
//print_r($consulta);
		$dbConn = $GLOBALS['dbConn'];
        $_resultSet = $dbConn->doQuery($consulta);
	//	print_r($_resultSet);
		
		$permisoArray = array();

			foreach($_resultSet as $permiso) {
				$permisoArray[$permiso['idObjeto']][] = $permiso['idTipoPermiso'];
			}

		return $permisoArray;	
	}
	//use menu;
     


}

