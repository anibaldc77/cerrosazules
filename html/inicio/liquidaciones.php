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
		<section id="liqutitulo">
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Liquidaciones</h5>

                </div>
                <div class="col s2 m6 l6">
                 
                </div>
              </div>
            </div>
            <div id="menu-titulo" class="section">
                <div class="row">
                  
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
			<div class="divider"></div>
<!-- 			<script language="javascript">
				    $('.finicio').pickadate({
		autoclose: true,
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 60, // Creates a dropdown of 15 years to control year
		format: 'mm/yyyy/dd',
		showDaysInNextAndPreviousMonths: true,
		months: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','August','September','October','November', 'December']
		
    });
			</script> -->
		</section>
			<!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <div class="section">
	
              
              <!--Gradient Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Gradient Button</h4>
                <div class="row">
                  <div class="col s12">
                    <p>Here are the examples of regular & fab style gradient button with medium & large size. You can apply any gradient color css class to material buttons i.e <code>.gradient-45deg-purple-deep-orange</code></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn waves-effect waves-light gradient-45deg-purple-deep-orange">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-light-blue-cyan">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-red-pink">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-amber-amber">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-green-teal">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-red-pink">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-amber-amber">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-green-teal">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-purple-deep-orange">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-light-blue-cyan">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-red-pink">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-amber-amber">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-green-teal">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-purple-deep-orange">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-light-blue-cyan">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-red-pink">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-amber-amber">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-green-teal">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <p>If you want to add shadow also use <code>.gradient-shadow</code> class. All othere materialize framwork button classes will support with gradient buttons.</p>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-red-pink gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">button</a></p>
                    <p><a class="btn waves-effect waves-light gradient-45deg-green-teal gradient-shadow">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-red-pink gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating waves-effect waves-light gradient-45deg-green-teal gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-red-pink gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">button</a></p>
                    <p><a class="btn btn-large waves-effect waves-light gradient-45deg-green-teal gradient-shadow">button</a></p>
                  </div>
                  <div class="col s12 m3 l3 center">
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-purple-deep-orange gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-light-blue-cyan gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-red-pink gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-amber-amber gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                    <p>
                      <a class="btn-floating btn-large waves-effect waves-light gradient-45deg-green-teal gradient-shadow">
                        <i class="material-icons">clear</i>
                      </a>
                    </p>
                  </div>
                  <div class="col s12">
                    <p>
                      <span class="font-weight-600">Note:</span> Please refer <a href="css-color.html" target="_blank">css-color.html</a> file for all colors classes & more details.</p>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <!--Round Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Round Button</h4>
                <div class="row">
                  <div class="col s12">
                    <p>For round button you need to use class <code>.border-round</code></p>
                  </div>
                  <div class="col s12">
                    <a class="waves-effect waves-light  btn gradient-45deg-light-blue-cyan box-shadow-none border-round mr-1">copy</a>
                    <a class="waves-effect waves-light  btn gradient-45deg-red-pink box-shadow-none border-round mr-1">upload</a>
                    <a class="waves-effect waves-light  btn gradient-45deg-amber-amber box-shadow-none border-round mr-1">backup</a>
                    <a class="waves-effect waves-light  btn gradient-45deg-green-teal box-shadow-none border-round mr-1">download</a>
                  </div>
                </div>
              </div>
              <div class="divider"></div>
              <!--Border Button-->
              <div id="gradient-buttons" class="section">
                <h4 class="header">Gradient button with shadow</h4>
                <div class="row">
                  <div class="col s12">
                    <p>For shadow button you ave to use class <code>z-depth-1, z-depth-2, z-depth-3, z-depth-4, z-depth-5</code></p>
                  </div>
                  <div class="col s12">
                    <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan z-depth-4 mr-1">copy</a>
                    <a class="waves-effect waves-light btn gradient-45deg-red-pink z-depth-4 mr-1">upload</a>
                    <a class="waves-effect waves-light btn gradient-45deg-amber-amber z-depth-4 mr-1">backup</a>
                    <a class="waves-effect waves-light btn gradient-45deg-green-teal z-depth-4 mr-1">download</a>
                  </div>
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
