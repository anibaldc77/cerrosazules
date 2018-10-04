<?php 
include_once('../../clases/sysbarrio/funciones.class.php');
$funcion=new Funciones();

$E = isset($_REQUEST['E'])?$_REQUEST['E']:"";
$P = isset($_REQUEST['P'])?$_REQUEST['P']:"";
$Accion = isset($_REQUEST['Accion'])?$_REQUEST['Accion']:"";
$url_logo="images/logo.png";
$nombre_sistema="Recuperar Contraseña";
$nombre=isset($_REQUEST['nombre'])?$_REQUEST['nombre']:"";
$email=isset($_REQUEST['email'])?$_REQUEST['email']:"";
$usuario=isset($_REQUEST['usuario'])?$_REQUEST['usuario']:"";
$check=md5($email.$usuario.".*");	


//print_r($ipusuario);

if ($Accion==1){

	if ($check == $_POST['check']){

		$nombre=trim($nombre);
		$email=trim($email);
		$usuario=trim($usuario);
		$telefono=trim($telefono);
		
		if(($nombre<>"")and($email<>"")and($usuario<>"")){
			include_once('../../clases/sysbarrio/configuration.php');
			include_once("../../clases/sysbarrio/recuperaclave.class.php");		

			$ipusuario = $funcion->dirIP($_SERVER);	

			include_once("../../clases/sysbarrio/usuario.class.php");

			$usuarioDatos= new Usuario();
			$condicion=" nomusuario = '" . $usuario . "'";
			$usuariosel=$usuarioDatos->list_usuario($condicion);
			if(count($usuariosel)>0){
				$usuarioId=$usuariosel[0]->get_idUsuario();
			}else{
				$usuarioId="0";
			}
			
			
			$pedidousuario= new Recuperaclave();
			$ipusuario = $funcion->dirIP($_SERVER);

			//TODO: Verifica si ya existe
//			$condicion = " nombre = '" . $nombre. "' and email = '" . $email. "' and usuario = '" . $usuario. "' ";
//			$pedido=$pedidousuario->list_recuperaclave($condicion);
//			if (count($pedido)>0){
//				print_r($pedido);
//				die();
//			}
			
			
			$idregistro=$pedidousuario->createnew_recuperaclave("", $nombre,$usuarioId, $usuario, $email, $telefono, $ipusuario, $check,0, date('Y-m-d h:i:s a'), "", date('Y-m-d h:i:s a'));

			if($idregistro>0){
				
					$mensajeMuestra['titulo']="Solicitud Ingresada";
					$mensajeMuestra['text']="Los Datos serán verificados, una vez realizado este proceso se le informará al correo electrónico registrado";
					$mensajeMuestra['tipo']="success"; //type: "warning", "error", "success" and "info"
					$mensajeMuestra['aceptar']="Cerrar";
					$mensajeMuestra['cancelar']="";
					$mensajeMuestra['imageUrl']="";
					$mensajeMuestra['timer']="";
					$mensajeMuestra['confirmButtonColor']="";
					$mensajeMuestra['allowEscapeKey']="";
					$mensajeMuestra['showConfirmButton']="";
	
				//TODO: Hacer Links para enviar por mail
			//$condicion = " nombre = '" . $nombre. "' and email = '" . $email. "' and usuario = '" . $usuario. "' ";
			$pedido=$pedidousuario->get_recuperaclave($idregistro);
			if (count($pedido)>0){
				
				$url=$pedido->get_check()."#".$pedido->get_idrecuperaclave();
				$url=urlencode($url);
				print_r("validar.php?link=".$url);
				//TODO: enviar Link por mail para luego verificarlo
					
			//	die();
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


      <form id="formLogin" name="formLogin" class="login-form"  action="" method="post" autocomplete="off" novalidate>

       <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo $url_logo;?>" alt="" width="270">
            <br>
            <p class="center login-form-text"><?php echo $nombre_sistema;?></p>
          </div>
        </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-people2 prefix pt-5 "></i>
              <input id="nombre" name="nombre" type="text">
              <label for="nombre" class="center-align">Apellido, Nombre</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-password-6 prefix pt-5"></i>
              <input id="usuario" name="usuario" type="text">
              <label for="usuario" class="center-align">Usuario</label>
            </div>
          </div>
          <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-email3 prefix pt-5"></i>
              <input id="email" name="email" type="text">
              <label for="email" class="center-align">Email</label>
            </div>
          </div>		  
          <div class="row margin">
            <div class="input-field col s12">
              <i class="adc adc-technology-1 prefix pt-5"></i>
              <input id="telefono" name="telefono" type="text">
              <label for="telefono" class="center-align">Teléfono</label>
            </div>
          </div>		  
          <div class="row">
            <div class="input-field col s12">
	            <button class="btn orange waves-effect waves-light col s12" type="submit" value="1" name="Accion"  id="Accion" onClick="convierteMd5(this.form)">Recuperar Contraseña
                                              <i class="material-icons right">input</i>
                                             </button>
            </div>
			  <input id="check" name="check" type="hidden">
            <div class="input-field col s12">
              <p class="margin center medium-small sign-up">¿Ya se encuentra registrado? <a href="index.php">Acceder</a></p>
            </div>
          </div>
        </form>

	<script>
/*	function convierteMd5(formulario){
		var nombre;
		var email;
		var clave;
		var text;
		text = '85545521';
		var resultado;
		nombre = document.getElementById("nombre").value;
		email = document.getElementById("email").value;
		clave = document.getElementById("clave").value;
		resultado = md5(nombre + email + clave+text);
		//alert("El Hash MD5 es:\n" + resultado);
		document.getElementById("check").value = resultado
	} */
		
	function convierteMd5(formulario){
		var nombre;
		var email;
		var usuario;
		var resultado;

		nombre = document.getElementById("nombre").value;
		email = document.getElementById("email").value;
		usuario = document.getElementById("usuario").value;
		resultado = md5convert(email + usuario);
		//resultado = md5(nombre + email + clave+text);
		//alert("El Hash MD5 es:\n" + resultado);
		document.getElementById("check").value = resultado
	}		

	</script>

    </div>
  </div>
  
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
            nombre: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
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