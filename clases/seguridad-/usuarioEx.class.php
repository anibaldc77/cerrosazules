<?php

include('usuario.class.php'); 

class usuarioEx extends Usuario { 

    var $nombreOficina;

//--------------- GET METHODS ----------------------------- //
    
    function get_nombreOficina( ) {
        // returns the value of idUsuario
        return $this->nombreOficina;
    }
	
	function get_userIdReloj( ) {
        // returns the value of userIdReloj
        return $this->userIdReloj;
    }

//--------------- SET METHODS ----------------------------- //

    function set_nombreOficina( $nombreOficina ) {
        // sets the value of idUsuario
        $this->nombreOficina = $nombreOficina;
    }
	
    function set_userIdReloj( $userIdReloj ) {
        // sets the value of idUsuario
        $this->userIdReloj = $userIdReloj;
    }	

//--------------- CRUD METHODS ----------------------------- //

   function get_usuarioEx( $usuario,$clave ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        //$_resultSet = $dbConn->doQuery("SELECT * FROM usuario WHERE usuario = '$usuario' AND clave = '$clave'");
		
		$_resultSet = $dbConn->doQuery("SELECT u.idUsuario,u.usuario,u.idLegajo,u.clave,u.vigente,u.idGrupo,u.codAmbito,u.codOficina,u.perfil,u.telefono,u.interno, 	
										u.correoElectronico,u.__modificoUsuario,u.__modificoFecha,o.nombreOficina FROM usuario u, piezas.oficina o 
										WHERE u.usuario = '$usuario' AND u.clave = '$clave' AND u.codAmbito = o.codAmbito AND u.codOficina = o.codOficina");
		
	/*	print_r("SELECT u.idUsuario,u.usuario,u.idLegajo,u.clave,u.vigente,u.idGrupo,u.codAmbito,u.codOficina,u.perfil,u.telefono,u.interno, 	
										u.correoElectronico,u.__modificoUsuario,u.__modificoFecha,o.nombreOficina FROM usuario u, piezas.oficina o 
										WHERE u.usuario = '$usuario' AND u.clave = '$clave' AND u.codAmbito = o.codAmbito AND u.codOficina = o.codOficina"); 
	   die();*/
									//	print_r($_resultSet);
		if(isset($_resultSet[0]['idUsuario'])<=0){
			 
			$valor = "No existe"; 
			return $valor;
			
		} else {
        //$__usuarioObj = new usuarioEx();
        // return the retrived from the database

        // create a new object
        $__obj = new usuarioEx();
        $__obj->set_idUsuario($_resultSet[0]['idUsuario']);
        $__obj->set_usuario($_resultSet[0]['usuario']);
        $__obj->set_idLegajo($_resultSet[0]['idLegajo']);
		// $__obj->set_nombreApellido($_resultSet[0]['nombreApellido']);
        $__obj->set_clave($_resultSet[0]['clave']);
        $__obj->set_vigente($_resultSet[0]['vigente']);
        $__obj->set_idGrupo($_resultSet[0]['idGrupo']);
        $__obj->set_codAmbito($_resultSet[0]['codAmbito']);
        $__obj->set_codOficina($_resultSet[0]['codOficina']);
        $__obj->set_perfil($_resultSet[0]['perfil']);
        $__obj->set_telefono($_resultSet[0]['telefono']);
        $__obj->set_interno($_resultSet[0]['interno']);
        $__obj->set_correoElectronico($_resultSet[0]['correoElectronico']);
        $__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
        $__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
		$__obj->set_nombreOficina($_resultSet[0]['nombreOficina']);
		$__obj->set_userIdReloj($_resultSet[0]['userIdReloj']);
		
	
        return $__obj;
		}
    }

		//funcion agregada
	function get_validaUsuario( $usuario,$clave ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM usuario WHERE usuario = '$usuario' AND clave = '$clave'");
		
					
		if(isset($_resultSet[0]['idUsuario'])<=0){
			 
			$valor = "No existe"; 
			return $valor;
			
		} else {
        $__usuarioObj = new usuario();
        // return the retrived from the database

        // create a new object
        $__obj = new Usuario();
        $__obj->set_idUsuario($_resultSet[0]['idUsuario']);
        $__obj->set_usuario($_resultSet[0]['usuario']);
        $__obj->set_idLegajo($_resultSet[0]['idLegajo']);
		$__obj->set_apellidoNombre($_resultSet[0]['apellidoNombre']);		
        $__obj->set_clave($_resultSet[0]['clave']);
        $__obj->set_vigente($_resultSet[0]['vigente']);
        $__obj->set_idGrupo($_resultSet[0]['idGrupo']);
        $__obj->set_codAmbito($_resultSet[0]['codAmbito']);
        $__obj->set_codOficina($_resultSet[0]['codOficina']);
        $__obj->set_perfil($_resultSet[0]['perfil']);
        $__obj->set_telefono($_resultSet[0]['telefono']);
        $__obj->set_interno($_resultSet[0]['interno']);
        $__obj->set_correoElectronico($_resultSet[0]['correoElectronico']);
        $__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
        $__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
	
        return $__obj;
		}
    }

} ?>