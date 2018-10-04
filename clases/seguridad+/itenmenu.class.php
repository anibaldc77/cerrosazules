<?php class Itenmenu { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idItemMenu;

    var $posicion;

    var $idItemMenuPadre;

    var $orden;

    var $idObjeto;

    var $idTipoPermiso;

    var $descripcion;

    var $accion;

    var $subaccion;

    var $url;

    var $iconoUrl;

    var $iconoFont;

    var $titulo;

    var $alternativo;

    var $habilitado;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Itenmenu(){
        // constructor de la clase (itenmenu)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idItemMenu( ) {
        return $this->idItemMenu;
    }


    function get_posicion( ) {
        return $this->posicion;
    }


    function get_idItemMenuPadre( ) {
        return $this->idItemMenuPadre;
    }


    function get_orden( ) {
        return $this->orden;
    }


    function get_idObjeto( ) {
        return $this->idObjeto;
    }


    function get_idTipoPermiso( ) {
        return $this->idTipoPermiso;
    }


    function get_descripcion( ) {
        return $this->descripcion;
    }


    function get_accion( ) {
        return $this->accion;
    }


    function get_subaccion( ) {
        return $this->subaccion;
    }


    function get_url( ) {
        return $this->url;
    }


    function get_iconoUrl( ) {
        return $this->iconoUrl;
    }


    function get_iconoFont( ) {
        return $this->iconoFont;
    }


    function get_titulo( ) {
        return $this->titulo;
    }


    function get_alternativo( ) {
        return $this->alternativo;
    }


    function get_habilitado( ) {
        return $this->habilitado;
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


    function set_idItemMenu( $idItemMenu ) {
        $this->idItemMenu = $idItemMenu;
    }

    function set_posicion( $posicion ) {
        $this->posicion = $posicion;
    }

    function set_idItemMenuPadre( $idItemMenuPadre ) {
        $this->idItemMenuPadre = $idItemMenuPadre;
    }

    function set_orden( $orden ) {
        $this->orden = $orden;
    }

    function set_idObjeto( $idObjeto ) {
        $this->idObjeto = $idObjeto;
    }

    function set_idTipoPermiso( $idTipoPermiso ) {
        $this->idTipoPermiso = $idTipoPermiso;
    }

    function set_descripcion( $descripcion ) {
        $this->descripcion = $descripcion;
    }

    function set_accion( $accion ) {
        $this->accion = $accion;
    }

    function set_subaccion( $subaccion ) {
        $this->subaccion = $subaccion;
    }

    function set_url( $url ) {
        $this->url = $url;
    }

    function set_iconoUrl( $iconoUrl ) {
        $this->iconoUrl = $iconoUrl;
    }

    function set_iconoFont( $iconoFont ) {
        $this->iconoFont = $iconoFont;
    }

    function set_titulo( $titulo ) {
        $this->titulo = $titulo;
    }

    function set_alternativo( $alternativo ) {
        $this->alternativo = $alternativo;
    }

    function set_habilitado( $habilitado ) {
        $this->habilitado = $habilitado;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: itenmenu
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idItemMenu
     * @param posicion
     * @param idItemMenuPadre
     * @param orden
     * @param idObjeto
     * @param idTipoPermiso
     * @param descripcion
     * @param accion
     * @param subaccion
     * @param url
     * @param iconoUrl
     * @param iconoFont
     * @param titulo
     * @param alternativo
     * @param habilitado
     * @result void
     **/
    function createnew_itenmenu( $idItemMenu, $posicion, $idItemMenuPadre, $orden, $idObjeto, $idTipoPermiso, $descripcion, $accion, $subaccion, $url, $iconoUrl, $iconoFont, $titulo, $alternativo, $habilitado ) {

        // items to be inserted in the database 
        $_obj = array($idItemMenu,
$posicion,
$idItemMenuPadre,
$orden,
$idObjeto,
$idTipoPermiso,
$descripcion,
$accion,
$subaccion,
$url,
$iconoUrl,
$iconoFont,
$titulo,
$alternativo,
$habilitado); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("seguridad.itenmenu", $_obj);
        return $this->get_idinsertitenmenu();
    }

    /***
     * Retrived an existing record: itenmenu
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idItemMenu
     * @result new Itenmenu
     **/
    function get_itenmenu( $idItemMenu ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM seguridad.itenmenu WHERE idItemMenu = '$idItemMenu'");

        $__itenmenuObj = new itenmenu();
        // return the retrived from the database

        // create a new object
        $__obj = new Itenmenu();
        if(isset($_resultSet[0]['idItemMenu'])){;
                $__obj->set_idItemMenu($_resultSet[0]['idItemMenu']);
                $__obj->set_posicion($_resultSet[0]['posicion']);
                $__obj->set_idItemMenuPadre($_resultSet[0]['idItemMenuPadre']);
                $__obj->set_orden($_resultSet[0]['orden']);
                $__obj->set_idObjeto($_resultSet[0]['idObjeto']);
                $__obj->set_idTipoPermiso($_resultSet[0]['idTipoPermiso']);
                $__obj->set_descripcion($_resultSet[0]['descripcion']);
                $__obj->set_accion($_resultSet[0]['accion']);
                $__obj->set_subaccion($_resultSet[0]['subaccion']);
                $__obj->set_url($_resultSet[0]['url']);
                $__obj->set_iconoUrl($_resultSet[0]['iconoUrl']);
                $__obj->set_iconoFont($_resultSet[0]['iconoFont']);
                $__obj->set_titulo($_resultSet[0]['titulo']);
                $__obj->set_alternativo($_resultSet[0]['alternativo']);
                $__obj->set_habilitado($_resultSet[0]['habilitado']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: itenmenu
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idItemMenu
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_itenmenu( $idItemMenu, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("seguridad.itenmenu", "idItemMenu = '$idItemMenu'");
    }

    /***
     * Delete an existing record: itenmenu
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idItemMenu
     * @result void
     **/
    function delete_itenmenu( $idItemMenu ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("seguridad.itenmenu", "idItemMenu = '$idItemMenu'");
    }

    /***
     * Retrived list of objects base on a given parameters: itenmenu
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Itenmenu
     **/
    function list_itenmenu( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM seguridad.itenmenu WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM seguridad.itenmenu";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Itenmenu();

        if(isset($__rs['idItemMenu'])){
                    $__newObj->set_idItemMenu($__rs['idItemMenu']);
                    $__newObj->set_posicion($__rs['posicion']);
                    $__newObj->set_idItemMenuPadre($__rs['idItemMenuPadre']);
                    $__newObj->set_orden($__rs['orden']);
                    $__newObj->set_idObjeto($__rs['idObjeto']);
                    $__newObj->set_idTipoPermiso($__rs['idTipoPermiso']);
                    $__newObj->set_descripcion($__rs['descripcion']);
                    $__newObj->set_accion($__rs['accion']);
                    $__newObj->set_subaccion($__rs['subaccion']);
                    $__newObj->set_url($__rs['url']);
                    $__newObj->set_iconoUrl($__rs['iconoUrl']);
                    $__newObj->set_iconoFont($__rs['iconoFont']);
                    $__newObj->set_titulo($__rs['titulo']);
                    $__newObj->set_alternativo($__rs['alternativo']);
                    $__newObj->set_habilitado($__rs['habilitado']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

    /***
     * Busca Id Último Insert: itenmenu
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @result void
     **/
    function get_idinsertitenmenu( ) {

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