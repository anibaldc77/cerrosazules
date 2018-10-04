<?php 
class Permiso { 

    /***
     * DB Fields: idPermiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $idPermiso;

    /***
     * DB Fields: idUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $idUsuario;

    /***
     * DB Fields: idObjeto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $idObjeto;

    /***
     * DB Fields: idTipoPermiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $idTipoPermiso;

    /***
     * DB Fields: __modificoUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $__modificoUsuario;

    /***
     * DB Fields: __modificoFecha
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $__modificoFecha;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: idPermiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result idPermiso
     **/
    function get_idPermiso( ) {
        // returns the value of idPermiso
        return $this->idPermiso;
    }


    /***
     * Get value for field: idUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result idUsuario
     **/
    function get_idUsuario( ) {
        // returns the value of idUsuario
        return $this->idUsuario;
    }


    /***
     * Get value for field: idObjeto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result idObjeto
     **/
    function get_idObjeto( ) {
        // returns the value of idObjeto
        return $this->idObjeto;
    }


    /***
     * Get value for field: idTipoPermiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result idTipoPermiso
     **/
    function get_idTipoPermiso( ) {
        // returns the value of idTipoPermiso
        return $this->idTipoPermiso;
    }


    /***
     * Get value for field: __modificoUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result __modificoUsuario
     **/
    function get___modificoUsuario( ) {
        // returns the value of __modificoUsuario
        return $this->__modificoUsuario;
    }


    /***
     * Get value for field: __modificoFecha
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result __modificoFecha
     **/
    function get___modificoFecha( ) {
        // returns the value of __modificoFecha
        return $this->__modificoFecha;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: idPermiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idPermiso
     * @result void
     **/
    function set_idPermiso( $idPermiso ) {
        // sets the value of idPermiso
        $this->idPermiso = $idPermiso;
    }

    /***
     * Set value for field: idUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idUsuario
     * @result void
     **/
    function set_idUsuario( $idUsuario ) {
        // sets the value of idUsuario
        $this->idUsuario = $idUsuario;
    }

    /***
     * Set value for field: idObjeto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idObjeto
     * @result void
     **/
    function set_idObjeto( $idObjeto ) {
        // sets the value of idObjeto
        $this->idObjeto = $idObjeto;
    }

    /***
     * Set value for field: idTipoPermiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idTipoPermiso
     * @result void
     **/
    function set_idTipoPermiso( $idTipoPermiso ) {
        // sets the value of idTipoPermiso
        $this->idTipoPermiso = $idTipoPermiso;
    }

    /***
     * Set value for field: __modificoUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param __modificoUsuario
     * @result void
     **/
    function set___modificoUsuario( $__modificoUsuario ) {
        // sets the value of __modificoUsuario
        $this->__modificoUsuario = $__modificoUsuario;
    }

    /***
     * Set value for field: __modificoFecha
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param __modificoFecha
     * @result void
     **/
    function set___modificoFecha( $__modificoFecha ) {
        // sets the value of __modificoFecha
        $this->__modificoFecha = $__modificoFecha;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: permiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idPermiso
     * @param idUsuario
     * @param idObjeto
     * @param idTipoPermiso
     * @param __modificoUsuario
     * @param __modificoFecha
     * @result void
     **/
    function createnew_permiso( $idPermiso, $idUsuario, $idObjeto, $idTipoPermiso, $__modificoUsuario, $__modificoFecha ) {

        // items to be inserted in the database 
        $_obj = array($idPermiso,
                      $idUsuario,
                      $idObjeto,
                      $idTipoPermiso,
                      $__modificoUsuario,
                      $__modificoFecha); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("permiso", $_obj);
    }

    /***
     * Retrived an existing record: permiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idPermiso
     * @result new Permiso
     **/
    function get_permiso( $idPermiso ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM permiso WHERE idPermiso = '$idPermiso'");

        $__permisoObj = new permiso();
        // return the retrived from the database

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

    /***
     * Update an existing record: permiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idPermiso
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_permiso( $idPermiso, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("permiso", "idPermiso = '$idPermiso'");
    }

    /***
     * Delete an existing record: permiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idPermiso
     * @result void
     **/
    function delete_permiso( $idPermiso ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("permiso", "idPermiso = '$idPermiso'");
    }

    /***
     * Retrived list of objects base on a given parameters: permiso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Permiso
     **/
    function list_permiso( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM permiso WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM permiso";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Permiso();

            $__newObj->set_idPermiso($__rs['idPermiso']);
            $__newObj->set_idUsuario($__rs['idUsuario']);
            $__newObj->set_idObjeto($__rs['idObjeto']);
            $__newObj->set_idTipoPermiso($__rs['idTipoPermiso']);
            $__newObj->set___modificoUsuario($__rs['__modificoUsuario']);
            $__newObj->set___modificoFecha($__rs['__modificoFecha']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }
	
	
} ?>