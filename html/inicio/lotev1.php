<?php 

//print_r($_POST);
/*include_once("../clases/vehiculos/vehiculo.class.php");	
include_once("../clases/vehiculos/hojarutaex.class.php");	
include_once("../clases/piezas/oficina.class.php");	
*/
	//BUSCA LOS DATOS DE LA PERSONA o MUESTRA EL FORMULARIO PARA CARGAR NUEVA PERSONA
$funcion = new Funciones();
$idvehiculo = (isset($_REQUEST['idvehiculo']))?$_REQUEST['idvehiculo']:"";
$mesSel = isset($_REQUEST['mesSel'])?$_REQUEST['mesSel']:"";
$anioSel = isset($_REQUEST['anioSel'])?$_REQUEST['anioSel']:"";
$inicio = isset($_REQUEST['inicio'])?$_REQUEST['inicio']:"";
$inicio = ($inicio<>"")?$inicio:date('d/m/Y');
$inicio = (($mesSel<>'')and($anioSel <>''))?$funcion->primerDiaMes($mesSel,$anioSel):$inicio;
$fin = isset($_REQUEST['fin'])?$_REQUEST['fin']:"";
$fin = ($fin<>"")?$fin:date('d/m/Y');
$fin = (($mesSel<>'')and($anioSel <>''))?$funcion->ultimoDiaMes($mesSel,$anioSel):$fin;	



//print_r($_POST	);

