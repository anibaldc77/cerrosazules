<?php 

include_once("itenmenu.class.php"); 
class muestraMenu extends Itenmenu
{
	var $nivel;

	function get_nivel( ) {
        return $this->nivel;
    }
	
    function set_nivel( $nivel ) {
        $this->nivel = $nivel;
    }
	
	//use menu;
	private function colocaLenguaje($lenguaje = 0)  
	{  
    	switch ($lenguaje){
			case 0:
				$charset= "iso-8859-1";
		}
		return "<meta http-equiv=\"Content-Type\" content=\"text/html;\" charset=\"" . $charset ."\"/>";
	} 

	private function colocaMenu($sistema,$A=0,$SA,$posicion=2, $colorFondo = "red", $colorletra="black-text text-darken-4")  
	{  
		include_once('funciones.class.php');
		$funcion = new Funciones();
    	//$menuItem = new muestraMenu();
		$A = ($A<>"")?$A:"1";
		$condicion = ($posicion==2)?" accion = ". $A . " and ":"";
  		$condicion .= " idObjeto = " . $sistema . " and posicion = ". $posicion ." order by orden";
		//print_r($condicion);
		$menuItems = parent::list_itenmenu($condicion);
		
		$colorFondo=($posicion==2)?$colorFondo:"";
		$colorletra=($posicion==2)?$colorletra:"";		
		if($posicion==2){
			//print_r($_SESSION);
			$envia = "<nav>\n
  				  <div class=\"nav-wrapper ".$colorFondo."\">\n";
		}else{
			$envia="";	
		}
		$envia .="<ul class=\"collapsible collapsible-accordion\">\n";
		
		foreach($menuItems as $menuItem){
			
			if($menuItem->get_habilitado()==1){

				if($funcion->permControl(SISTEMABASE,$menuItem->get_idTipoPermiso()))
				{
					$iconoUrl = ($menuItem->get_iconoUrl()<>'')?$menuItem->get_iconoUrl():"";
					if($posicion==2){
						$envia .= (($A==$menuItem->get_accion()) and ($SA==$menuItem->get_subaccion()))?"<li class=\"bold active\">":"<li class=\"bold\">";
					}else{
						$envia .= ($A==$menuItem->get_accion())?"<li class=\"bold active\">":"<li class=\"bold\">";
					}
					$accion = ($menuItem->get_accion()<>"")?"&A=".$menuItem->get_accion():"";
					$accion .= ($menuItem->get_subaccion()<>"")?"&SA=".$menuItem->get_subaccion():"";
					$url =($menuItem->get_url()<>"")?$menuItem->get_url:"";;
					$envia .= "<a href=\"?S=" . SISTEMABASE . $accion .$url."\" class=\"waves-effect waves-cyan tooltipped\" title=\"". utf8_encode($menuItem->get_alternativo())."\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"". utf8_encode($menuItem->get_alternativo())."\">\n";
					if (trim($menuItem->get_iconoFont())<>""){
						$envia .= "<i class=\"".$menuItem->get_iconoFont()." " . $colorletra . " \" title=\"". utf8_encode($menuItem->get_alternativo())."\"></i>";
					}elseif (trim($menuItem->get_iconoFont())<>""){
						$envia .= (trim($menuItem->get_iconoUrl())<>'')?"<img src='".trim($menuItem->get_iconoUrl()) ."'  alt='".trim(utf8_encode($menuItem->get_alternativo())) ."'  title='".trim(utf8_encode($menuItem->get_titulo())) ."' class = 'EnviarImg'>":utf8_encode($menuItem->get_descripcion());
					}
					if($posicion==1){
						$coloca=utf8_encode($menuItem->get_titulo());
					 	$envia .= "<span class=\"nav-text\">".$coloca . "</span>";
					}
					$envia .= "</a>";
					$envia .= "</li>";
					  
				}
			}
		}
	/*	$envia .="  <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i class=\"mdi-action-invert-colors\"></i> CSS</a>
                        <div class=\"collapsible-body\">
                            <ul>
                                <li><a href=\"css-typography.html\">Typography</a>
                                </li>
                                <li><a href=\"css-icons.html\">Icons</a>
                                </li>
                                <li><a href=\"css-animations.html\">Animations</a>
                                </li>
                                <li><a href=\"css-shadow.html\">Shadow</a>
                                </li>
                                <li><a href=\"css-media.html\">Media</a>
                                </li>
                                <li><a href=\"css-sass.html\">Sass</a>
                                </li>
                            </ul>
                        </div>
                    </li>";
					*/
		$envia .="</ul>\n";
		
		if($posicion==2){
  			$envia .="</div>\n
					</nav>";			
		}
		unset($funcion);
      	return $envia;  
   }     
	
