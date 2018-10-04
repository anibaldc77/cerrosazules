<?php 
include_once('../../clases/funciones.class.php');
include_once('../../clases/seguridad/configuration.php');
include_once("../../clases/seguridad/recuperaclave.class.php");	
include_once("../../clases/seguridad/usuario.class.php");

$funcion=new Funciones();


$E = isset($_REQUEST['E'])?$_REQUEST['E']:"";
$P = isset($_REQUEST['P'])?$_REQUEST['P']:"";
$Accion = isset($_REQUEST['Accion'])?$_REQUEST['Accion']:"";
$url_logo="images/logo.png";
//validar.php?link=76b13f649bd2ded1813476c4b36ece29!4
$link=isset($_REQUEST['link'])?urldecode(trim($_REQUEST['link'])):"";
list($checkLink,$idregistro)=explode("#", $link);

//print_r(urlencode( $_REQUEST['link']));
//print_r("check=".$checkLink);
//print_r("<br>idregistro=".$idregistro);
$nombre_sistema="Actualizar Contraseña";
$nombre=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:"";
$clave=isset($_REQUEST['clave'])?$_REQUEST['clave']:"";
$clave1=isset($_REQUEST['clave1'])?$_REQUEST['clave1']:"";
$usuario=isset($_REQUEST['usuario'])?$_REQUEST['usuario']:"";
$check=md5($usuario.".*");	

