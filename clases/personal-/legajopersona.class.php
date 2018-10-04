<?php class Legajopersona { 

    /***
     * DB Fields: 
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    var $idLegajo;

    var $legajoPersonal;

    var $legajoTango;

    var $legajoReloj;

    var $tipoDoc;

    var $nroDoc;

    var $apellido;

    var $nombre;

    var $sexo;

    var $fechaNacimiento;

    var $direccion;

    var $barrio;

    var $localidad;

    var $departamento;

    var $codigopostal;

    var $mail;

    var $mailinstitucional;

    var $telefono;

    var $celular;

    var $cuil;

    var $estadoCivil;

    var $fechaIngreso;

    var $fechaEgreso;

    var $antiguedadAnt;

    var $afjp;

    var $sindicato;

    var $obraSocial;

    var $asignacionFamiliaDonde;

    var $asignacionFamilia;

    var $observaciones;

    var $vigente;

    var $categoria;

    var $titulo;

    var $_usuarioModifica;

    var $_fechaModifica;



//--------------- CLASS CONSTRUCTOR ------------------------ //
 function Legajopersona(){
        // constructor de la clase (legajopersona)
        
    }

//--------------- GET METHODS ----------------------------- //
    /***
     * Get value for fields:
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     **/


    function get_idLegajo( ) {
        return $this->idLegajo;
    }


    function get_legajoPersonal( ) {
        return $this->legajoPersonal;
    }


    function get_legajoTango( ) {
        return $this->legajoTango;
    }


    function get_legajoReloj( ) {
        return $this->legajoReloj;
    }


    function get_tipoDoc( ) {
        return $this->tipoDoc;
    }


    function get_nroDoc( ) {
        return $this->nroDoc;
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


    function get_fechaNacimiento( ) {
        return $this->fechaNacimiento;
    }


    function get_direccion( ) {
        return $this->direccion;
    }


    function get_barrio( ) {
        return $this->barrio;
    }


    function get_localidad( ) {
        return $this->localidad;
    }


    function get_departamento( ) {
        return $this->departamento;
    }


    function get_codigopostal( ) {
        return $this->codigopostal;
    }


    function get_mail( ) {
        return $this->mail;
    }


    function get_mailinstitucional( ) {
        return $this->mailinstitucional;
    }


    function get_telefono( ) {
        return $this->telefono;
    }


    function get_celular( ) {
        return $this->celular;
    }


    function get_cuil( ) {
        return $this->cuil;
    }


    function get_estadoCivil( ) {
        return $this->estadoCivil;
    }


    function get_fechaIngreso( ) {
        return $this->fechaIngreso;
    }


    function get_fechaEgreso( ) {
        return $this->fechaEgreso;
    }


    function get_antiguedadAnt( ) {
        return $this->antiguedadAnt;
    }


    function get_afjp( ) {
        return $this->afjp;
    }


    function get_sindicato( ) {
        return $this->sindicato;
    }


    function get_obraSocial( ) {
        return $this->obraSocial;
    }


    function get_asignacionFamiliaDonde( ) {
        return $this->asignacionFamiliaDonde;
    }


    function get_asignacionFamilia( ) {
        return $this->asignacionFamilia;
    }


    function get_observaciones( ) {
        return $this->observaciones;
    }


    function get_vigente( ) {
        return $this->vigente;
    }


    function get_categoria( ) {
        return $this->categoria;
    }


    function get_titulo( ) {
        return $this->titulo;
    }


    function get__usuarioModifica( ) {
        return $this->_usuarioModifica;
    }


    function get__fechaModifica( ) {
        return $this->_fechaModifica;
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


    function set_idLegajo( $idLegajo ) {
        $this->idLegajo = $idLegajo;
    }

    function set_legajoPersonal( $legajoPersonal ) {
        $this->legajoPersonal = $legajoPersonal;
    }

    function set_legajoTango( $legajoTango ) {
        $this->legajoTango = $legajoTango;
    }

    function set_legajoReloj( $legajoReloj ) {
        $this->legajoReloj = $legajoReloj;
    }

    function set_tipoDoc( $tipoDoc ) {
        $this->tipoDoc = $tipoDoc;
    }

    function set_nroDoc( $nroDoc ) {
        $this->nroDoc = $nroDoc;
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

    function set_fechaNacimiento( $fechaNacimiento ) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function set_direccion( $direccion ) {
        $this->direccion = $direccion;
    }

    function set_barrio( $barrio ) {
        $this->barrio = $barrio;
    }

    function set_localidad( $localidad ) {
        $this->localidad = $localidad;
    }

    function set_departamento( $departamento ) {
        $this->departamento = $departamento;
    }

    function set_codigopostal( $codigopostal ) {
        $this->codigopostal = $codigopostal;
    }

    function set_mail( $mail ) {
        $this->mail = $mail;
    }

    function set_mailinstitucional( $mailinstitucional ) {
        $this->mailinstitucional = $mailinstitucional;
    }

    function set_telefono( $telefono ) {
        $this->telefono = $telefono;
    }

    function set_celular( $celular ) {
        $this->celular = $celular;
    }

    function set_cuil( $cuil ) {
        $this->cuil = $cuil;
    }

    function set_estadoCivil( $estadoCivil ) {
        $this->estadoCivil = $estadoCivil;
    }

    function set_fechaIngreso( $fechaIngreso ) {
        $this->fechaIngreso = $fechaIngreso;
    }

    function set_fechaEgreso( $fechaEgreso ) {
        $this->fechaEgreso = $fechaEgreso;
    }

    function set_antiguedadAnt( $antiguedadAnt ) {
        $this->antiguedadAnt = $antiguedadAnt;
    }

    function set_afjp( $afjp ) {
        $this->afjp = $afjp;
    }

    function set_sindicato( $sindicato ) {
        $this->sindicato = $sindicato;
    }

    function set_obraSocial( $obraSocial ) {
        $this->obraSocial = $obraSocial;
    }

    function set_asignacionFamiliaDonde( $asignacionFamiliaDonde ) {
        $this->asignacionFamiliaDonde = $asignacionFamiliaDonde;
    }

    function set_asignacionFamilia( $asignacionFamilia ) {
        $this->asignacionFamilia = $asignacionFamilia;
    }

    function set_observaciones( $observaciones ) {
        $this->observaciones = $observaciones;
    }

    function set_vigente( $vigente ) {
        $this->vigente = $vigente;
    }

    function set_categoria( $categoria ) {
        $this->categoria = $categoria;
    }

    function set_titulo( $titulo ) {
        $this->titulo = $titulo;
    }

    function set__usuarioModifica( $_usuarioModifica ) {
        $this->_usuarioModifica = $_usuarioModifica;
    }

    function set__fechaModifica( $_fechaModifica ) {
        $this->_fechaModifica = $_fechaModifica;
    }

//--------------- CRUD METHODS ----------------------------- //
    /***
     * Create a new Record: legajopersona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idLegajo
     * @param legajoPersonal
     * @param legajoTango
     * @param legajoReloj
     * @param tipoDoc
     * @param nroDoc
     * @param apellido
     * @param nombre
     * @param sexo
     * @param fechaNacimiento
     * @param direccion
     * @param barrio
     * @param localidad
     * @param departamento
     * @param codigopostal
     * @param mail
     * @param mailinstitucional
     * @param telefono
     * @param celular
     * @param cuil
     * @param estadoCivil
     * @param fechaIngreso
     * @param fechaEgreso
     * @param antiguedadAnt
     * @param afjp
     * @param sindicato
     * @param obraSocial
     * @param asignacionFamiliaDonde
     * @param asignacionFamilia
     * @param observaciones
     * @param vigente
     * @param categoria
     * @param titulo
     * @param _usuarioModifica
     * @param _fechaModifica
     * @result void
     **/
    function createnew_legajopersona( $idLegajo, $legajoPersonal, $legajoTango, $legajoReloj, $tipoDoc, $nroDoc, $apellido, $nombre, $sexo, $fechaNacimiento, $direccion, $barrio, $localidad, $departamento, $codigopostal, $mail, $mailinstitucional, $telefono, $celular, $cuil, $estadoCivil, $fechaIngreso, $fechaEgreso, $antiguedadAnt, $afjp, $sindicato, $obraSocial, $asignacionFamiliaDonde, $asignacionFamilia, $observaciones, $vigente, $categoria, $titulo, $_usuarioModifica, $_fechaModifica ) {

        // items to be inserted in the database 
        $_obj = array(                      $legajoPersonal,
                      $legajoTango,
                      $legajoReloj,
                      $tipoDoc,
                      $nroDoc,
                      $apellido,
                      $nombre,
                      $sexo,
                      $fechaNacimiento,
                      $direccion,
                      $barrio,
                      $localidad,
                      $departamento,
                      $codigopostal,
                      $mail,
                      $mailinstitucional,
                      $telefono,
                      $celular,
                      $cuil,
                      $estadoCivil,
                      $fechaIngreso,
                      $fechaEgreso,
                      $antiguedadAnt,
                      $afjp,
                      $sindicato,
                      $obraSocial,
                      $asignacionFamiliaDonde,
                      $asignacionFamilia,
                      $observaciones,
                      $vigente,
                      $categoria,
                      $titulo,
                      $_usuarioModifica,
                      $_fechaModifica); 

        // database object connection
        $dbConn = $GLOBALS['dbConn'];

        // perform insert in the database
        $dbConn->insert("personal2.legajopersona", $_obj);
    }

    /***
     * Retrived an existing record: legajopersona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idLegajo
     * @result new Legajopersona
     **/
    function get_legajopersona( $idLegajo ) {

        // retrive the data
        $dbConn = $GLOBALS['dbConn'];

        // retrieved value in the database
        $_resultSet = $dbConn->doQuery("SELECT * FROM personal2.legajopersona WHERE idLegajo = '$idLegajo'");

        $__legajopersonaObj = new legajopersona();
        // return the retrived from the database

        // create a new object
        $__obj = new Legajopersona();
        if(isset($_resultSet[0]['idLegajo'])){;
                $__obj->set_idLegajo($_resultSet[0]['idLegajo']);
                $__obj->set_legajoPersonal($_resultSet[0]['legajoPersonal']);
                $__obj->set_legajoTango($_resultSet[0]['legajoTango']);
                $__obj->set_legajoReloj($_resultSet[0]['legajoReloj']);
                $__obj->set_tipoDoc($_resultSet[0]['tipoDoc']);
                $__obj->set_nroDoc($_resultSet[0]['nroDoc']);
                $__obj->set_apellido($_resultSet[0]['apellido']);
                $__obj->set_nombre($_resultSet[0]['nombre']);
                $__obj->set_sexo($_resultSet[0]['sexo']);
                $__obj->set_fechaNacimiento($_resultSet[0]['fechaNacimiento']);
                $__obj->set_direccion($_resultSet[0]['direccion']);
                $__obj->set_barrio($_resultSet[0]['barrio']);
                $__obj->set_localidad($_resultSet[0]['localidad']);
                $__obj->set_departamento($_resultSet[0]['departamento']);
                $__obj->set_codigopostal($_resultSet[0]['codigopostal']);
                $__obj->set_mail($_resultSet[0]['mail']);
                $__obj->set_mailinstitucional($_resultSet[0]['mailinstitucional']);
                $__obj->set_telefono($_resultSet[0]['telefono']);
                $__obj->set_celular($_resultSet[0]['celular']);
                $__obj->set_cuil($_resultSet[0]['cuil']);
                $__obj->set_estadoCivil($_resultSet[0]['estadoCivil']);
                $__obj->set_fechaIngreso($_resultSet[0]['fechaIngreso']);
                $__obj->set_fechaEgreso($_resultSet[0]['fechaEgreso']);
                $__obj->set_antiguedadAnt($_resultSet[0]['antiguedadAnt']);
                $__obj->set_afjp($_resultSet[0]['afjp']);
                $__obj->set_sindicato($_resultSet[0]['sindicato']);
                $__obj->set_obraSocial($_resultSet[0]['obraSocial']);
                $__obj->set_asignacionFamiliaDonde($_resultSet[0]['asignacionFamiliaDonde']);
                $__obj->set_asignacionFamilia($_resultSet[0]['asignacionFamilia']);
                $__obj->set_observaciones($_resultSet[0]['observaciones']);
                $__obj->set_vigente($_resultSet[0]['vigente']);
                $__obj->set_categoria($_resultSet[0]['categoria']);
                $__obj->set_titulo($_resultSet[0]['titulo']);
                $__obj->set__usuarioModifica($_resultSet[0]['_usuarioModifica']);
                $__obj->set__fechaModifica($_resultSet[0]['_fechaModifica']);
        }


        return $__obj;
    }

    /***
     * Update an existing record: legajopersona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idLegajo
     * @param itemsToBeUpdated = array()
     * @result void
     **/
    function update_legajopersona( $idLegajo, $itemsToBeUpdated = array() ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs update in the database
         foreach($itemsToBeUpdated as $_fName => $_fVal) { 
               $dbConn->addValuePair($_fName, $_fVal);
         }

         // perform update operation
         $dbConn->update("personal2.legajopersona", "idLegajo = '$idLegajo'");
    }

    /***
     * Delete an existing record: legajopersona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param idLegajo
     * @result void
     **/
    function delete_legajopersona( $idLegajo ) {

         // get database connection
         $dbConn = $GLOBALS['dbConn'];

         // performs deletion of data
         $dbConn->delete("personal2.legajopersona", "idLegajo = '$idLegajo'");
    }

    /***
     * Retrived list of objects base on a given parameters: legajopersona
     *
     * Generado en DBClassGenerator 
     * modificado por Anibal Catapano <anibaldc77@gmail.com> para MYSQL 
     *
     * @param conditionalStatement = ''
     * @result collection of objects: Legajopersona
     **/
    function list_legajopersona( $conditionalStatement = '' ) {

         $dbConn = $GLOBALS['dbConn'];
         // check if there is a given parameter list
         if(!empty($conditionalStatement)) { 
              $sqlStatement = "SELECT * FROM personal2.legajopersona WHERE $conditionalStatement"; 
         } else { 
              $sqlStatement = "SELECT * FROM personal2.legajopersona";
         }

         // retrieve the values base on the query result
         $__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
            $__newObj = new Legajopersona();

        if(isset($__rs['idLegajo'])){
                    $__newObj->set_idLegajo($__rs['idLegajo']);
                    $__newObj->set_legajoPersonal($__rs['legajoPersonal']);
                    $__newObj->set_legajoTango($__rs['legajoTango']);
                    $__newObj->set_legajoReloj($__rs['legajoReloj']);
                    $__newObj->set_tipoDoc($__rs['tipoDoc']);
                    $__newObj->set_nroDoc($__rs['nroDoc']);
                    $__newObj->set_apellido($__rs['apellido']);
                    $__newObj->set_nombre($__rs['nombre']);
                    $__newObj->set_sexo($__rs['sexo']);
                    $__newObj->set_fechaNacimiento($__rs['fechaNacimiento']);
                    $__newObj->set_direccion($__rs['direccion']);
                    $__newObj->set_barrio($__rs['barrio']);
                    $__newObj->set_localidad($__rs['localidad']);
                    $__newObj->set_departamento($__rs['departamento']);
                    $__newObj->set_codigopostal($__rs['codigopostal']);
                    $__newObj->set_mail($__rs['mail']);
                    $__newObj->set_mailinstitucional($__rs['mailinstitucional']);
                    $__newObj->set_telefono($__rs['telefono']);
                    $__newObj->set_celular($__rs['celular']);
                    $__newObj->set_cuil($__rs['cuil']);
                    $__newObj->set_estadoCivil($__rs['estadoCivil']);
                    $__newObj->set_fechaIngreso($__rs['fechaIngreso']);
                    $__newObj->set_fechaEgreso($__rs['fechaEgreso']);
                    $__newObj->set_antiguedadAnt($__rs['antiguedadAnt']);
                    $__newObj->set_afjp($__rs['afjp']);
                    $__newObj->set_sindicato($__rs['sindicato']);
                    $__newObj->set_obraSocial($__rs['obraSocial']);
                    $__newObj->set_asignacionFamiliaDonde($__rs['asignacionFamiliaDonde']);
                    $__newObj->set_asignacionFamilia($__rs['asignacionFamilia']);
                    $__newObj->set_observaciones($__rs['observaciones']);
                    $__newObj->set_vigente($__rs['vigente']);
                    $__newObj->set_categoria($__rs['categoria']);
                    $__newObj->set_titulo($__rs['titulo']);
                    $__newObj->set__usuarioModifica($__rs['_usuarioModifica']);
                    $__newObj->set__fechaModifica($__rs['_fechaModifica']);
        }

            // add object to collection 
            array_push($__collectionOfObjects, $__newObj);
         }

         // return collection of objects
         return $__collectionOfObjects;
    }

} ?>