	public function armaMenu($sistema,$A,$SA,$posicion="",$colorFondo="", $colorLetra=""){
		$envia= $this->colocaLenguaje(0);
		$envia.="\n".$this->colocaMenu($sistema,$A,$SA,$posicion,$colorFondo, $colorLetra);
		return $envia;
	}



	
	public function armaMenuv2($sistema,$A,$SA,$posicion="",$colorFondo="", $colorLetra=""){
		$envia= $this->colocaLenguaje(0);
		$envia.="\n".$this->colocaMenuv2($sistema,$A,$SA,$posicion,$colorFondo, $colorLetra);
		return $envia;
	}
	
	function padrehijos($idObjeto='',$posicion=1){
		$objeto=($idObjeto<>'')?" idObjeto = ".$idObjeto:"";
		$posicion=($posicion<>'')?" posicion = ".$posicion:"";
		$consulta=($objeto<>"")?" where " . $objeto:"";
		$consulta.=($posicion<>"")?($consulta<>"")?" and " . $posicion:" where " . $posicion:"";
		
		$sqlStatement = " SELECT p.*, ( 
				SELECT LPAD(parent.idItemMenu, 5, '0') 
					FROM itenmenu parent 
					WHERE parent.idItemMenu = p.idItemMenu AND parent.idItemMenuPadre = 0 
			 UNION 
				SELECT CONCAT(LPAD(parent.idItemMenu, 5, '0'), '.', LPAD(child.idItemMenu, 5, '0')) 
					FROM itenmenu parent INNER JOIN itenmenu child ON (parent.idItemMenu = child.idItemMenuPadre) 
					WHERE child.idItemMenu = p.idItemMenu AND parent.idItemMenuPadre = 0 
			 UNION 
				SELECT CONCAT(LPAD(parent.idItemMenu, 5, '0'), '.', LPAD(child.idItemMenu, 5, '0'), '.', LPAD(grandchild.idItemMenu, 5, '0')) 
					FROM itenmenu parent INNER JOIN itenmenu child ON (parent.idItemMenu = child.idItemMenuPadre) 
					INNER JOIN itenmenu grandchild ON (child.idItemMenu = grandchild.idItemMenuPadre) 
					WHERE grandchild.idItemMenu = p.idItemMenu AND parent.idItemMenuPadre = 0 ) 
			AS LEVEL FROM itenmenu p " . $consulta . " ORDER BY LEVEL";
	//	print_r($sqlStatement);
		
		$dbConn = $GLOBALS['dbConn'];
		$__resObj = $dbConn->doQuery($sqlStatement);

         $__collectionOfObjects = array();
         foreach($__resObj as $__rs) { 
         $__newObj = new muestraMenu();

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
			$__newObj->set_nivel($__rs['LEVEL']);
        }

