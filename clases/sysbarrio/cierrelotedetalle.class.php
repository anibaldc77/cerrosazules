<?php class Cierrelotedetalle { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idcierrelotedetalle;

    var $idcierrelote;

    var $idtarjeta;

    var $idplan;

    var $fechacierre;

    var $cantidad;

    var $monto;

    var $cuotas;

    var $fechacobro;

    var $arancel;

    var $interes;

    var $costofinanciero;

    var $retencion;

    var $otro;

    var $adicional;

    var $_usuario;

    var $_fechamodifica;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Cierrelotedetalle(){
        // constructor de la clase (cierrelotedetalle)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idcierrelotedetalle( ) {
        return $this->idcierrelotedetalle;
    }


    function get_idcierrelote( ) {
        return $this->idcierrelote;
    }


    function get_idtarjeta( ) {
        return $this->idtarjeta;
    }


    function get_idplan( ) {
        return $this->idplan;
    }


    function get_fechacierre( ) {
        return $this->fechacierre;
    }


    function get_cantidad( ) {
        return $this->cantidad;
    }


    function get_monto( ) {
        return $this->monto;
    }


    function get_cuotas( ) {
        return $this->cuotas;
    }


    function get_fechacobro( ) {
        return $this->fechacobro;
    }


    function get_arancel( ) {
        return $this->arancel;
    }


    function get_interes( ) {
        return $this->interes;
    }


    function get_costofinanciero( ) {
        return $this->costofinanciero;
    }


    function get_retencion( ) {
        return $this->retencion;
    }


    function get_otro( ) {
        return $this->otro;
    }


    function get_adicional( ) {
        return $this->adicional;
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


    function set_idcierrelotedetalle( $idcierrelotedetalle ) {
        $this->idcierrelotedetalle = $idcierrelotedetalle;
    }

    function set_idcierrelote( $idcierrelote ) {
        $this->idcierrelote = $idcierrelote;
    }

    function set_idtarjeta( $idtarjeta ) {
        $this->idtarjeta = $idtarjeta;
    }

    function set_idplan( $idplan ) {
        $this->idplan = $idplan;
    }

    function set_fechacierre( $fechacierre ) {
        $this->fechacierre = $fechacierre;
    }

    function set_cantidad( $cantidad ) {
        $this->cantidad = $cantidad;
    }

    function set_monto( $monto ) {
        $this->monto = $monto;
    }

    function set_cuotas( $cuotas ) {
        $this->cuotas = $cuotas;
    }

    function set_fechacobro( $fechacobro ) {
        $this->fechacobro = $fechacobro;
    }

    function set_arancel( $arancel ) {
        $this->arancel = $arancel;
    }

    function set_interes( $interes ) {
        $this->interes = $interes;
    }

    function set_costofinanciero( $costofinanciero ) {
        $this->costofinanciero = $costofinanciero;
    }

    function set_retencion( $retencion ) {
        $this->retencion = $retencion;
    }

    function set_otro( $otro ) {
        $this->otro = $otro;
    }

    function set_adicional( $adicional ) {
        $this->adicional = $adicional;
    }

    function set__usuario( $_usuario ) {
        $this->_usuario = $_usuario;
    }

    function set__fechamodifica( $_fechamodifica ) {
        $this->_fechamodifica = $_fechamodifica;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: cierrelotedetalle
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelotedetalle
     * @param idcierrelote
     * @param idtarjeta
     * @param idplan
     * @param fechacierre
     * @param cantidad
     * @param monto
     * @param cuotas
     * @param fechacobro
     * @param arancel
     * @param interes
     * @param costofinanciero
     * @param retencion
     * @param otro
     * @param adicional
     * @param _usuario
     * @param _fechamodifica
     * @result void
     **/
    function createnew_cierrelotedetalle( $idcierrelotedetalle, $idcierrelote, $idtarjeta, $idplan, $fechacierre, $cantidad, $monto, $cuotas, $fechacobro, $arancel, $interes, $costofinanciero, $retencion, $otro, $adicional, $_usuario, $_fechamodifica ) {

        // items to be inserted in the database 
        $_obj = array($idcierrelotedetalle,
$idcierrelote,
$idtarjeta,
$idplan,
$fechacierre,
$cantidad,
$monto,
$cuotas,
$fechacobro,
$arancel,
$interes,
$costofinanciero,
$retencion,
$otro,
$adicional,
$_usuario,
$_fechamodifica); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.cierrelotedetalle", $_obj);
        return $this->get_idinsertcierrelotedetalle();
    }

    /***
     * Retrived an existing record: cierrelotedetalle
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelotedetalle
     * @result new Cierrelotedetalle
     **/
    function get_cierrelotedetalle( $idcierrelotedetalle ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.cierrelotedetalle WHERE idcierrelotedetalle = '$idcierrelotedetalle'");

        $__cierrelotedetalleObj = new cierrelotedetalle();
        // return the retrived from the database

        // create a new object
        $__obj = new Cierrelotedetalle();
        if(isset($_resultSet[0]['idcierrelotedetalle'])){;
                $__obj->set_idcierrelotedetalle($_resultSet[0]['idcierrelotedetalle']);
                $__obj->set_idcierrelote($_resultSet[0]['idcierrelote']);
                $__obj->set_idtarjeta($_resultSet[0]['idtarjeta']);
                $__obj->set_idplan($_resultSet[0]['idplan']);
                $__obj->set_fechacierre($_resultSet[0]['fechacierre']);
                $__obj->set_cantidad($_resultSet[0]['cantidad']);
                $__obj->set_monto($_resultSet[0]['monto']);
                $__obj->set_cuotas($_resultSet[0]['cuotas']);
                $__obj->set_fechacobro($_resultSet[0]['fechacobro']);
                $__obj->set_arancel($_resultSet[0]['arancel']);
                $__obj->set_interes($_resultSet[0]['interes']);
                $__obj->set_costofinanciero($_resultSet[0]['costofinanciero']);
                $__obj->set_retencion($_resultSet[0]['retencion']);
                $__obj->set_otro($_resultSet[0]['otro']);
                $__obj->set_adicional($_resultSet[0]['adicional']);
                $__obj->set__usuario($_resultSet[0]['_usuario']);
                $__obj->set__fechamodifica($_resultSet[0]['_fechamodifica']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: cierrelotedetalle
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelotedetalle
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_cierrelotedetalle( $idcierrelotedetalle, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.cierrelotedetalle", "idcierrelotedetalle = '$idcierrelotedetalle'");
    }

    /***
     * Delete an existing record: cierrelotedetalle
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idcierrelotedetalle
     * @result void
     **/
    function delete_cierrelotedetalle( $idcierrelotedetalle ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.cierrelotedetalle", "idcierrelotedetalle = '$idcierrelotedetalle'");
    }

    /***
     * Retrived list of objects base on a given parameters: cierrelotedetalle
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Cierrelotedetalle
     **/
    function list_cierrelotedetalle( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.cierrelotedetalle WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.cierrelotedetalle";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Cierrelotedetalle();

        if(isset($__rs['idcierrelotedetalle'])){
                    $__newObj->set_idcierrelotedetalle($__rs['idcierrelotedetalle']);
                    $__newObj->set_idcierrelote($__rs['idcierrelote']);
                    $__newObj->set_idtarjeta($__rs['idtarjeta']);
                    $__newObj->set_idplan($__rs['idplan']);
                    $__newObj->set_fechacierre($__rs['fechacierre']);
                    $__newObj->set_cantidad($__rs['cantidad']);
                    $__newObj->set_monto($__rs['monto']);
                    $__newObj->set_cuotas($__rs['cuotas']);
                    $__newObj->set_fechacobro($__rs['fechacobro']);
                    $__newObj->set_arancel($__rs['arancel']);
                    $__newObj->set_interes($__rs['interes']);
                    $__newObj->set_costofinanciero($__rs['costofinanciero']);
                    $__newObj->set_retencion($__rs['retencion']);
                    $__newObj->set_otro($__rs['otro']);
                    $__newObj->set_adicional($__rs['adicional']);
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
     * Busca Id Último Insert: cierrelotedetalle
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertcierrelotedetalle( ) {

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