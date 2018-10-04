<?php class Usuario { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idUsuario;

    var $idPersona;

    var $nomusuario;

    var $apellidoNombre;

    var $clave;

    var $vigente;

    var $__modificoUsuario;

    var $__modificoFecha;

    var $clave1;



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


    function get_idPersona( ) {
        return $this->idPersona;
    }


    function get_nomusuario( ) {
        return $this->nomusuario;
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


    function get___modificoUsuario( ) {
        return $this->__modificoUsuario;
    }


    function get___modificoFecha( ) {
        return $this->__modificoFecha;
    }


    function get_clave1( ) {
        return $this->clave1;
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

    function set_idPersona( $idPersona ) {
        $this->idPersona = $idPersona;
    }

    function set_nomusuario( $nomusuario ) {
        $this->nomusuario = $nomusuario;
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

    function set___modificoUsuario( $__modificoUsuario ) {
        $this->__modificoUsuario = $__modificoUsuario;
    }

    function set___modificoFecha( $__modificoFecha ) {
        $this->__modificoFecha = $__modificoFecha;
    }

    function set_clave1( $clave1 ) {
        $this->clave1 = $clave1;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: usuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idUsuario
     * @param idPersona
     * @param nomusuario
     * @param apellidoNombre
     * @param clave
     * @param vigente
     * @param __modificoUsuario
     * @param __modificoFecha
     * @param clave1
     * @result void
     **/
    function createnew_usuario( $idUsuario, $idPersona, $nomusuario, $apellidoNombre, $clave, $vigente, $__modificoUsuario, $__modificoFecha, $clave1 ) {

        // items to be inserted in the database 
        $_obj = array($idUsuario,
$idPersona,
$nomusuario,
$apellidoNombre,
$clave,
$vigente,
$__modificoUsuario,
$__modificoFecha,
$clave1); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("tarjeta.usuario", $_obj);
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
    function get_usuario( $idUsuario ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM tarjeta.usuario WHERE idUsuario = '$idUsuario'");

        $__usuarioObj = new usuario();
        // return the retrived from the database

        // create a new object
        $__obj = new Usuario();
        if(isset($_resultSet[0]['idUsuario'])){;
                $__obj->set_idUsuario($_resultSet[0]['idUsuario']);
                $__obj->set_idPersona($_resultSet[0]['idPersona']);
                $__obj->set_nomusuario($_resultSet[0]['nomusuario']);
                $__obj->set_apellidoNombre($_resultSet[0]['apellidoNombre']);
                $__obj->set_clave($_resultSet[0]['clave']);
                $__obj->set_vigente($_resultSet[0]['vigente']);
                $__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
                $__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
                $__obj->set_clave1($_resultSet[0]['clave1']);
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
         $dbConn->update("tarjeta.usuario", "idUsuario = '$idUsuario'");
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
         $dbConn->delete("tarjeta.usuario", "idUsuario = '$idUsuario'");
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
              $sqlStatement = "SELECT * FROM tarjeta.usuario WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM tarjeta.usuario";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Usuario();

        if(isset($__rs['idUsuario'])){
                    $__newObj->set_idUsuario($__rs['idUsuario']);
                    $__newObj->set_idPersona($__rs['idPersona']);
                    $__newObj->set_nomusuario($__rs['nomusuario']);
                    $__newObj->set_apellidoNombre($__rs['apellidoNombre']);
                    $__newObj->set_clave($__rs['clave']);
                    $__newObj->set_vigente($__rs['vigente']);
                    $__newObj->set___modificoUsuario($__rs['__modificoUsuario']);
                    $__newObj->set___modificoFecha($__rs['__modificoFecha']);
                    $__newObj->set_clave1($__rs['clave1']);
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