<?php class Descuento { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $iddescuento;

    var $idtarjeta;

    var $descripcion;

    var $arancel;

    var $habilitado;

    var $_usuario;

    var $_fechamodifica;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Descuento(){
        // constructor de la clase (descuento)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_iddescuento( ) {
        return $this->iddescuento;
    }


    function get_idtarjeta( ) {
        return $this->idtarjeta;
    }


    function get_descripcion( ) {
        return $this->descripcion;
    }


    function get_arancel( ) {
        return $this->arancel;
    }


    function get_habilitado( ) {
        return $this->habilitado;
    }


    function get__usuario( ) {
        return $this->_usuario;
    }


    function get__fechamodifica( ) {
        return $this->_fechamodifica;
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


    function set_iddescuento( $iddescuento ) {
        $this->iddescuento = $iddescuento;
    }

    function set_idtarjeta( $idtarjeta ) {
        $this->idtarjeta = $idtarjeta;
    }

    function set_descripcion( $descripcion ) {
        $this->descripcion = $descripcion;
    }

    function set_arancel( $arancel ) {
        $this->arancel = $arancel;
    }

    function set_habilitado( $habilitado ) {
        $this->habilitado = $habilitado;
    }

    function set__usuario( $_usuario ) {
        $this->_usuario = $_usuario;
    }

    function set__fechamodifica( $_fechamodifica ) {
        $this->_fechamodifica = $_fechamodifica;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: descuento
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param iddescuento
     * @param idtarjeta
     * @param descripcion
     * @param arancel
     * @param habilitado
     * @param _usuario
     * @param _fechamodifica
     * @result void
     **/
    function createnew_descuento( $iddescuento, $idtarjeta, $descripcion, $arancel, $habilitado, $_usuario, $_fechamodifica ) {

        // items to be inserted in the database 
        $_obj = array($iddescuento,
$idtarjeta,
$descripcion,
$arancel,
$habilitado,
$_usuario,
$_fechamodifica); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.descuento", $_obj);
        return $this->get_idinsertdescuento();
    }

    /***
     * Retrived an existing record: descuento
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param iddescuento
     * @result new Descuento
     **/
    function get_descuento( $iddescuento ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.descuento WHERE iddescuento = '$iddescuento'");

        $__descuentoObj = new descuento();
        // return the retrived from the database

        // create a new object
        $__obj = new Descuento();
        if(isset($_resultSet[0]['iddescuento'])){;
                $__obj->set_iddescuento($_resultSet[0]['iddescuento']);
                $__obj->set_idtarjeta($_resultSet[0]['idtarjeta']);
                $__obj->set_descripcion($_resultSet[0]['descripcion']);
                $__obj->set_arancel($_resultSet[0]['arancel']);
                $__obj->set_habilitado($_resultSet[0]['habilitado']);
                $__obj->set__usuario($_resultSet[0]['_usuario']);
                $__obj->set__fechamodifica($_resultSet[0]['_fechamodifica']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: descuento
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param iddescuento
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_descuento( $iddescuento, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.descuento", "iddescuento = '$iddescuento'");
    }

    /***
     * Delete an existing record: descuento
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param iddescuento
     * @result void
     **/
    function delete_descuento( $iddescuento ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.descuento", "iddescuento = '$iddescuento'");
    }

    /***
     * Retrived list of objects base on a given parameters: descuento
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Descuento
     **/
    function list_descuento( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.descuento WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.descuento";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Descuento();

        if(isset($__rs['iddescuento'])){
                    $__newObj->set_iddescuento($__rs['iddescuento']);
                    $__newObj->set_idtarjeta($__rs['idtarjeta']);
                    $__newObj->set_descripcion($__rs['descripcion']);
                    $__newObj->set_arancel($__rs['arancel']);
                    $__newObj->set_habilitado($__rs['habilitado']);
                    $__newObj->set__usuario($__rs['_usuario']);
                    $__newObj->set__fechamodifica($__rs['_fechamodifica']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: descuento
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertdescuento( ) {

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