	<link href="../../externos/data-tables/DataTables-1.10.18/css/jquery.dataTables.css" type="text/css" rel="stylesheet">	

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
                        <div class="collapsible-header gradient-45deg-light-blue-cyan white-text active">
                          <i class="material-icons">toll</i> Second Header</div>
                        <div class="collapsible-body cyan lighten-5 lighten-5">

							
<table id="example1" class="display" style="width:100%">
	<thead>
		<tr>
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
	
	<?php 
	//	$cierre = new Cierrelote();
	//	$condicion = '1=1 order by fechacomprobante desc';
	//	$cierrelistado = $cierre->list_cierrelote($condicion);
	//	print_r($cierrelistado);
	
	?>
	<tbody>
		
		
		<tr>
            <td class="ultra-small center-align" >Fecha de venta 1</td>
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
		<tr>
            <td class="ultra-small center-align" >Fecha de venta 2</td>
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
		<tr>
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

        </section>
        <!-- END CONTENT -->
      <!-- jQuery Library -->
      <script type="text/javascript" src="../../externos/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../externos/data-tables/DataTables-1.10.18/js/jquery.dataTables.js"></script>		
    <!--data-tables.js - Page Specific JS codes -->
    <script type="text/javascript" src="../../js/scripts/data-tables.js"></script>
