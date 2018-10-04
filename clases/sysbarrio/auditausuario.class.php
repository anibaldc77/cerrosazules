<?php class Auditausuario { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $AuditaId;

    var $UsuarioId;

    var $SistemaId;

    var $Fecha;

    var $Descripcion;

    var $Ip;

    var $Accion;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Auditausuario(){
        // constructor de la clase (auditausuario)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_AuditaId( ) {
        return $this->AuditaId;
    }


    function get_UsuarioId( ) {
        return $this->UsuarioId;
    }


    function get_SistemaId( ) {
        return $this->SistemaId;
    }


    function get_Fecha( ) {
        return $this->Fecha;
    }


    function get_Descripcion( ) {
        return $this->Descripcion;
    }


    function get_Ip( ) {
        return $this->Ip;
    }


    function get_Accion( ) {
        return $this->Accion;
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


    function set_AuditaId( $AuditaId ) {
        $this->AuditaId = $AuditaId;
    }

    function set_UsuarioId( $UsuarioId ) {
        $this->UsuarioId = $UsuarioId;
    }

    function set_SistemaId( $SistemaId ) {
        $this->SistemaId = $SistemaId;
    }

    function set_Fecha( $Fecha ) {
        $this->Fecha = $Fecha;
    }

    function set_Descripcion( $Descripcion ) {
        $this->Descripcion = $Descripcion;
    }

    function set_Ip( $Ip ) {
        $this->Ip = $Ip;
    }

    function set_Accion( $Accion ) {
        $this->Accion = $Accion;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: auditausuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param AuditaId
     * @param UsuarioId
     * @param SistemaId
     * @param Fecha
     * @param Descripcion
     * @param Ip
     * @param Accion
     * @result void
     **/
    function createnew_auditausuario( $AuditaId, $UsuarioId, $SistemaId, $Fecha, $Descripcion, $Ip, $Accion ) {

        // items to be inserted in the database 
        $_obj = array($AuditaId,
$UsuarioId,
$SistemaId,
$Fecha,
$Descripcion,
$Ip,
$Accion); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("systarjetas.auditausuario", $_obj);
        return $this->get_idinsertauditausuario();
    }

    /***
     * Retrived an existing record: auditausuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param AuditaId
     * @result new Auditausuario
     **/
    function get_auditausuario( $AuditaId ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM systarjetas.auditausuario WHERE AuditaId = '$AuditaId'");

        $__auditausuarioObj = new auditausuario();
        // return the retrived from the database

        // create a new object
        $__obj = new Auditausuario();
        if(isset($_resultSet[0]['AuditaId'])){;
                $__obj->set_AuditaId($_resultSet[0]['AuditaId']);
                $__obj->set_UsuarioId($_resultSet[0]['UsuarioId']);
                $__obj->set_SistemaId($_resultSet[0]['SistemaId']);
                $__obj->set_Fecha($_resultSet[0]['Fecha']);
                $__obj->set_Descripcion($_resultSet[0]['Descripcion']);
                $__obj->set_Ip($_resultSet[0]['Ip']);
                $__obj->set_Accion($_resultSet[0]['Accion']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: auditausuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param AuditaId
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_auditausuario( $AuditaId, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("systarjetas.auditausuario", "AuditaId = '$AuditaId'");
    }

    /***
     * Delete an existing record: auditausuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param AuditaId
     * @result void
     **/
    function delete_auditausuario( $AuditaId ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("systarjetas.auditausuario", "AuditaId = '$AuditaId'");
    }

    /***
     * Retrived list of objects base on a given parameters: auditausuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Auditausuario
     **/
    function list_auditausuario( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM systarjetas.auditausuario WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM systarjetas.auditausuario";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Auditausuario();

        if(isset($__rs['AuditaId'])){
                    $__newObj->set_AuditaId($__rs['AuditaId']);
                    $__newObj->set_UsuarioId($__rs['UsuarioId']);
                    $__newObj->set_SistemaId($__rs['SistemaId']);
                    $__newObj->set_Fecha($__rs['Fecha']);
                    $__newObj->set_Descripcion($__rs['Descripcion']);
                    $__newObj->set_Ip($__rs['Ip']);
                    $__newObj->set_Accion($__rs['Accion']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: auditausuario
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertauditausuario( ) {

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