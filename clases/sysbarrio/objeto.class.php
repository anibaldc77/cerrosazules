<?php class Objeto { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idObjeto;

    var $objeto;

    var $habilitado;

    var $__modificoUsuario;

    var $__modificoFecha;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Objeto(){
        // constructor de la clase (objeto)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idObjeto( ) {
        return $this->idObjeto;
    }


    function get_objeto( ) {
        return $this->objeto;
    }


    function get_habilitado( ) {
        return $this->habilitado;
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


    function set_idObjeto( $idObjeto ) {
        $this->idObjeto = $idObjeto;
    }

    function set_objeto( $objeto ) {
        $this->objeto = $objeto;
    }

    function set_habilitado( $habilitado ) {
        $this->habilitado = $habilitado;
    }

    function set___modificoUsuario( $__modificoUsuario ) {
        $this->__modificoUsuario = $__modificoUsuario;
    }

    function set___modificoFecha( $__modificoFecha ) {
        $this->__modificoFecha = $__modificoFecha;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: objeto
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idObjeto
     * @param objeto
     * @param habilitado
     * @param __modificoUsuario
     * @param __modificoFecha
     * @result void
     **/
    function createnew_objeto( $idObjeto, $objeto, $habilitado, $__modificoUsuario, $__modificoFecha ) {

        // items to be inserted in the database 
        $_obj = array($idObjeto,
$objeto,
$habilitado,
$__modificoUsuario,
$__modificoFecha); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.objeto", $_obj);
        return $this->get_idinsertobjeto();
    }

    /***
     * Retrived an existing record: objeto
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idObjeto
     * @result new Objeto
     **/
    function get_objeto( $idObjeto ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.objeto WHERE idObjeto = '$idObjeto'");

        $__objetoObj = new objeto();
        // return the retrived from the database

        // create a new object
        $__obj = new Objeto();
        if(isset($_resultSet[0]['idObjeto'])){;
                $__obj->set_idObjeto($_resultSet[0]['idObjeto']);
                $__obj->set_objeto($_resultSet[0]['objeto']);
                $__obj->set_habilitado($_resultSet[0]['habilitado']);
                $__obj->set___modificoUsuario($_resultSet[0]['__modificoUsuario']);
                $__obj->set___modificoFecha($_resultSet[0]['__modificoFecha']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: objeto
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idObjeto
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_objeto( $idObjeto, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.objeto", "idObjeto = '$idObjeto'");
    }

    /***
     * Delete an existing record: objeto
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idObjeto
     * @result void
     **/
    function delete_objeto( $idObjeto ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.objeto", "idObjeto = '$idObjeto'");
    }

    /***
     * Retrived list of objects base on a given parameters: objeto
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Objeto
     **/
    function list_objeto( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.objeto WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.objeto";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Objeto();

        if(isset($__rs['idObjeto'])){
                    $__newObj->set_idObjeto($__rs['idObjeto']);
                    $__newObj->set_objeto($__rs['objeto']);
                    $__newObj->set_habilitado($__rs['habilitado']);
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
     * Busca Id Último Insert: objeto
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertobjeto( ) {

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