<?php class Ingreso { 

    /***
     * DB Fields: id
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $id;

    /***
     * DB Fields: idUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $idUsuario;

    /***
     * DB Fields: ip
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $ip;

    /***
     * DB Fields: fechaIngreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $fechaIngreso;

    /***
     * DB Fields: idObjeto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     **/
    var $idObjeto;

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for field: id
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result id
     **/
    function get_id( ) {
        // returns the value of id
        return $this->id;
    }


    /***
     * Get value for field: idUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result idUsuario
     **/
    function get_idUsuario( ) {
        // returns the value of idUsuario
        return $this->idUsuario;
    }


    /***
     * Get value for field: ip
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result ip
     **/
    function get_ip( ) {
        // returns the value of ip
        return $this->ip;
    }


    /***
     * Get value for field: fechaIngreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result fechaIngreso
     **/
    function get_fechaIngreso( ) {
        // returns the value of fechaIngreso
        return $this->fechaIngreso;
    }


    /***
     * Get value for field: idObjeto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @result idObjeto
     **/
    function get_idObjeto( ) {
        // returns the value of idObjeto
        return $this->idObjeto;
    }


//--------------- SET METHODS ----------------------------- //
    /***
     * Set value for field: id
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id
     * @result void
     **/
    function set_id( $id ) {
        // sets the value of id
        $this->id = $id;
    }

    /***
     * Set value for field: idUsuario
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idUsuario
     * @result void
     **/
    function set_idUsuario( $idUsuario ) {
        // sets the value of idUsuario
        $this->idUsuario = $idUsuario;
    }

    /***
     * Set value for field: ip
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param ip
     * @result void
     **/
    function set_ip( $ip ) {
        // sets the value of ip
        $this->ip = $ip;
    }

    /***
     * Set value for field: fechaIngreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param fechaIngreso
     * @result void
     **/
    function set_fechaIngreso( $fechaIngreso ) {
        // sets the value of fechaIngreso
        $this->fechaIngreso = $fechaIngreso;
    }

    /***
     * Set value for field: idObjeto
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param idObjeto
     * @result void
     **/
    function set_idObjeto( $idObjeto ) {
        // sets the value of idObjeto
        $this->idObjeto = $idObjeto;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: ingreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id
     * @param idUsuario
     * @param ip
     * @param fechaIngreso
     * @param idObjeto
     * @result void
     **/
    function createnew_ingreso( $id, $idUsuario, $ip, $fechaIngreso, $idObjeto ) {

        // items to be inserted in the database 
        $_obj = array($id,
                      $idUsuario,
                      $ip,
                      $fechaIngreso,
                      $idObjeto); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("ingreso", $_obj);
    }

    /***
     * Retrived an existing record: ingreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id
     * @result new Ingreso
     **/
    function get_ingreso( $id ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM ingreso WHERE id = '$id'");

        $__ingresoObj = new ingreso();
        // return the retrived from the database

        // create a new object
        $__obj = new Ingreso();
        $__obj->set_id($_resultSet[0]['id']);
        $__obj->set_idUsuario($_resultSet[0]['idUsuario']);
        $__obj->set_ip($_resultSet[0]['ip']);
        $__obj->set_fechaIngreso($_resultSet[0]['fechaIngreso']);
        $__obj->set_idObjeto($_resultSet[0]['idObjeto']);


        return $__obj;
    }

    /***
     * Update an existing record: ingreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_ingreso( $id, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("ingreso", "id = '$id'");
    }

    /***
     * Delete an existing record: ingreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param id
     * @result void
     **/
    function delete_ingreso( $id ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("ingreso", "id = '$id'");
    }

    /***
     * Retrived list of objects base on a given parameters: ingreso
     *
     *
     * THIS IS a generated method using the DBClassGenerator 
     * created by John paul de Guzman <jpdguzman@gmail.com> 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Ingreso
     **/
    function list_ingreso( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM ingreso WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM ingreso";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Ingreso();

            $__newObj->set_id($__rs['id']);
            $__newObj->set_idUsuario($__rs['idUsuario']);
            $__newObj->set_ip($__rs['ip']);
            $__newObj->set_fechaIngreso($__rs['fechaIngreso']);
            $__newObj->set_idObjeto($__rs['idObjeto']);

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>