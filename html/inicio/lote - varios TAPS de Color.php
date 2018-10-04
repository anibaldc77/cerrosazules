<?php
/* En Pagina Principal */
/*	include_once('include/parametros.php');
	include_once('../../clases/sysbarrio/funciones.class.php');
	include_once('../../clases/sysbarrio/configuration.php');
	include_once('../../clases/sysbarrio/usuarioEx.class.php');
	include_once('../../clases/sysbarrio/auditausuario.class.php');
	include_once('../../clases/sysbarrio/permisoEx.class.php');
	include_once('../../clases/sysbarrio/personaex.class.php');
	$funcion = new Funciones();

	include_once ("seguridad.php");
	include_once("../../clases/sysbarrio/menu.class.php"); */
/* En Pagina Principal */

//	print_r($_SESSION['permiso']);
if(($funcion->permControl(SISTEMABASE,4))) // Permiso para Acceder
{
	
?>


        <section id="content">
          <!--breadcrumbs start-->

		 <div id="breadcrumbs-wrapper">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Lote / Operaciones</h5>
                   </div>

              </div>
            </div>
          </div>
			<section id="liqutitulo">
			
			<div class="col s12">
                 <div class="row">
							   <div id="menu-titulo" class="section">
									<div class="row">
										<div class="col s12 m1 l1"></div>
									 <div class="col s12 m3 l3">
										<select id="comercio" name="comercio">
											<option value="" disabled selected>Todos los comercios</option>
											<option value="1">Comercio 1</option>
											<option value="2">Comercio 2</option>
											<option value="3">Comercio 3</option>
										</select>
									  </div>
									  <div class="col s12 m3 l3">
										<select id="banco" name="banco">
											<option value="" disabled selected>Todos los bancos pagadores</option>
											<option value="1">Banco 1</option>
											<option value="2">Banco 2</option>
											<option value="3">Banco 3</option>
										</select>
									  </div>
									  <div class=" col s12 m1 l1">

										  <input placeholder="Fecha Inicio" id="finicio" name="finicio" type="text" class="datepicker">

									  </div>
									  <div class="col s12 m1 l1">

										   <input placeholder="Fecha Fin" id="ffin" name="ffin" type="text" class="datepicker">

									  </div>		

									</div>
								</div>
 
                      </div>
                    </div>

			<div class="divider"></div>

		</section>
			
               <div class="row">
                  <div class="col s12">
					  <h5 class="header">Registros</h5>
                  </div>
				   <div class="col s12">
					    <p>Información registrada sobre las transacciones</p>
						</div>
                  <div class="col s12">
                    <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                      <li>
                        <div class="collapsible-header waves-light gradient-45deg-purple-deep-orange lightrn-1 white-text">
                          <i class="material-icons">settings_backup_restore</i> First Header</div>
                        <div class="collapsible-body purple lighten-5">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                      </li>
                      <li>
                        <div class="collapsible-header gradient-45deg-light-blue-cyan white-text active">
                          <i class="material-icons">toll</i> Second Header</div>
                        <div class="collapsible-body cyan lighten-5 lighten-5">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>
                      </li>
                      <li>
                        <div class="collapsible-header gradient-45deg-red-pink accent-2 white-text">
                          <i class="material-icons">timeline</i> Third Header</div>
                        <div class="collapsible-body red lighten-5">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                          </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>			
			<!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
	
              
              <!--Gradient Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Información</h4>
                <div class="row">
                  <div class="col s12">
                    <p>Información registrada sobre las transacciones</p>
                  </div>
                  <div class="col s12 m12 l12 center">
					  
                      <ul class="collapsible collapsible-accordion" data-collapsible="accordion">
                        <li>
                          <div class="collapsible-header light-blue light-blue-text text-lighten-5">
                            <i class="material-icons">swap_calls</i> First Header</div>
                          <div class="collapsible-body light-blue lighten-5">
							  
	<table id="data-table-row-grouping" class="striped bordered"   cellspacing="0" width="100%">
	<thead>
		<tr>
        	<th  >Vehículo</th>
            <th class="ultra-small center-align" >Fecha de venta</th>
			<th width="" class="ultra-small center-align">Tarjeta</th>
			<th class="ultra-small center-align" >Monto de Venta</th>
			<th class="ultra-small center-align">Descripción</th>
			<th class="ultra-small center-align">Cuotas</th>
			<th width="100" class="ultra-small center-align">Cupón</th>  
			<th width="50" class="ultra-small center-align">Lote</th>   
			<th width="50" class="ultra-small center-align">Número de Tarjeta (4 dígitos)</th>
			<th width="" class="ultra-small center-align">Comercio</th> 	
			<th width="" class="ultra-small center-align">Fecha de Cobro</th> 			
		</tr>
	</thead>
	<tbody>
		<tr>
        	<td  >Vehículo</td>
            <td class="ultra-small center-align" >Fecha de venta</td>
			<td width="" class="ultra-small center-align">Tarjeta</td>
			<td class="ultra-small center-align" >Monto de Venta</td>
			<td class="ultra-small center-align">Descripción</td>
			<td class="ultra-small center-align">Cuotas</td>
			<td width="100" class="ultra-small center-align">Cupón</td>  
			<td width="50" class="ultra-small center-align">Lote</td>   
			<td width="50" class="ultra-small center-align">Número de Tarjeta (4 dígitos)</td>
			<td width="" class="ultra-small center-align">Comercio</td> 	
			<td width="" class="ultra-small center-align">Fecha de Cobro</td> 			
		</tr>

	</tbody>
  </table>
                          </div>
                        </li>
					  </ul>
				  

		</div>
                  </div>

					
					<!--
					<div class="col s12 m3 l3 center">
                  </div>
-->
 






                </div>
              </div>
 


            </div>
			</div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->



		
		<?php }else{
   //   session_destroy(); 
    //  header("Location: index.php?E=1&P=4"); 
	echo "Sin Permisos";
}
?>
