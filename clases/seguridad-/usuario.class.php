<?php class Usuario { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idUsuario;

    var $usuario;

    var $idLegajo;

    var $apellidoNombre;

    var $clave;

    var $vigente;

    var $idGrupo;

    var $codAmbito;

    var $codOficina;

    var $perfil;

    var $telefono;

    var $interno;

    var $correoElectronico;

    var $__modificoUsuario;

    var $__modificoFecha;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Usuario(){
        // constructor de la clase (usuario)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idUsuario( ) {
        return $this->idUsuario;
    }


    function get_usuario( ) {
        return $this->usuario;
    }


    function get_idLegajo( ) {
        return $this->idLegajo;
    }


    function get_apellidoNombre( ) {
        return $this->apellidoNombre;
    }


    function get_clave( ) {
        return $this->clave;
    }


    function get_vigente( ) {
        return $this->vigente;
    }


    function get_idGrupo( ) {
        return $this->idGrupo;
    }


    function get_codAmbito( ) {
        return $this->codAmbito;
    }


    function get_codOficina( ) {
        return $this->codOficina;
    }


    function get_perfil( ) {
        return $this->perfil;
    }


    function get_telefono( ) {
        return $this->telefono;
    }


    function get_interno( ) {
        return $this->interno;
    }


    function get_correoElectronico( ) {
        return $this->correoElectronico;
    }


    function get___modificoUsuario( ) {
        return $this->__modificoUsuario;
    }


    function get___modificoFecha( ) {
        return $this->__modificoFecha;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/


    function set_idUsuario( $idUsuario ) {
        $this->idUsuario = $idUsuario;
    }

    function set_usuario( $usuario ) {
        $this->usuario = $usuario;
    }

    function set_idLegajo( $idLegajo ) {
        $this->idLegajo = $idLegajo;
    }

    function set_apellidoNombre( $apellidoNombre ) {
        $this->apellidoNombre = $apellidoNombre;
    }

    function set_clave( $clave ) {
        $this->clave = $clave;
    }

    function set_vigente( $vigente ) {
        $this->vigente = $vigente;
    }

    function set_idGrupo( $idGrupo ) {
        $this->idGrupo = $idGrupo;
    }

    function set_codAmbito( $codAmbito ) {
        $this->codAmbito = $codAmbito;
    }

    function set_codOficina( $codOficina ) {
        $this->codOficina = $codOficina;
    }

    function set_perfil( $perfil ) {
        $this->perfil = $perfil;
    }

    function set_telefono( $telefono ) {
        $this->telefono = $telefono;
    }

    function set_interno( $interno ) {
        $this->interno = $interno;
    }

    function set_correoElectronico( $correoElectronico ) {
        $this->correoElectronico = $correoElectronico;
    }

    function set___modificoUsuario( $__modificoUsuario ) {
        $this->__modificoUsuario = $__modificoUsuario;
    }

    function set___modificoFecha( $__modificoFecha ) {
        $this->__modificoFecha = $__modificoFecha;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idUsuario
     * @param usuario
     * @param idLegajo
     * @param apellidoNombre
     * @param clave
     * @param vigente
     * @param idGrupo
     * @param codAmbito
     * @param codOficina
     * @param perfil
     * @param telefono
     * @param interno
     * @param correoElectronico
     * @param __modificoUsuario
     * @param __modificoFecha
     * @result void
     **/
    function createnew_usuario( $idUsuario, $usuario, $idLegajo, $apellidoNombre, $clave, $vigente, $idGrupo, $codAmbito, $codOficina, $perfil, $telefono, $interno, $correoElectronico, $__modificoUsuario, $__modificoFecha ) {

        // items to be inserted in the database 
        $_obj = array($idUsuario,
$usuario,
$idLegajo,
$apellidoNombre,
$clave,
$vigente,
$idGrupo,
$codAmbito,
$codOficina,
$perfil,
$telefono,
$interno,
$correoElectronico,
$__modificoUsuario,
$__modificoFecha); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("seguridad.usuario", $_obj);
        return $this->get_idinsertusuario();
    }

    /***
     * Retrived an existing record: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idUsuario
     * @result new Usuario
     **/
    function get_usuarios( $idUsuario ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM seguridad.usuario WHERE idUsuario = '$idUsuario'");

        $__usuarioObj = new usuario();
        // return the retrived from the database

        // create a new object
        $__obj = new Usuario();
        if(isset($_resultSet[0]['idUsuario'])){;
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
        }


        return $__obj;
    }

    /***
     * Update an existing record: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idUsuario
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_usuario( $idUsuario, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("seguridad.usuario", "idUsuario = '$idUsuario'");
    }

    /***
     * Delete an existing record: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idUsuario
     * @result void
     **/
    function delete_usuario( $idUsuario ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("seguridad.usuario", "idUsuario = '$idUsuario'");
    }

    /***
     * Retrived list of objects base on a given parameters: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Usuario
     **/
    function list_usuario( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM seguridad.usuario WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM seguridad.usuario";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Usuario();

        if(isset($__rs['idUsuario'])){
                    $__newObj->set_idUsuario($__rs['idUsuario']);
                    $__newObj->set_usuario($__rs['usuario']);
                    $__newObj->set_idLegajo($__rs['idLegajo']);
                    $__newObj->set_apellidoNombre($__rs['apellidoNombre']);
                    $__newObj->set_clave($__rs['clave']);
                    $__newObj->set_vigente($__rs['vigente']);
                    $__newObj->set_idGrupo($__rs['idGrupo']);
                    $__newObj->set_codAmbito($__rs['codAmbito']);
                    $__newObj->set_codOficina($__rs['codOficina']);
                    $__newObj->set_perfil($__rs['perfil']);
                    $__newObj->set_telefono($__rs['telefono']);
                    $__newObj->set_interno($__rs['interno']);
                    $__newObj->set_correoElectronico($__rs['correoElectronico']);
                    $__newObj->set___modificoUsuario($__rs['__modificoUsuario']);
                    $__newObj->set___modificoFecha($__rs['__modificoFecha']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertusuario( ) {

         // consulta a la base 
         $rs = mysql_query('SELECT @@identity AS id');

         // performs update in the database
         if ($row = mysql_fetch_row($rs)) { 
               $id = trim($row[0]);
         }

         // perform update operation
         return $id;
    }

} ?>