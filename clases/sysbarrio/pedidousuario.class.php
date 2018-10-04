<?php class Pedidousuario { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idpedidousuario;

    var $nombre;

    var $email;

    var $telefono;

    var $clave;

    var $ip;

    var $verificado;

    var $fechasolicitud;

    var $observaciones;

    var $check;

    var $_tiempo;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Pedidousuario(){
        // constructor de la clase (pedidousuario)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idpedidousuario( ) {
        return $this->idpedidousuario;
    }


    function get_nombre( ) {
        return $this->nombre;
    }


    function get_email( ) {
        return $this->email;
    }


    function get_telefono( ) {
        return $this->telefono;
    }


    function get_clave( ) {
        return $this->clave;
    }


    function get_ip( ) {
        return $this->ip;
    }


    function get_verificado( ) {
        return $this->verificado;
    }


    function get_fechasolicitud( ) {
        return $this->fechasolicitud;
    }


    function get_observaciones( ) {
        return $this->observaciones;
    }


    function get_check( ) {
        return $this->check;
    }


    function get__tiempo( ) {
        return $this->_tiempo;
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


    function set_idpedidousuario( $idpedidousuario ) {
        $this->idpedidousuario = $idpedidousuario;
    }

    function set_nombre( $nombre ) {
        $this->nombre = $nombre;
    }

    function set_email( $email ) {
        $this->email = $email;
    }

    function set_telefono( $telefono ) {
        $this->telefono = $telefono;
    }

    function set_clave( $clave ) {
        $this->clave = $clave;
    }

    function set_ip( $ip ) {
        $this->ip = $ip;
    }

    function set_verificado( $verificado ) {
        $this->verificado = $verificado;
    }

    function set_fechasolicitud( $fechasolicitud ) {
        $this->fechasolicitud = $fechasolicitud;
    }

    function set_observaciones( $observaciones ) {
        $this->observaciones = $observaciones;
    }

    function set_check( $check ) {
        $this->check = $check;
    }

    function set__tiempo( $_tiempo ) {
        $this->_tiempo = $_tiempo;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: pedidousuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpedidousuario
     * @param nombre
     * @param email
     * @param telefono
     * @param clave
     * @param ip
     * @param verificado
     * @param fechasolicitud
     * @param observaciones
     * @param check
     * @param _tiempo
     * @result void
     **/
    function createnew_pedidousuario( $idpedidousuario, $nombre, $email, $telefono, $clave, $ip, $verificado, $fechasolicitud, $observaciones, $check, $_tiempo ) {

        // items to be inserted in the database 
        $_obj = array($idpedidousuario,
$nombre,
$email,
$telefono,
$clave,
$ip,
$verificado,
$fechasolicitud,
$observaciones,
$check,
$_tiempo); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.pedidousuario", $_obj);
        return $this->get_idinsertpedidousuario();
    }

    /***
     * Retrived an existing record: pedidousuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpedidousuario
     * @result new Pedidousuario
     **/
    function get_pedidousuario( $idpedidousuario ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.pedidousuario WHERE idpedidousuario = '$idpedidousuario'");

        $__pedidousuarioObj = new pedidousuario();
        // return the retrived from the database

        // create a new object
        $__obj = new Pedidousuario();
        if(isset($_resultSet[0]['idpedidousuario'])){;
                $__obj->set_idpedidousuario($_resultSet[0]['idpedidousuario']);
                $__obj->set_nombre($_resultSet[0]['nombre']);
                $__obj->set_email($_resultSet[0]['email']);
                $__obj->set_telefono($_resultSet[0]['telefono']);
                $__obj->set_clave($_resultSet[0]['clave']);
                $__obj->set_ip($_resultSet[0]['ip']);
                $__obj->set_verificado($_resultSet[0]['verificado']);
                $__obj->set_fechasolicitud($_resultSet[0]['fechasolicitud']);
                $__obj->set_observaciones($_resultSet[0]['observaciones']);
                $__obj->set_check($_resultSet[0]['check']);
                $__obj->set__tiempo($_resultSet[0]['_tiempo']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: pedidousuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpedidousuario
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_pedidousuario( $idpedidousuario, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.pedidousuario", "idpedidousuario = '$idpedidousuario'");
    }

    /***
     * Delete an existing record: pedidousuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpedidousuario
     * @result void
     **/
    function delete_pedidousuario( $idpedidousuario ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.pedidousuario", "idpedidousuario = '$idpedidousuario'");
    }

    /***
     * Retrived list of objects base on a given parameters: pedidousuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Pedidousuario
     **/
    function list_pedidousuario( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.pedidousuario WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.pedidousuario";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Pedidousuario();

        if(isset($__rs['idpedidousuario'])){
                    $__newObj->set_idpedidousuario($__rs['idpedidousuario']);
                    $__newObj->set_nombre($__rs['nombre']);
                    $__newObj->set_email($__rs['email']);
                    $__newObj->set_telefono($__rs['telefono']);
                    $__newObj->set_clave($__rs['clave']);
                    $__newObj->set_ip($__rs['ip']);
                    $__newObj->set_verificado($__rs['verificado']);
                    $__newObj->set_fechasolicitud($__rs['fechasolicitud']);
                    $__newObj->set_observaciones($__rs['observaciones']);
                    $__newObj->set_check($__rs['check']);
                    $__newObj->set__tiempo($__rs['_tiempo']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: pedidousuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertpedidousuario( ) {

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