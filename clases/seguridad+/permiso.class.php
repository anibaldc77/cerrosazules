<?php class Permiso { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idPermiso;

    var $idUsuario;

    var $idObjeto;

    var $idTipoPermiso;

    var $accion;

    var $__modificoUsuario;

    var $__modificoFecha;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Permiso(){
        // constructor de la clase (permiso)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idPermiso( ) {
        return $this->idPermiso;
    }


    function get_idUsuario( ) {
        return $this->idUsuario;
    }


    function get_idObjeto( ) {
        return $this->idObjeto;
    }


    function get_idTipoPermiso( ) {
        return $this->idTipoPermiso;
    }


    function get_accion( ) {
        return $this->accion;
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


    function set_idPermiso( $idPermiso ) {
        $this->idPermiso = $idPermiso;
    }

    function set_idUsuario( $idUsuario ) {
        $this->idUsuario = $idUsuario;
    }

    function set_idObjeto( $idObjeto ) {
        $this->idObjeto = $idObjeto;
    }

    function set_idTipoPermiso( $idTipoPermiso ) {
        $this->idTipoPermiso = $idTipoPermiso;
    }

    function set_accion( $accion ) {
        $this->accion = $accion;
    }

    function set___modificoUsuario( $__modificoUsuario ) {
        $this->__modificoUsuario = $__modificoUsuario;
    }

    function set___modificoFecha( $__modificoFecha ) {
        $this->__modificoFecha = $__modificoFecha;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: permiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idPermiso
     * @param idUsuario
     * @param idObjeto
     * @param idTipoPermiso
     * @param accion
     * @param __modificoUsuario
     * @param __modificoFecha
     * @result void
     **/
    function createnew_permiso( $idPermiso, $idUsuario, $idObjeto, $idTipoPermiso, $accion, $__modificoUsuario, $__modificoFecha ) {

        // items to be inserted in the database 
        $_obj = array($idPermiso,
$idUsuario,
$idObjeto,
$idTipoPermiso,
$accion,
$__modificoUsuario,
$__modificoFecha); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("seguridad.permiso", $_obj);
        return $this->get_idinsertpermiso();
    }

    /***
     * Retrived an existing record: permiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idPermiso
     * @result new Permiso
     **/
    function get_permiso( $idPermiso ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM seguridad.permiso WHERE idPermiso = '$idPermiso'");

        $__permisoObj = new permiso();
        // return the retrived from the database

        // create a new object
        $__obj = new Permiso();
        if(isset($_resultSet[0]['idPermiso'])){;
                $__obj->set_idPermiso($_resultSet[0]['idPermiso']);
                $__obj->set_idUsuario($_resultSet[0]['idUsuario']);
                $__obj->set_idObjeto($_resultSet[0]['idObjeto']);
                $__obj->set_idTipoPermiso($_resultSet[0]['idTipoPermiso']);
                $__obj->set_accion($_resultSet[0]['accion']);
                $__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
                $__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: permiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
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
         $dbConn->update("seguridad.permiso", "idPermiso = '$idPermiso'");
    }

    /***
     * Delete an existing record: permiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idPermiso
     * @result void
     **/
    function delete_permiso( $idPermiso ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("seguridad.permiso", "idPermiso = '$idPermiso'");
    }

    /***
     * Retrived list of objects base on a given parameters: permiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Permiso
     **/
    function list_permiso( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM seguridad.permiso WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM seguridad.permiso";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Permiso();

        if(isset($__rs['idPermiso'])){
                    $__newObj->set_idPermiso($__rs['idPermiso']);
                    $__newObj->set_idUsuario($__rs['idUsuario']);
                    $__newObj->set_idObjeto($__rs['idObjeto']);
                    $__newObj->set_idTipoPermiso($__rs['idTipoPermiso']);
                    $__newObj->set_accion($__rs['accion']);
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
     * Busca Id Último Insert: permiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertpermiso( ) {

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