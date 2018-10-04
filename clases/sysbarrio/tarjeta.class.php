<?php class Tarjeta { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idtarjeta;

    var $descripcion;

    var $habilitada;

    var $dpagoncuotas;

    var $dpago1cuota;

    var $hcambiodianacional;

    var $hcambiodiainternacional;

    var $_usuario;

    var $_fechamodifica;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Tarjeta(){
        // constructor de la clase (tarjeta)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idtarjeta( ) {
        return $this->idtarjeta;
    }


    function get_descripcion( ) {
        return $this->descripcion;
    }


    function get_habilitada( ) {
        return $this->habilitada;
    }


    function get_dpagoncuotas( ) {
        return $this->dpagoncuotas;
    }


    function get_dpago1cuota( ) {
        return $this->dpago1cuota;
    }


    function get_hcambiodianacional( ) {
        return $this->hcambiodianacional;
    }


    function get_hcambiodiainternacional( ) {
        return $this->hcambiodiainternacional;
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


    function set_idtarjeta( $idtarjeta ) {
        $this->idtarjeta = $idtarjeta;
    }

    function set_descripcion( $descripcion ) {
        $this->descripcion = $descripcion;
    }

    function set_habilitada( $habilitada ) {
        $this->habilitada = $habilitada;
    }

    function set_dpagoncuotas( $dpagoncuotas ) {
        $this->dpagoncuotas = $dpagoncuotas;
    }

    function set_dpago1cuota( $dpago1cuota ) {
        $this->dpago1cuota = $dpago1cuota;
    }

    function set_hcambiodianacional( $hcambiodianacional ) {
        $this->hcambiodianacional = $hcambiodianacional;
    }

    function set_hcambiodiainternacional( $hcambiodiainternacional ) {
        $this->hcambiodiainternacional = $hcambiodiainternacional;
    }

    function set__usuario( $_usuario ) {
        $this->_usuario = $_usuario;
    }

    function set__fechamodifica( $_fechamodifica ) {
        $this->_fechamodifica = $_fechamodifica;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: tarjeta
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idtarjeta
     * @param descripcion
     * @param habilitada
     * @param dpagoncuotas
     * @param dpago1cuota
     * @param hcambiodianacional
     * @param hcambiodiainternacional
     * @param _usuario
     * @param _fechamodifica
     * @result void
     **/
    function createnew_tarjeta( $idtarjeta, $descripcion, $habilitada, $dpagoncuotas, $dpago1cuota, $hcambiodianacional, $hcambiodiainternacional, $_usuario, $_fechamodifica ) {

        // items to be inserted in the database 
        $_obj = array($idtarjeta,
$descripcion,
$habilitada,
$dpagoncuotas,
$dpago1cuota,
$hcambiodianacional,
$hcambiodiainternacional,
$_usuario,
$_fechamodifica); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.tarjeta", $_obj);
        return $this->get_idinserttarjeta();
    }

    /***
     * Retrived an existing record: tarjeta
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idtarjeta
     * @result new Tarjeta
     **/
    function get_tarjeta( $idtarjeta ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.tarjeta WHERE idtarjeta = '$idtarjeta'");

        $__tarjetaObj = new tarjeta();
        // return the retrived from the database

        // create a new object
        $__obj = new Tarjeta();
        if(isset($_resultSet[0]['idtarjeta'])){;
                $__obj->set_idtarjeta($_resultSet[0]['idtarjeta']);
                $__obj->set_descripcion($_resultSet[0]['descripcion']);
                $__obj->set_habilitada($_resultSet[0]['habilitada']);
                $__obj->set_dpagoncuotas($_resultSet[0]['dpagoncuotas']);
                $__obj->set_dpago1cuota($_resultSet[0]['dpago1cuota']);
                $__obj->set_hcambiodianacional($_resultSet[0]['hcambiodianacional']);
                $__obj->set_hcambiodiainternacional($_resultSet[0]['hcambiodiainternacional']);
                $__obj->set__usuario($_resultSet[0]['_usuario']);
                $__obj->set__fechamodifica($_resultSet[0]['_fechamodifica']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: tarjeta
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idtarjeta
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_tarjeta( $idtarjeta, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.tarjeta", "idtarjeta = '$idtarjeta'");
    }

    /***
     * Delete an existing record: tarjeta
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idtarjeta
     * @result void
     **/
    function delete_tarjeta( $idtarjeta ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.tarjeta", "idtarjeta = '$idtarjeta'");
    }

    /***
     * Retrived list of objects base on a given parameters: tarjeta
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Tarjeta
     **/
    function list_tarjeta( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.tarjeta WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.tarjeta";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Tarjeta();

        if(isset($__rs['idtarjeta'])){
                    $__newObj->set_idtarjeta($__rs['idtarjeta']);
                    $__newObj->set_descripcion($__rs['descripcion']);
                    $__newObj->set_habilitada($__rs['habilitada']);
                    $__newObj->set_dpagoncuotas($__rs['dpagoncuotas']);
                    $__newObj->set_dpago1cuota($__rs['dpago1cuota']);
                    $__newObj->set_hcambiodianacional($__rs['hcambiodianacional']);
                    $__newObj->set_hcambiodiainternacional($__rs['hcambiodiainternacional']);
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
     * Busca Id Último Insert: tarjeta
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinserttarjeta( ) {

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