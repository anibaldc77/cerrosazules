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
			 <a class="waves-effect waves-light btn modal-trigger" href="#modalfrm1">Modal</a>
	<div id="modalfrm1" class="modalfrm">
		<?php	$validaFormulario = "formHojaRutaG"; ?>
                <form id="formgrabahojaruta" name="formgrabahojaruta" class="col s12" method="post" action="?S=<?php echo $_SESSION["sistemaid"];?>&A=<?php echo $A;?>&SA=<?php echo $SA;?>" enctype="multipart/form-data" >
              <div class="modal-content">
                <h4>Alta Información</h4>
               
				 <div class="row">
                
                  <h4 class="header2">Información Hoja Ruta</h4>
                  <div class="row">

			
				<div class="row">  
                    <div class="input-field col m12 l2 s12">
                        <i class="adc adc-calendar5 prefix pink-text text-darken-4"></i>
                        <label for="fecha">Fecha</label>
                        <input id="fecha" name="fecha" type="text" class="datepicker" data-error=".errorFecha" value="<?php echo $fechasel;?>">
                        <div class="errorFecha"></div>
                    </div>				                                   
					<div class="input-field col l4 m12 s12">
						<i class="adc adc-customer-service prefix pink-text text-darken-4"></i>
						<label for="responsable">Responsable</label>
						<input id="responsable" name="responsable" type="text" data-error=".errorResponsable" value="<?php echo $responsablesel;?>" class="left-align">
						<div class="errorResponsable"></div>
					</div>
					
					<div class="input-field col l4 m12 s12">
					<i class="adc adc-airline_seat_recline_normal prefix pink-text text-darken-4"></i>
						<label for="maneja">Maneja</label>
						<input id="maneja" name="maneja" type="text" data-error=".errorManeja" value="<?php echo $manejasel;?>" class="right-align">
						<div class="errorManeja"></div>
					</div>
				</div>	

				<div id="items">
						<div class="input-field col l12 m12 s12">
							
							<span class="col l2 m2 s12"><input type="text" name="nombrein[]"></span><span class="col l2 m2 s12"><input type="text" name="input1[]"></span><span class="col l2 m2 s12"><input type="text" name="input2[]"></span><i class="add adc adc-add prefix pink-text text-darken-4"></i>
						  </div>

				</div>	  
				<div class="row">                                     
					<div class="input-field col l4 m12 s12">
						<i class="adc adc-user7 prefix pink-text text-darken-4"></i>
						<label for="acompa1">Acompañante 1</label>
						<input id="acompa1" name="acompa1" type="text" data-error=".errorAcompa1" value="<?php echo $acompa1sel;?>" class="right-align">
						<div class="errorAcompa1"></div>
					</div>
					
					<div class="input-field col l4 m12 s12">
					<i class="adc adc-user7 prefix pink-text text-darken-4"></i>
						<label for="acompa2">Acompañante 2</label>
						<input id="acompa2" name="acompa2" type="text" data-error=".errorAcompa2" value="<?php echo $acompa2sel;?>" class="right-align">
						<div class="errorAcompa2"></div>
					</div>
					  </div>
					  <div class="row">
					
<div class="input-field col l4 m12 s12">
						<i class="adc adc-user7 prefix pink-text text-darken-4"></i>
						<label for="acompa3">Acompañante 3</label>
						<input id="acompa3" name="acompa3" type="text" data-error=".errorAcompa3" value="<?php echo $acompa3sel;?>" class="right-align">
						<div class="errorAcompa3"></div>
					</div>
					
					<div class="input-field col l4 m12 s12">
					<i class="adc adc-user7 prefix pink-text text-darken-4"></i>
						<label for="acompa4">Acompañante 4</label>
						<input id="acompa4" name="acompa4" type="text" data-error=".errorAcompa4" value="<?php echo $acompa4sel;?>" class="right-align">
						<div class="errorAcompa4"></div>
					</div>
				</div>	
                <div class="row">                                     
                	<div class="input-field col m12 l10 s12">
                    	<i class="adc adc-list-12 prefix pink-text text-darken-4"></i>
                        	<textarea id="destinos" name="destinos" class="materialize-textarea validate" data-error=".errorDestinos" length="500"><?php echo $destinossel;?></textarea>
                            <label for="destinos">Destinos</label>
                        <div class="errorDestinos"></div>
                    </div>                                        
                </div>  
	                
                  </div>
			   
                 <input type="hidden" name="Accion" id="Accion" value="1">
                 <input type="hidden" name="idvehiculo" id="idvehiculo" value="<?php echo $idvehiculo;?>">  
                 <input type="hidden" name="idhojaruta" id="idhojaruta" value="<?php echo $idhojaruta;?>">         
		<!--			 <div class="input-field col s12">

                 </div> -->
               
						</div>
				  
				  
				  
				  
              </div>
              <div class="modal-footer">
				  <a href="#!" class="btn #546e7a blue-grey darken-1 modal-action modal-close waves-effect waves-red ">Salir</a>		
				  <button class="btn #388e3c green darken-2 waves-effect waves-light right submit" type="submit" name="Accion" value="1"><?php echo ($idhojaruta <>"")?"Modificar":"Grabar";?> <i class="mdi-content-send right"></i>
                     </button>  
              <!--  
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a> -->
              </div>
		 </form>
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
