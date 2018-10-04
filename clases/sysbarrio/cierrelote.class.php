<?php class Cierrelote { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idcierrelote;

    var $idtipo;

    var $idcomercio;

    var $fechacomprobante;

    var $nrolote;

    var $terminal;

    var $_usuario;

    var $_fechamodifica;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Cierrelote(){
        // constructor de la clase (cierrelote)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idcierrelote( ) {
        return $this->idcierrelote;
    }


    function get_idtipo( ) {
        return $this->idtipo;
    }


    function get_idcomercio( ) {
        return $this->idcomercio;
    }


    function get_fechacomprobante( ) {
        return $this->fechacomprobante;
    }


    function get_nrolote( ) {
        return $this->nrolote;
    }


    function get_terminal( ) {
        return $this->terminal;
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


    function set_idcierrelote( $idcierrelote ) {
        $this->idcierrelote = $idcierrelote;
    }

    function set_idtipo( $idtipo ) {
        $this->idtipo = $idtipo;
    }

    function set_idcomercio( $idcomercio ) {
        $this->idcomercio = $idcomercio;
    }

    function set_fechacomprobante( $fechacomprobante ) {
        $this->fechacomprobante = $fechacomprobante;
    }

    function set_nrolote( $nrolote ) {
        $this->nrolote = $nrolote;
    }

    function set_terminal( $terminal ) {
        $this->terminal = $terminal;
    }

    function set__usuario( $_usuario ) {
        $this->_usuario = $_usuario;
    }

    function set__fechamodifica( $_fechamodifica ) {
        $this->_fechamodifica = $_fechamodifica;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: cierrelote
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelote
     * @param idtipo
     * @param idcomercio
     * @param fechacomprobante
     * @param nrolote
     * @param terminal
     * @param _usuario
     * @param _fechamodifica
     * @result void
     **/
    function createnew_cierrelote( $idcierrelote, $idtipo, $idcomercio, $fechacomprobante, $nrolote, $terminal, $_usuario, $_fechamodifica ) {

        // items to be inserted in the database 
        $_obj = array($idcierrelote,
$idtipo,
$idcomercio,
$fechacomprobante,
$nrolote,
$terminal,
$_usuario,
$_fechamodifica); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.cierrelote", $_obj);
        return $this->get_idinsertcierrelote();
    }

    /***
     * Retrived an existing record: cierrelote
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelote
     * @result new Cierrelote
     **/
    function get_cierrelote( $idcierrelote ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.cierrelote WHERE idcierrelote = '$idcierrelote'");

        $__cierreloteObj = new cierrelote();
        // return the retrived from the database

        // create a new object
        $__obj = new Cierrelote();
        if(isset($_resultSet[0]['idcierrelote'])){;
                $__obj->set_idcierrelote($_resultSet[0]['idcierrelote']);
                $__obj->set_idtipo($_resultSet[0]['idtipo']);
                $__obj->set_idcomercio($_resultSet[0]['idcomercio']);
                $__obj->set_fechacomprobante($_resultSet[0]['fechacomprobante']);
                $__obj->set_nrolote($_resultSet[0]['nrolote']);
                $__obj->set_terminal($_resultSet[0]['terminal']);
                $__obj->set__usuario($_resultSet[0]['_usuario']);
                $__obj->set__fechamodifica($_resultSet[0]['_fechamodifica']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: cierrelote
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelote
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_cierrelote( $idcierrelote, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.cierrelote", "idcierrelote = '$idcierrelote'");
    }

    /***
     * Delete an existing record: cierrelote
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelote
     * @result void
     **/
    function delete_cierrelote( $idcierrelote ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.cierrelote", "idcierrelote = '$idcierrelote'");
    }

    /***
     * Retrived list of objects base on a given parameters: cierrelote
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Cierrelote
     **/
    function list_cierrelote( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.cierrelote WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.cierrelote";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Cierrelote();

        if(isset($__rs['idcierrelote'])){
                    $__newObj->set_idcierrelote($__rs['idcierrelote']);
                    $__newObj->set_idtipo($__rs['idtipo']);
                    $__newObj->set_idcomercio($__rs['idcomercio']);
                    $__newObj->set_fechacomprobante($__rs['fechacomprobante']);
                    $__newObj->set_nrolote($__rs['nrolote']);
                    $__newObj->set_terminal($__rs['terminal']);
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
     * Busca Id Último Insert: cierrelote
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertcierrelote( ) {

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