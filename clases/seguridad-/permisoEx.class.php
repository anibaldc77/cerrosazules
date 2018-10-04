<?php 
include('permiso.class.php'); 

class permisoEx extends Permiso { 
	
	/////Funcion Agregada /////////////////////////////////////////
	  function get_permisoSistema( $idUsuario, $idObjeto, $idTipoPermiso ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM permiso WHERE idUsuario = '$idUsuario' AND idObjeto = '$idObjeto' AND idTipoPermiso = '$idTipoPermiso'");

        $__permisoObj = new permiso();
        // return the retrived from the database

        if (isset($_resultSet[0]['idPermiso'])){
			// create a new object
			$__obj = new Permiso();
			$__obj->set_idPermiso($_resultSet[0]['idPermiso']);
			$__obj->set_idUsuario($_resultSet[0]['idUsuario']);
			$__obj->set_idObjeto($_resultSet[0]['idObjeto']);
			$__obj->set_idTipoPermiso($_resultSet[0]['idTipoPermiso']);
			$__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
			$__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
			return $__obj;
		}
    }


	function PermisosUsuarioSistema($idUsuario,$habilitadoUsuario = '', $habilitadoObjeto='', $idObjeto = '')
	{
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
	
} ?>