if($funcion->permControl(SISTEMABASE,4)){ // Permiso para Acceder a la consulta

// ********************* ACCIONES DEL FORMULARIO INFORMACIÓN *****************								
	

//print_r($_POST	);
	switch ($Accion){
		Case 1:	{

		
			break;	
			}
		Case 3:{//Busca Hoja Ruta Seleccionado

			break;
		}
		Case 4:{//Borra Hoja Ruta Seleccionado
			break;			
		}

	}
	
	
// ********************* FIN ACCIONES DEL FORMULARIO *************************	
	
?>
</div>
<!-- BUSCADOR -->
          <div class="section">
           <div class="row">
            <div class="col s12 m12 l12">
              <div class="card-panel">
                <div class="row">
                <form id="formbusca" name="formbusca" class="col s12" method="post" action="?S=<?php echo $_SESSION["sistemaid"];?>&A=<?php echo $A;?>&SA=<?php echo $SA;?>">
                  <h4 class="header2">Seleccionar Vehículo</h4>
                  <div class="row">
                   <div class="input-field col s12 m3 l3">
					<?php 
	   
				//	$vehiculos= new Vehiculo();
				//	$vehiculoListado =$vehiculos->list_vehiculo();
					   
					   ?>
                    
                    <select name="idvehiculo" id="idvehiculo" > <!-- onChange="document.forms['formbusca'].submit()" -->
                    	<?php $selec = ($idvehiculo=='')?"selected":""; ?>
                      <option value="" <?php echo $selec;?> >Seleccione Vehículo</option>
                      
                      <?php 

		/*			   foreach($vehiculoListado as $vehiculo){
						   	$urlfoto=(file_exists($vehiculo->get_urlfoto()))?$vehiculo->get_urlfoto():"images/avatar.jpg";	
						
						
					   		$nombre=utf8_encode($vehiculo->get_marca())." - ".utf8_encode($vehiculo->get_dominio());
							$selec=($idvehiculo==$vehiculo->get_idvehiculo())?"selected":"";
					  		echo "<option data-icon=\"". $urlfoto."\" class=\"large left circle \" value=\"".$vehiculo->get_idvehiculo()."\" ".$selec.">{$nombre}\n";  
					   }
					   */
					  ?>
                      
                    </select>

                          <label for="vehiculo">Vehículo</label>
                      </div>

                    </div>
                   <div class="row">
                     <?php
                 //       $registro = new HojarutaEx();
				//		$anioMarcaciones = $registro->aniosHojaRuta();

					 ?>                  
                     
                                        
                     <div class="input-field col s12 m2">
                     
                    <select name="mesSel">
                    <?php $selec=($mesSel=='')?"selected":""; ?>
                      <option value="" <?php echo $selec;?>></option>
                      <?php $selec=($mesSel=='1')?"selected":""; ?>
                      <option value="1" <?php echo $selec;?>>Enero</option>
                      <?php $selec=($mesSel=='2')?"selected":""; ?>
                      <option value="2" <?php echo $selec;?>>Febrero</option>
                      <?php $selec=($mesSel=='3')?"selected":""; ?>
                      <option value="3" <?php echo $selec;?>>Marzo</option>
                      <?php $selec=($mesSel=='4')?"selected":""; ?>
                      <option value="4" <?php echo $selec;?>>Abril</option>
                      <?php $selec=($mesSel=='5')?"selected":""; ?>
                      <option value="5" <?php echo $selec;?>>Mayo</option>
                      <?php $selec=($mesSel=='6')?"selected":""; ?>
                      <option value="6" <?php echo $selec;?>>Junio</option>
                      <?php $selec=($mesSel=='7')?"selected":""; ?>
                      <option value="7" <?php echo $selec;?>>Julio</option>
                      <?php $selec=($mesSel=='8')?"selected":""; ?>
                      <option value="8" <?php echo $selec;?>>Agosto</option>
                      <?php $selec=($mesSel=='9')?"selected":""; ?>
                      <option value="9" <?php echo $selec;?>>Septiembre</option>
                      <?php $selec=($mesSel=='10')?"selected":""; ?>
                      <option value="10" <?php echo $selec;?>>Octubre</option>
                      <?php $selec=($mesSel=='11')?"selected":""; ?>
                      <option value="11" <?php echo $selec;?>>Noviembre</option>
                      <?php $selec=($mesSel=='12')?"selected":""; ?>
                      <option value="12" <?php echo $selec;?>>Diciembre</option>

                    </select>
                    <label for="mes">Mes</label>
                    </div>

<div class="input-field col s12 m1">
  
                    <select name="anioSel">
                    <?php $selec=($anioSel=='')?"selected":""; ?>
                      <option value="" <?php echo $selec;?>></option>
                    <?php

						foreach($anioMarcaciones as $anioMarca)
						{
						//print_r($anioMarca . "==". $anioSel);	
						$selec=($anioMarca == $anioSel)?"selected":"";				
	                    echo  "<option value='".$anioMarca ."' ".$selec.">".$anioMarca ."</option> ";
						
						} ?>
                     </select>
                    <label for="mes">Año</label>
                    </div>
                                 
                    <div class="input-field col s12 m2">
                    	<i class="mdi-action-today prefix"></i>

                        <input type="text" name="inicio" id="inicio" value="<?php echo $inicio;?>"  class="datepicker">
                        <label for="inicio">Desde</label>
                    </div>
                    <div class="input-field col s12 m2">
                    	<i class="mdi-action-today prefix"></i>
                        <input type="text" name="fin" id="fin" value="<?php echo $fin;?>" class="datepicker">
                        <label for="fin">Hasta</label>
                    </div>
                    <div class="input-field col s12 m2">
                      <div class="input-field col s12 m12">
                        <button class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-search"></i> Buscar</button>
                      </div>
                    </div>
                  </div>	

                </form>
                </div>
              </div>
            </div>
          </div>
          
          </div>


	<?php

		//	print_r($_POST);
					
					?>
<div class="row">
	<div class="col s12 m12 l12">
		<div class="card-panel">
        	
			<div class="row">
				<div class="col s12 m12 l12">

  					<ul class="collapsible popout  collapsible-accordion" >
<?php 
	  $select = (($muestraelemento=="1")or($muestraelemento==""))?"active":""; 
?>
<?php 
	
	if((($idvehiculo<>'')and($idvehiculo<>0))or (($inicio<>"") and ($fin<>"")))
	   {		
	/******** DATOS DEL VEHÍCULO **********/ 
												
			//	$hojarutaSel= new  Hojaruta();
			
		//		$idelemento = (isset($_REQUEST['idelemento']))?$_REQUEST['idelemento']:0;

	  $select = ($muestraelemento=="1")?"active":""; 						
						?>
	<li >
		<div class="collapsible-header teal white-text active" >
  			<i class="adc adc-clipboard white-text" title="Agregar Nuevo Vehículo"></i> Hoja de Ruta 
  		</div>
		<div class="collapsible-body teal lighten-5" style="display: block;">
		<div class="row">
        	<div id="resultado">
            	<div id="row-grouping" class="section">
					<h4 class="header2">&nbsp;&nbsp;&nbsp;Hoja de Ruta </h4> 
					<div class="row">
						<div class="col s12 m12 l12">
	<table id="data-table-row-grouping" class="striped bordered"   cellspacing="0" width="100%">
	<thead>
		<tr>
        	<th  >Vehículo</th>
            <th class="ultra-small center-align" >Fecha</th>
			<th width="" class="ultra-small center-align">Área</th>
			<th class="ultra-small center-align" >Responsable</th>
			<th class="ultra-small center-align">Maneja</th>
			<th class="ultra-small center-align">Acompañantes</th>

<?php if($funcion->permControl(SISTEMABASE,4)){ // Permiso para Acceder a la consulta	 ?>	
			<th width="100" class="ultra-small center-align">Km <br>Recorridos</th>  
			<th width="50" class="ultra-small center-align">Combustible Inicial</th>   
			<th width="50" class="ultra-small center-align">Combustible Final</th>
<?php }	 ?>			

			<th width="" class="ultra-small center-align">Destinos</th> 	
		</tr>
	</thead>
	<tbody>
	<?php 
	
	//	$hojarutaSel= new HojarutaEx();
		$consulta = ($idvehiculo<>"" or $idvehiculo<>0)? " idvehiculo = " . $idvehiculo :"";
		if(($inicio<>"") and ($fin<>"")){
			list($dia,$mes,$anio) = explode("/",$inicio);
			$consulta1 = " fecha BETWEEN '" . $anio ."-". $mes."-". $dia .  "' AND '";
			list($dia,$mes,$anio) = explode("/",$fin);
			$consulta1 .= $anio ."-". $mes."-". $dia . "'";
		
		}

		$consulta = ($consulta<>"")?$consulta . " and ".$consulta1:$consulta1;
		$consulta = ($consulta<>"")?$consulta ." order by fecha DESC ":" 1=1 order by fecha DESC";
		 //  print_r("<br><hr>".$consulta. "<br>");		   
		//$consulta = " idvehiculo = " . $idvehiculo . " order by fecha DESC";
		//$hojarutaListado =$hojarutaSel->list_hojaruta($consulta);

		   
			foreach ($hojarutaListado as $hojarutaMuestra){
				
				//print_r($persona);
				//print_r("<br>");	
									
				echo "<tr ".$clase.">\n";	

				
				echo "<td class=\"ultra-small center-align\">";
				
				
				$condicion=" idvehiculo = '".$hojarutaMuestra->get_idvehiculo()."' ";
				$vehiculo =$vehiculos->list_vehiculo($condicion);

				echo $nombre=utf8_encode($vehiculo[0]->get_marca())." - ".utf8_encode($vehiculo[0]->get_dominio()). "</td>\n";

				echo "<td class=\"ultra-small\">";
					list($anio,$mes,$dia)=preg_split("/[\/-]+/", $hojarutaMuestra->get_fecha());
				echo $dia.'/'.$mes.'/'.$anio;
				
				echo "</td>\n";
				echo "<td class=\"ultra-small center-align\">";
				
				$oficinas= new Oficina();
				$condicion=" codOficina = '".$hojarutaMuestra->get_idarea()."' ";
				$oficinaListado =$oficinas->list_oficina($condicion);

				echo utf8_encode($oficinaListado[0]->get_nombreOficina()). "</td>\n";

				echo "<td class=\"ultra-small\">" .  utf8_encode($hojarutaMuestra->get_responsable()). "</td>\n";	
				echo "<td class=\"ultra-small\">" .  utf8_encode($hojarutaMuestra->get_maneja()). "</td>\n";
				echo "<td class=\"ultra-small\">" .  utf8_encode($hojarutaMuestra->get_acompa1()); 
				echo "<br>" .  utf8_encode($hojarutaMuestra->get_acompa2()); 
				echo "<br>" .  utf8_encode($hojarutaMuestra->get_acompa3()); 
				echo "<br>" .  utf8_encode($hojarutaMuestra->get_acompa4()); 
				echo "</td>\n";
		if(permControl(SISTEMABASE,62)){ // Permiso para Acceder a la consulta	 		

				echo "<td class=\"ultra-small right-align\">";
					echo (utf8_encode($hojarutaMuestra->get_kmfin())-utf8_encode($hojarutaMuestra->get_kminicio()));
			
				echo "</td>\n";			
				echo "<td class=\"center-align\">";
				switch ($hojarutaMuestra->get_combustibleinicio()){
					case 1:
						echo "<i class=\"adc adc-battery-empty small pink-text text-darken-4\"></i>";
						break;
					case 2:
						echo "<i class=\"adc adc-battery-25 small pink-text text-darken-4\"></i>";
						break;

					case 3:
						echo "<i class=\"adc adc-battery-50 small pink-text text-darken-4\"></i>";
						break;

					case 4:
						echo "<i class=\"adc adc-battery-75 small pink-text text-darken-4\"></i>";
						break;

					case 5:
						echo "<i class=\"adc adc-battery-full small pink-text text-darken-4\"></i>";
						break;
					default:
						echo "<i class=\"adc adc-battery-empty small pink-text text-darken-4\"></i>";
						break;
				}
				echo "</td>\n";

				echo "<td class=\"large center-align\">";
				switch ($hojarutaMuestra->get_combustiblefin()){
					case 1:
						echo "<i class=\"adc adc-battery-empty small pink-text text-darken-4\"></i>";
						break;
					case 2:
						echo "<i class=\"adc adc-battery-25 small pink-text text-darken-4\"></i>";
						break;

					case 3:
						echo "<i class=\"adc adc-battery-50 small pink-text text-darken-4\"></i>";
						break;

					case 4:
						echo "<i class=\"adc adc-battery-75 small 	prefix pink-text text-darken-4\"></i>";
						break;

					case 5:
						echo "<i class=\"adc adc-battery-full small prefix pink-text text-darken-4\"></i>";
						break;
					default:
						echo "<i class=\"adc adc-battery-empty small prefix pink-text text-darken-4\"></i>";
						break;
				}
			echo "</td>\n";
					}
				echo "<td class=\"ultra-small right-align\">" . utf8_encode($hojarutaMuestra->get_destinos()). "</td>\n";

			echo "</tr>\n";				
	}
	?>                      
	  </tbody>
  </table>
		</div>
	</div>
</div>
</div>
						</div>
						
					</li>
	
<?php 


 } ?>
<?php /******** FIN Hoja de Ruta DEL VEHÍCULO **********/ ?>			
								
					</ul>
				  

			</div>
		</div></div></div>

<?php




		


}else{
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

