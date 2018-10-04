<?php class Recuperaclave { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idrecuperaclave;

    var $nombre;

    var $usuario;

    var $email;

    var $telefono;

    var $ip;

    var $check;

    var $verificado;

    var $fechasolicitud;

    var $observaciones;

    var $_tiempo;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Recuperaclave(){
        // constructor de la clase (recuperaclave)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idrecuperaclave( ) {
        return $this->idrecuperaclave;
    }


    function get_nombre( ) {
        return $this->nombre;
    }


    function get_usuario( ) {
        return $this->usuario;
    }


    function get_email( ) {
        return $this->email;
    }


    function get_telefono( ) {
        return $this->telefono;
    }


    function get_ip( ) {
        return $this->ip;
    }


    function get_check( ) {
        return $this->check;
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


    function set_idrecuperaclave( $idrecuperaclave ) {
        $this->idrecuperaclave = $idrecuperaclave;
    }

    function set_nombre( $nombre ) {
        $this->nombre = $nombre;
    }

    function set_usuario( $usuario ) {
        $this->usuario = $usuario;
    }

    function set_email( $email ) {
        $this->email = $email;
    }

    function set_telefono( $telefono ) {
        $this->telefono = $telefono;
    }

    function set_ip( $ip ) {
        $this->ip = $ip;
    }

    function set_check( $check ) {
        $this->check = $check;
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

    function set__tiempo( $_tiempo ) {
        $this->_tiempo = $_tiempo;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: recuperaclave
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idrecuperaclave
     * @param nombre
     * @param usuario
     * @param email
     * @param telefono
     * @param ip
     * @param check
     * @param verificado
     * @param fechasolicitud
     * @param observaciones
     * @param _tiempo
     * @result void
     **/
    function createnew_recuperaclave( $idrecuperaclave, $nombre, $usuario, $email, $telefono, $ip, $check, $verificado, $fechasolicitud, $observaciones, $_tiempo ) {

        // items to be inserted in the database 
        $_obj = array($idrecuperaclave,
$nombre,
$usuario,
$email,
$telefono,
$ip,
$check,
$verificado,
$fechasolicitud,
$observaciones,
$_tiempo); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("seguridad.recuperaclave", $_obj);
        return $this->get_idinsertrecuperaclave();
    }

    /***
     * Retrived an existing record: recuperaclave
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idrecuperaclave
     * @result new Recuperaclave
     **/
    function get_recuperaclave( $idrecuperaclave ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM seguridad.recuperaclave WHERE idrecuperaclave = '$idrecuperaclave'");

        $__recuperaclaveObj = new recuperaclave();
        // return the retrived from the database

        // create a new object
        $__obj = new Recuperaclave();
        if(isset($_resultSet[0]['idrecuperaclave'])){;
                $__obj->set_idrecuperaclave($_resultSet[0]['idrecuperaclave']);
                $__obj->set_nombre($_resultSet[0]['nombre']);
                $__obj->set_usuario($_resultSet[0]['usuario']);
                $__obj->set_email($_resultSet[0]['email']);
                $__obj->set_telefono($_resultSet[0]['telefono']);
                $__obj->set_ip($_resultSet[0]['ip']);
                $__obj->set_check($_resultSet[0]['check']);
                $__obj->set_verificado($_resultSet[0]['verificado']);
                $__obj->set_fechasolicitud($_resultSet[0]['fechasolicitud']);
                $__obj->set_observaciones($_resultSet[0]['observaciones']);
                $__obj->set__tiempo($_resultSet[0]['_tiempo']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: recuperaclave
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idrecuperaclave
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_recuperaclave( $idrecuperaclave, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("seguridad.recuperaclave", "idrecuperaclave = '$idrecuperaclave'");
    }

    /***
     * Delete an existing record: recuperaclave
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idrecuperaclave
     * @result void
     **/
    function delete_recuperaclave( $idrecuperaclave ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("seguridad.recuperaclave", "idrecuperaclave = '$idrecuperaclave'");
    }

    /***
     * Retrived list of objects base on a given parameters: recuperaclave
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Recuperaclave
     **/
    function list_recuperaclave( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM seguridad.recuperaclave WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM seguridad.recuperaclave";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Recuperaclave();

        if(isset($__rs['idrecuperaclave'])){
                    $__newObj->set_idrecuperaclave($__rs['idrecuperaclave']);
                    $__newObj->set_nombre($__rs['nombre']);
                    $__newObj->set_usuario($__rs['usuario']);
                    $__newObj->set_email($__rs['email']);
                    $__newObj->set_telefono($__rs['telefono']);
                    $__newObj->set_ip($__rs['ip']);
                    $__newObj->set_check($__rs['check']);
                    $__newObj->set_verificado($__rs['verificado']);
                    $__newObj->set_fechasolicitud($__rs['fechasolicitud']);
                    $__newObj->set_observaciones($__rs['observaciones']);
                    $__newObj->set__tiempo($__rs['_tiempo']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: recuperaclave
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertrecuperaclave( ) {

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