            array_push($__collectionOfObjects, $__newObj);
         }

         return $__collectionOfObjects;
	}

	private function colocaMenuv2($sistema,$A=0,$SA,$posicion=2, $colorFondo = "blue", $colorletra="black-text text-darken-4")  
	{  
		include_once('funciones.class.php');
		$funcion = new Funciones();
    	//$menuItem = new muestraMenu();
		$A = ($A<>"")?$A:"1";
		$condicion = ($posicion==2)?" accion = ". $A . " and ":"";
  		$condicion .= " idObjeto = " . $sistema . " and posicion = ". $posicion ." order by orden";
		$colorFondo=($posicion==2)?$colorFondo:"";
		$colorletra=($posicion==2)?$colorletra:"";	
		
//		print_r($condicion);
		

	
/*		if($posicion==2){
			//print_r($_SESSION);
			$envia = "<nav>\n
  				  <div class=\"nav-wrapper ".$colorFondo."\">\n";
		}else{
			$envia="";	
		}
	*/	
		$envia .="<li class=\"no-padding\">\n";
        $envia .="<ul class=\"collapsible\" data-collapsible=\"accordion\">\n";

		
		$menuItems = $this->padrehijos($sistema,$posicion);
			$nivelSupHab1="";
			$nivelSupHab2="";
			$nivelSupHab3="";
			$nivelSupHabPerm1="";
			$nivelSupHabPerm2="";
			$nivelSupHabPerm3="";		
			$nivelSiguiente="";
			$nivelActual="";
			$i=0;
		print_r($menuItems);
		foreach($menuItems as $menuItem){
			
			$nivelActual=explode(".",$menuItem->get_nivel());
			if((count($menuItems)-1)>$i){
				$nivelSiguiente=explode(".",$menuItems[$i+1]->get_nivel());
			}else{
				$nivelSiguiente="";
			}
			
			
		/*	print_r("<br>Item Actual = ");
			
			print_r($nivelActual);
			print_r("<br>Item Siguiente = ");
			print_r($nivelSiguiente);
		*/	
			$nivel1="";
			$nivel2="";
			$nivel3="";
			
			list($nivel1,$nivel2,$nivel3)=explode(".",$menuItem->get_nivel());
			if(($nivel1<>"")and($nivel2=="")and($nivel3=="")){
				$nivelSupHab1=$menuItem->get_habilitado();
				$nivelSupHabPerm1=$funcion->permControl(SISTEMABASE,$menuItem->get_idTipoPermiso());
				$nivelSupHab2="";
				$nivelSupHab3="";
				$nivelSupHabPerm2="";
				$nivelSupHabPerm3="";
				$nivelActualN=1;
			}elseif(($nivel1<>"")and($nivel2<>"")and($nivel3=="")){
				$nivelSupHab2=$menuItem->get_habilitado();
				$nivelSupHabPerm2=$funcion->permControl(SISTEMABASE,$menuItem->get_idTipoPermiso());
				$nivelSupHab3="";
				$nivelSupHabPerm3="";
				$nivelActualN=2;
			}elseif(($nivel1<>"")and($nivel2<>"")and($nivel3<>"")){
				$nivelSupHab3=$menuItem->get_habilitado();
				$nivelSupHabPerm3=$funcion->permControl(SISTEMABASE,$menuItem->get_idTipoPermiso());
				$nivelActualN=3;
			}

			if($menuItem->get_habilitado()==1){

				if($funcion->permControl(SISTEMABASE,$menuItem->get_idTipoPermiso())){
								/*	print_r("<br>Item Actual = ");		
									print_r($nivelSupHab1 ." - " . $nivelSupHab2 ." - " . $nivelSupHab3 ." - " . $nivelSupHabPerm1 ." - " . $nivelSupHabPerm2 ." - " . $nivelSupHabPerm3 ." - " . $nivelAcatual		   
										   );*/
					if((($nivelSupHab1<>'0')and($nivelSupHab2<>'0')and($nivelSupHab3<>'0'))and ($nivelSupHabPerm1<>'0')and($nivelSupHabPerm2<>'0')and($nivelSupHabPerm3<>'0')){
						
					
						$iconoUrl = ($menuItem->get_iconoUrl()<>'')?$menuItem->get_iconoUrl():"";

//						
						print_r("<br>Item Actual = ");		
						print_r($nivelActualN);
						print_r("<br>Item Anterior = ");		
						print_r($nivelAnteriorN);	
						
						$envia .= ($nivelActualN<$nivelAnteriorN)?" </ul> </div>":"";
						$envia .= (($nivelActualN>$nivelAnteriorN)and($nivelAnteriorN<>""))?"<div class=\"collapsible-body\" style=\"display: block;\"><ul>":"";
						$activarflecha=(($nivelActualN>$nivelAnteriorN)and($nivelAnteriorN<>""))?" collapsible-header ":"";
						
						
						$activar = ($A==$menuItem->get_accion())?" active ":"";
						$envia .= "<li class=\"bold ".$activar."\">";
						$accion = ($menuItem->get_accion()<>"")?"&A=".$menuItem->get_accion():"";
						$accion .= ($menuItem->get_subaccion()<>"")?"&SA=".$menuItem->get_subaccion():"";
						$url =($menuItem->get_url()<>"")?$menuItem->get_url:"";
						$envia .= "<a href=\"?S=" . SISTEMABASE . $accion .$url."\" class=\"".$activarflecha. $activar." waves-effect waves-cyan tooltipped\" title=\"". utf8_encode($menuItem->get_alternativo())."\" data-position=\"top\" data-delay=\"50\" data-tooltip=\"". utf8_encode($menuItem->get_alternativo())."\">\n";
						
					if (trim($menuItem->get_iconoFont())<>""){
						$envia .= "<i class=\"".$menuItem->get_iconoFont()." " . $colorletra . " \" title=\"". utf8_encode($menuItem->get_alternativo())."\"></i>";
					}elseif (trim($menuItem->get_iconoFont())<>""){
						$envia .= (trim($menuItem->get_iconoUrl())<>'')?"<img src='".trim($menuItem->get_iconoUrl()) ."'  alt='".trim(utf8_encode($menuItem->get_alternativo())) ."'  title='".trim(utf8_encode($menuItem->get_titulo())) ."' class = 'EnviarImg'>":utf8_encode($menuItem->get_descripcion());
					}
					if($posicion==1){
						$coloca=utf8_encode($menuItem->get_titulo());
					 	$envia .= "<span class=\"nav-text\">".$coloca . "</span>";
					}
					$envia .= "</a>";
					$envia .= "</li>";
					
					}
				}
			}
			
			$nivelAnteriorN=$nivelActualN;
			$i++;
		}
	/*	$envia .="  <li class=\"bold\"><a class=\"collapsible-header waves-effect waves-cyan\"><i class=\"mdi-action-invert-colors\"></i> CSS</a>
                        <div class=\"collapsible-body\">
                            <ul>
                                <li><a href=\"css-typography.html\">Typography</a>
                                </li>
                                <li><a href=\"css-icons.html\">Icons</a>
                                </li>
                                <li><a href=\"css-animations.html\">Animations</a>
                                </li>
                                <li><a href=\"css-shadow.html\">Shadow</a>
                                </li>
                                <li><a href=\"css-media.html\">Media</a>
                                </li>
                                <li><a href=\"css-sass.html\">Sass</a>
                                </li>
                            </ul>
                        </div>
                    </li>";
					*/
		$envia .="</li></ul>\n";
		$envia .="
              <ul class=\"collapsible\" data-collapsible=\"accordion\">
                <li class=\"bold\">
                  <a class=\"collapsible-header waves-effect waves-cyan\">
                    <i class=\"material-icons\">photo_filter</i>
                    <span class=\"nav-text\">Menu Levels</span>
                  </a>
                  <div class=\"collapsible-body\" style=\"display: none;\">
                    <ul class=\"collapsible\" data-collapsible=\"accordion\">
                      <li>
                        <a href=\"ui-basic-buttons.html\">
                          <i class=\"material-icons\">keyboard_arrow_right</i>
                          <span>Second level</span>
                        </a>
                      </li>
                      <li class=\"bold\">
                        <a class=\"collapsible-header waves-effect waves-cyan\">
                          <i class=\"material-icons\">keyboard_arrow_right</i>
                          <span class=\"nav-text\">Second level child</span>
                        </a>
                        <div class=\"collapsible-body\" style=\"display: none;\">
                          <ul class=\"collapsible\" data-collapsible=\"accordion\">
                            <li>
                              <a href=\"ui-basic-buttons.html\">
                                <i class=\"material-icons\">keyboard_arrow_right</i>
                                <span>Third level</span>
                              </a>
                            </li>
                            <li class=\"bold\">
                              <a class=\"collapsible-header waves-effect waves-cyan\">
                                <i class=\"material-icons\">keyboard_arrow_right</i>
                                <span class=\"nav-text\">Third level child</span>
                              </a>
                              <div class=\"collapsible-body\">
                                <ul class=\"collapsible\" data-collapsible=\"accordion\">
                                  <li>
                                    <a href=\"ui-basic-buttons.html\">
                                      <i class=\"material-icons\">keyboard_arrow_right</i>
                                      <span>Forth level</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href=\"ui-extended-buttons.html\">
                                      <i class=\"material-icons\">keyboard_arrow_right</i>
                                      <span>Forth level</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
           ";
		if($posicion==2){
  			$envia .="</div>\n
					</nav>";			
		}
		unset($funcion);
      	return $envia;  
   }     

}