if ($Accion==1){

	if ($check == $_POST['check']){
//print_r("check ".$check."==" .$_POST['check']);
		$clave1=trim($clave1);
		$clave=trim($clave);
		$usuario=trim($usuario);
		
		
		if(($usuario<>"")and($clave<>"")and($clave==$clave1)and ($idregistro<>"")){
	
			$ipusuario = $funcion->dirIP($_SERVER);	

			$recupera= new Recuperaclave();
			$recuperaitem = $recupera->get_recuperaclave($idregistro);
			$idUsuarioACambiar=$recuperaitem->get_idUsuario();
			$verificado = $recuperaitem->get_verificado();
			$usuarioDatos= new Usuario();
			$condicion=" usuario = '" . $usuario . "'";
			$usuariosel=$usuarioDatos->list_usuario($condicion);
			if(count($usuariosel)>0){
				$usuarioId=$usuariosel[0]->get_idUsuario();
			}else{
				$usuarioId="0";
			}
			
			if (($idUsuarioACambiar == $usuarioId)and($usuarioId<>'0')and($verificado=='0')){
				$pprop = array("clave"=>$clave,
							  "__modificoUsuario" => $_SESSION['idLegajo'],
							  "__modificoFecha" => date('Y-m-d h:i:s a'));

				$usuarioDatos->update_usuario($usuarioId,$pprop);

				$pprop = array("verificado"=>"1",
							  "_tiempo" => date('Y-m-d h:i:s a'));

					$recuperaitem->update_recuperaclave($idregistro,$pprop);
			/*	print_r("check ".$usuarioId."<br>");
				print_r($_POST['check']);*/
					$mensajeMuestra['titulo']="Acción Realizada";
					$mensajeMuestra['text']="La contraseña ha sido modificada";
					$mensajeMuestra['tipo']="success"; //type: "warning", "error", "success" and "info"
					$mensajeMuestra['aceptar']="Cerrar";
					$mensajeMuestra['cancelar']="";
					$mensajeMuestra['imageUrl']="";
					$mensajeMuestra['timer']="";
					$mensajeMuestra['confirmButtonColor']="";
					$mensajeMuestra['allowEscapeKey']="";
					$mensajeMuestra['showConfirmButton']="";	
				$checkLink="";
			}else{
				$error=5;
			}
			
				
			}else{
					$mensajeMuestra['titulo']="Datos NO Ingresados";
					$mensajeMuestra['text']="Existió un problema al ingresar los datos al sistema, vuelva a ingresar los datos y reenvíe el formulario";
					$mensajeMuestra['tipo']="error"; //type: "warning", "error", "success" and "info"
					$mensajeMuestra['aceptar']="Cerrar";
					$mensajeMuestra['cancelar']="";
					$mensajeMuestra['imageUrl']="";
					$mensajeMuestra['timer']="";
					$mensajeMuestra['confirmButtonColor']="";
					$mensajeMuestra['allowEscapeKey']="";
					$mensajeMuestra['showConfirmButton']="";
			}
		}
}



	


	
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="Acceso de Usuario Registrado">
  <meta name="keywords" content="Acceso de Usuario Registrado">

  <title><?php echo $nombre_sistema;?></title>

  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="images/favicon" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="images/favicon" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="images/favicon" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="images/favicon" sizes="16x16" href="images/favicon/favicon-16x16EPAS.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">  
  <!-- Favicons-->

  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
	
  <link href="../../css/materialize/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../css/materialize/style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../css/fonts/adc/style.css" type="text/css" rel="stylesheet" media="screen,projection">	
	<!-- CSS VALIDACIÓN -->
	<link href="../../externos/jquery-validation/jquery.validate.css" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- Custome CSS-->    
    <link href="css/sitio.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../../css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
	<!-- MENSAJES -->
  <link href="../../externos/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- MENSAJES -->
	<link href="../../externos/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>
	<?php
	
	if(($checkLink<>'')and ($idregistro<>'')){

	$recupera= new Recuperaclave();
	$recuperaitem = $recupera->get_recuperaclave($idregistro);

	//$clave=$recuperaitem->get_clav
//print_r("<br>");	
//print_r($recuperaitem->get_check());
//	print_r("<br>");
//print_r($check);	
	
?>

<body class="blue-grey">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">


 
       <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo $url_logo;?>" alt="" width="270">
            <br>
            <p class="center login-form-text"><?php echo $nombre_sistema;?></p>
          </div>
        </div>
<?php
			if(count($recuperaitem)>0){
		
		$usuariocambia=$recuperaitem->get_usuario();
		$idusuariocambia=$recuperaitem->get_idUsuario();
		$verificado=$recuperaitem->get_verificado();
		$tiempo=$recuperaitem->get_fechasolicitud();
		list($dia,$hora)=explode(" ",$tiempo);
		list($anio, $mes, $dia)=explode("-",$dia);
		$hora1 = $funcion->FechaHoratoHora($tiempo);
		$fecha1 = date_create($anio."-".$mes."-".$dia. " ". $hora1);
		$fecha1 = date_format($fecha1, 'M d Y H:i:s');	
		$sumaHora = $funcion->diferenciaFechas(date('M d Y H:s'), $fecha1);

//		print_r("<br>Fecha = ");	
//		print_r($fecha1);
//		print_r("<br>");	
//		print_r($sumaHora);

		if(($sumaHora['dias']==0)and($verificado==0)){
			if($checkLink==$recuperaitem->get_check()){
			//	print_r($recuperaitem);
				$usuarioBusca= new Usuario();
				$condicion="usuario = '" . $recuperaitem->get_usuario() . "'";
				$usuariosel=$usuarioBusca->list_usuario($condicion);
				$usuarioACambiar=$usuariosel[0]->get_usuario();
				$idUsuarioACambiar=$usuariosel[0]->get_idUsuario();
			}else{
				$error=1; // No corresponde el codigo verificador
			}
		}else{
			if($verificado){
				$error=5; //Links Utilizado
			}else{
				$error=3; //Links Expirado
				}
		}
	}else{
			$error=2; //No existe el Item buscado
		}
		
		if(($usuariocambia==$usuarioACambiar)and($idusuariocambia==$idUsuarioACambiar)and($error=="")){
	/*	print_r("<br>");
		print_r($usuariosel);		
	*/
	?>		
     <form id="formLogin" name="formLogin" class="login-form"  action="" method="post" autocomplete="off" novalidate>
		
          <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-password-6 prefix pt-5"></i>
              <input readonly id="usuario" name="usuario" type="text" value="<?php echo $usuarioACambiar;?>">
              <label for="usuario" class="center-align">Usuario</label>
            </div>
          </div>		  
            <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-password-1 prefix pt-5"></i>
              <input id="clave" name="clave" type="password">
              <label for="clave">Contraseña</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-password-1 prefix pt-5"></i>
              <input id="clave1" name="clave1" type="password">
              <label for="clave1">Repetir Contraseña</label>
            </div>
          </div>		  
          <div class="row">
            <div class="input-field col s12">
	            <button class="btn orange waves-effect waves-light col s12" type="submit" value="1" name="Accion"  id="Accion" onClick="convierteMd5(this.form)">Modificar Contraseña
                                              <i class="material-icons right">input</i>
                                             </button>
            </div>
			  <input id="check" name="check" type="hidden">
			  <input id="link" name="link" type="hidden" value="<?php echo $_REQUEST['link'];?>">
			  
          </div>
        </form>

	<script>
		
	function convierteMd5(formulario){
		var usuario;
		var resultado;
		usuario = document.getElementById("usuario").value;
		resultado = md5convert(usuario);
		document.getElementById("check").value = resultado
	}		

	</script>

		<?php
		}else{
			?>
	
			         <div id="card-alert" class="card red">
                      <div class="card-content white-text">
                     	<p><i class='mdi-alert-error'></i>
							<?php
						switch($error)
						{
							case 1:
								echo "001 - El Links Utilizado a expirado ";
								break;
							case 2:
								echo "002 - El Links Utilizado a expirado ";
								break;
							case 3:
								echo "003 - Links Expirado ";
								break;								
							case 5:
								echo "005 - El Links Ya ha sido Utilizado";
								break;	
							default:
								echo "000 - El Links Utilizado a expirado ";
								break;								
						}
			
			?>
							
						  
						  </p>
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
	<?php
					$mensajeMuestra['titulo']="Datos NO Ingresados";
					$mensajeMuestra['text']="Existió un problema al ingresar los datos al sistema, vuelva a ingresar los datos y reenvíe el formulario";
					$mensajeMuestra['tipo']="error"; //type: "warning", "error", "success" and "info"
					$mensajeMuestra['aceptar']="Cerrar";
					$mensajeMuestra['cancelar']="";
					$mensajeMuestra['imageUrl']="";
					$mensajeMuestra['timer']="";
					$mensajeMuestra['confirmButtonColor']="";
					$mensajeMuestra['allowEscapeKey']="";
					$mensajeMuestra['showConfirmButton']="";
			
		}
			?>
		     <div class="input-field col s12">
              <p class="margin center medium-small sign-up"><a href="index.php">Volver</a></p>
				 <br>
            </div>
    </div>
  </div>
 
	   <?php
	
	
}
	?>
	
  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="../../externos/jquery-3.2.1.min.js"></script>
    <!--angularjs-->
    <script type="text/javascript" src="../../js/materialize.min.js"></script>  
  <!--materialize js-->
  <script type="text/javascript" src="../../externos/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="../../externos/md5/md5.pack.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
	<!-- VERIFICACION -->
    <script type="text/javascript" src="../../externos/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="../../externos/jquery-validation/additional-methods.js"></script> 
    <!-- VERIFICACION -->
    


<!-- VERIFICACIOÓN -->

       
    <script type="text/javascript">
    $("#formLogin").validate({
        rules: {
            clave: {
				required: true,
				minlength: 4
			},
			clave1: {
				equalTo: "#clave"
    		},		
            usuario: {
				required: true,
				minlength: 4
			},

        },

        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
    <!-- VERIFICACIÓN -->
	
	<!--Mensajes -->
    	

	<script type="text/javascript" src="../../externos/sweetalert/dist/sweetalert.min.js"></script> 
	
	<?php
	echo (isset($mensajeMuestra))?$funcion->mensajeInformativo($mensajeMuestra):"";
	unset($mensajeMuestra);
	?>

</body>

</html>