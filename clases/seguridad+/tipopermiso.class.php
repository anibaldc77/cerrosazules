<?php class Tipopermiso { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idTipoPermiso;

    var $permiso;

    var $descripcionPermiso;

    var $idObjeto;

    var $vigente;

    var $tipoObjeto;

    var $pantalla;

    var $__modificoUsuario;

    var $__modificoFecha;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Tipopermiso(){
        // constructor de la clase (tipopermiso)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idTipoPermiso( ) {
        return $this->idTipoPermiso;
    }


    function get_permiso( ) {
        return $this->permiso;
    }


    function get_descripcionPermiso( ) {
        return $this->descripcionPermiso;
    }


    function get_idObjeto( ) {
        return $this->idObjeto;
    }


    function get_vigente( ) {
        return $this->vigente;
    }


    function get_tipoObjeto( ) {
        return $this->tipoObjeto;
    }


    function get_pantalla( ) {
        return $this->pantalla;
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


    function set_idTipoPermiso( $idTipoPermiso ) {
        $this->idTipoPermiso = $idTipoPermiso;
    }

    function set_permiso( $permiso ) {
        $this->permiso = $permiso;
    }

    function set_descripcionPermiso( $descripcionPermiso ) {
        $this->descripcionPermiso = $descripcionPermiso;
    }

    function set_idObjeto( $idObjeto ) {
        $this->idObjeto = $idObjeto;
    }

    function set_vigente( $vigente ) {
        $this->vigente = $vigente;
    }

    function set_tipoObjeto( $tipoObjeto ) {
        $this->tipoObjeto = $tipoObjeto;
    }

    function set_pantalla( $pantalla ) {
        $this->pantalla = $pantalla;
    }

    function set___modificoUsuario( $__modificoUsuario ) {
        $this->__modificoUsuario = $__modificoUsuario;
    }

    function set___modificoFecha( $__modificoFecha ) {
        $this->__modificoFecha = $__modificoFecha;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: tipopermiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idTipoPermiso
     * @param permiso
     * @param descripcionPermiso
     * @param idObjeto
     * @param vigente
     * @param tipoObjeto
     * @param pantalla
     * @param __modificoUsuario
     * @param __modificoFecha
     * @result void
     **/
    function createnew_tipopermiso( $idTipoPermiso, $permiso, $descripcionPermiso, $idObjeto, $vigente, $tipoObjeto, $pantalla, $__modificoUsuario, $__modificoFecha ) {

        // items to be inserted in the database 
        $_obj = array($idTipoPermiso,
$permiso,
$descripcionPermiso,
$idObjeto,
$vigente,
$tipoObjeto,
$pantalla,
$__modificoUsuario,
$__modificoFecha); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("seguridad.tipopermiso", $_obj);
        return $this->get_idinserttipopermiso();
    }

    /***
     * Retrived an existing record: tipopermiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idTipoPermiso
     * @result new Tipopermiso
     **/
    function get_tipopermiso( $idTipoPermiso ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM seguridad.tipopermiso WHERE idTipoPermiso = '$idTipoPermiso'");

        $__tipopermisoObj = new tipopermiso();
        // return the retrived from the database

        // create a new object
        $__obj = new Tipopermiso();
        if(isset($_resultSet[0]['idTipoPermiso'])){;
                $__obj->set_idTipoPermiso($_resultSet[0]['idTipoPermiso']);
                $__obj->set_permiso($_resultSet[0]['permiso']);
                $__obj->set_descripcionPermiso($_resultSet[0]['descripcionPermiso']);
                $__obj->set_idObjeto($_resultSet[0]['idObjeto']);
                $__obj->set_vigente($_resultSet[0]['vigente']);
                $__obj->set_tipoObjeto($_resultSet[0]['tipoObjeto']);
                $__obj->set_pantalla($_resultSet[0]['pantalla']);
                $__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
                $__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: tipopermiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idTipoPermiso
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_tipopermiso( $idTipoPermiso, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("seguridad.tipopermiso", "idTipoPermiso = '$idTipoPermiso'");
    }

    /***
     * Delete an existing record: tipopermiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idTipoPermiso
     * @result void
     **/
    function delete_tipopermiso( $idTipoPermiso ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("seguridad.tipopermiso", "idTipoPermiso = '$idTipoPermiso'");
    }

    /***
     * Retrived list of objects base on a given parameters: tipopermiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Tipopermiso
     **/
    function list_tipopermiso( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM seguridad.tipopermiso WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM seguridad.tipopermiso";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Tipopermiso();

        if(isset($__rs['idTipoPermiso'])){
                    $__newObj->set_idTipoPermiso($__rs['idTipoPermiso']);
                    $__newObj->set_permiso($__rs['permiso']);
                    $__newObj->set_descripcionPermiso($__rs['descripcionPermiso']);
                    $__newObj->set_idObjeto($__rs['idObjeto']);
                    $__newObj->set_vigente($__rs['vigente']);
                    $__newObj->set_tipoObjeto($__rs['tipoObjeto']);
                    $__newObj->set_pantalla($__rs['pantalla']);
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
     * Busca Id Último Insert: tipopermiso
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinserttipopermiso( ) {

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