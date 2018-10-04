        <section id="content">
          <!--breadcrumbs start-->


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
			 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
			            <div id="modal1" class="modal">
              <div class="modal-content">
                <h4>Modal Header</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
              </div>
              <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Disagree</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
              </div>
            </div>
               <div class="row">
                   <div class="col s12">
                    <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                      <li>
                        <div class="collapsible-header gradient-45deg-light-blue-cyan white-text active">
                          <i class="material-icons">toll</i> Registros Ingresados</div>
                        <div class="collapsible-body cyan lighten-5 lighten-5">
<p>Información registrada sobre las transacciones</p>
							
<table id="tabla-comun" class="row-border hover order-column stripe " style="width:100%">
        <thead>
		<tr>
			<th class="ultra-small center-align">Fecha Cierre</th>
			<th class="ultra-small center-align" >N° Lote</th>
			<th width="" class="ultra-small center-align">Comercio</th>
			<th class="ultra-small center-align" >Terminal</th>

			<th class="ultra-small center-align">Tarjeta</th>
			<th width="100" class="ultra-small center-align">Cantidad</th>  
			<th width="50" class="ultra-small center-align">Cuotas</th>   
			<th width="50" class="ultra-small center-align">Monto</th>
		</tr>
          
        </thead>

			<?php
		$cierre = new CierreLoteEx();
	//$condicion = '1=1 order by fechacierre desc';
		$cierrelotes = $cierre->cierredetallecompleto();
	
		if(count($cierrelotes)>0){
			echo "<tbody>\n";
				foreach ($cierrelotes as $cierre){
					echo "<tr>\n";
					$fechacierre = $funcion->datetimeMYSQtoFH($cierre['fechacierre']);
					echo "<td class=\"ultra-small center-align\" >" . $fechacierre['fecha']." ".$fechacierre['hora']  . "</td>\n";
					echo "<td class=\"ultra-small center-align\" >" . $cierre['nrolote'] . "</td>\n";	
					echo "<td class=\"ultra-small center-align\" >" . $cierre['comercio'] . "</td>\n";		
					echo "<td class=\"ultra-small center-align\" >" . $cierre['terminal'] . "</td>\n";		
					echo "<td class=\"ultra-small center-align\">" . $cierre['tarjeta'] . "</td>\n";					
					echo "<td class=\"ultra-small center-align\">" . $cierre['cantidad'] . "</td>\n";
					echo "<td class=\"ultra-small center-align\" >" . $cierre['cuotas'] . "</td>\n";
					echo "<td class=\"ultra-small center-align\">" . $cierre['monto'] . "</td>\n";
					echo "</tr>\n";			
					
				}
			echo "</tbody>\n";
		}
	?>

    </table>							
							
							

                        </div>
						  
                      </li>
                    </ul>
                  </div>
                </div>			

        </section>
