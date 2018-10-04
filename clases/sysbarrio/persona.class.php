<?php class Persona { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idpersona;

    var $apellido;

    var $nombre;

    var $sexo;

    var $tipoDoc;

    var $nroDoc;

    var $fechaNacimiento;

    var $observaciones;

    var $habilitado;

    var $_usaurio;

    var $_fechamodifica;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Persona(){
        // constructor de la clase (persona)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idpersona( ) {
        return $this->idpersona;
    }


    function get_apellido( ) {
        return $this->apellido;
    }


    function get_nombre( ) {
        return $this->nombre;
    }


    function get_sexo( ) {
        return $this->sexo;
    }


    function get_tipoDoc( ) {
        return $this->tipoDoc;
    }


    function get_nroDoc( ) {
        return $this->nroDoc;
    }


    function get_fechaNacimiento( ) {
        return $this->fechaNacimiento;
    }


    function get_observaciones( ) {
        return $this->observaciones;
    }


    function get_habilitado( ) {
        return $this->habilitado;
    }


    function get__usaurio( ) {
        return $this->_usaurio;
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


    function set_idpersona( $idpersona ) {
        $this->idpersona = $idpersona;
    }

    function set_apellido( $apellido ) {
        $this->apellido = $apellido;
    }

    function set_nombre( $nombre ) {
        $this->nombre = $nombre;
    }

    function set_sexo( $sexo ) {
        $this->sexo = $sexo;
    }

    function set_tipoDoc( $tipoDoc ) {
        $this->tipoDoc = $tipoDoc;
    }

    function set_nroDoc( $nroDoc ) {
        $this->nroDoc = $nroDoc;
    }

    function set_fechaNacimiento( $fechaNacimiento ) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function set_observaciones( $observaciones ) {
        $this->observaciones = $observaciones;
    }

    function set_habilitado( $habilitado ) {
        $this->habilitado = $habilitado;
    }

    function set__usaurio( $_usaurio ) {
        $this->_usaurio = $_usaurio;
    }

    function set__fechamodifica( $_fechamodifica ) {
        $this->_fechamodifica = $_fechamodifica;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: persona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpersona
     * @param apellido
     * @param nombre
     * @param sexo
     * @param tipoDoc
     * @param nroDoc
     * @param fechaNacimiento
     * @param observaciones
     * @param habilitado
     * @param _usaurio
     * @param _fechamodifica
     * @result void
     **/
    function createnew_persona( $idpersona, $apellido, $nombre, $sexo, $tipoDoc, $nroDoc, $fechaNacimiento, $observaciones, $habilitado, $_usaurio, $_fechamodifica ) {

        // items to be inserted in the database 
        $_obj = array($idpersona,
$apellido,
$nombre,
$sexo,
$tipoDoc,
$nroDoc,
$fechaNacimiento,
$observaciones,
$habilitado,
$_usaurio,
$_fechamodifica); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.persona", $_obj);
        return $this->get_idinsertpersona();
    }

    /***
     * Retrived an existing record: persona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpersona
     * @result new Persona
     **/
    function get_persona( $idpersona ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.persona WHERE idpersona = '$idpersona'");

        $__personaObj = new persona();
        // return the retrived from the database

        // create a new object
        $__obj = new Persona();
        if(isset($_resultSet[0]['idpersona'])){;
                $__obj->set_idpersona($_resultSet[0]['idpersona']);
                $__obj->set_apellido($_resultSet[0]['apellido']);
                $__obj->set_nombre($_resultSet[0]['nombre']);
                $__obj->set_sexo($_resultSet[0]['sexo']);
                $__obj->set_tipoDoc($_resultSet[0]['tipoDoc']);
                $__obj->set_nroDoc($_resultSet[0]['nroDoc']);
                $__obj->set_fechaNacimiento($_resultSet[0]['fechaNacimiento']);
                $__obj->set_observaciones($_resultSet[0]['observaciones']);
                $__obj->set_habilitado($_resultSet[0]['habilitado']);
                $__obj->set__usaurio($_resultSet[0]['_usaurio']);
                $__obj->set__fechamodifica($_resultSet[0]['_fechamodifica']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: persona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpersona
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_persona( $idpersona, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.persona", "idpersona = '$idpersona'");
    }

    /***
     * Delete an existing record: persona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idpersona
     * @result void
     **/
    function delete_persona( $idpersona ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.persona", "idpersona = '$idpersona'");
    }

    /***
     * Retrived list of objects base on a given parameters: persona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Persona
     **/
    function list_persona( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.persona WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.persona";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Persona();

        if(isset($__rs['idpersona'])){
                    $__newObj->set_idpersona($__rs['idpersona']);
                    $__newObj->set_apellido($__rs['apellido']);
                    $__newObj->set_nombre($__rs['nombre']);
                    $__newObj->set_sexo($__rs['sexo']);
                    $__newObj->set_tipoDoc($__rs['tipoDoc']);
                    $__newObj->set_nroDoc($__rs['nroDoc']);
                    $__newObj->set_fechaNacimiento($__rs['fechaNacimiento']);
                    $__newObj->set_observaciones($__rs['observaciones']);
                    $__newObj->set_habilitado($__rs['habilitado']);
                    $__newObj->set__usaurio($__rs['_usaurio']);
                    $__newObj->set__fechamodifica($__rs['_fechamodifica']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: persona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertpersona( ) {

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