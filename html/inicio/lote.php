
<?php
/* En Pagina Principal */
	include_once('include/parametros.php');
	include_once('../../clases/sysbarrio/funciones.class.php');
	include_once('../../clases/sysbarrio/configuration.php');
	include_once('../../clases/sysbarrio/usuarioEx.class.php');
	include_once('../../clases/sysbarrio/auditausuario.class.php');
	include_once('../../clases/sysbarrio/permisoEx.class.php');
	include_once('../../clases/sysbarrio/personaex.class.php');
	$funcion = new Funciones();

	include_once ("seguridad.php");
	include_once("../../clases/sysbarrio/menu.class.php"); 
/* En Pagina Principal */

//	print_r($_SESSION['permiso']);
if(($funcion->permControl(SISTEMABASE,4))) // Permiso para Acceder
{
	//include_once('../../clases/sysbarrio/cierrelote.class.php');
	//include_once('../../clases/sysbarrio/cierrelotedetalle.class.php');	
	include_once('../../clases/sysbarrio/cierrelote.Ex.class.php');
	
?>

		 <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
				  <div class="col s12 m12 l12">
				 <?php
	$Accion = (isset($_REQUEST['Accion']))?$_REQUEST['Accion']:"";

		//print_r($L);
	

 $menu = new muestraMenu();  
 echo $menu->armaMenu(SISTEMABASE,$A,$SA,2,"gradient-45deg-light-blue-cyan","white-text text-darken-4");
				  ?>
				  </div>			 
            <div class="container">
              <div class="row">

                <div class="col s12 m12 l12">
                  <h5 class="breadcrumbs-title">Lote / Operaciones</h5>
                   </div>

              </div>
            </div>
			 
          </div>

        <!-- END CONTENT -->
		
		<?php 
switch ($SA){
			
			case 1:
				include_once('loteabm.php');
				break;
		
			case 2:
				include_once('lotelistado.php');
				break;
			case 3:
				include_once('');
				break;
								
			default:
				include_once('lotelistado.php');
		}


}else{
   //   session_destroy(); 
    //  header("Location: index.php?E=1&P=4"); 
	?>
                  <div id="card-alert" class="card red">
                      <div class="card-content white-text">
                        <p><i class="mdi-alert-error"></i>  El Usuario NO cuenta con los permisos necesarios para acceder a esta sección</p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
<?php
}
?>
