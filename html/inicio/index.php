<?php 
$E = isset($_REQUEST['E'])?$_REQUEST['E']:"";
$P = isset($_REQUEST['P'])?$_REQUEST['P']:"";
$url_logo="images/logo.png";
$nombre_sistema="Ingreso al Sistema";
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


      <form id="formLoginBarrio" name="formLoginBarrio" class="login-form"  action="control.php" method="post" autocomplete="off" novalidate>
       <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo $url_logo;?>" alt="" width="270">
            <br>
            <p class="center login-form-text"><?php echo $nombre_sistema;?></p>
          </div>
        </div>
        <?php
		if ($E=="1"){
			?>
              <div id="card-alert" class="card red">
                      <div class="card-content white-text">
                      <?php 
					  switch ($P) 
					  {
						  case 3:
							  echo	"<p><i class='mdi-alert-error'></i>  Usuario incorrecto</p>";
						  	  break;
						  case 2:
							  echo	"<p><i class='mdi-alert-error'></i>  Usuario bloqueado</p>";
						  	  break;	 
						  case 4:
							  echo	"<p><i class='mdi-alert-error'></i>  No cuenta con los permisos necesarios</p>";
						  	  break;	 							  
 						  default:
							  echo	"<p><i class='mdi-alert-error'></i>  Error Unsuario</p>";

					  }
					  ?>
                        
                      </div>
                      <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <?php } ?>
        <div class="row margin">
          <div class="input-field col s12">
			  <i class="adc adc-password-6 prefix pt-5"></i>
           <!-- <i class="material-icons prefix pt-5 ">person_outline</i> -->
            <input id="usuario" name="usuario" type="text" data-error=".errorCampo1">
            <label for="usuario" >Usuario</label>
            <div class="errorCampo1"></div>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="adc adc-password-1 prefix pt-5"></i>
            <input id="contrasenia" name="contrasenia" type="password" data-error=".errorCampo2">
            <label for="contrasenia">Contraseña</label>
            <div class="errorCampo2"></div>
          </div>
        </div>
<!--        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recordarme</label>
          </div>
        </div>-->
        <div class="row">
          <div class="input-field col s12">

            <button class="waves-effect waves-light btn gradient-45deg-amber-amber z-depth-4 mr-1 col s12" type="submit" name="action">Ingresar
                                               <i class="material-icons right">input</i>
                                              </button>
			  
                                              
          </div>
        </div>
              </form>

        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="registro.php">Registrarse!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align ultra-small"><a href="recuperar.php">Recuperar Contraseña?</a></p>
          </div>          
        </div>


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
    <script type="text/javascript" src="../../js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="../../js/custom-script.js"></script>
	<!-- VERIFICACION -->
    <script type="text/javascript" src="../../externos/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="../../externos/jquery-validation/additional-methods.js"></script> 
    <!-- VERIFICACION -->
    


<!-- VERIFICACIOÓN -->

       
    <script type="text/javascript">
    $("#formLoginBarrio").validate({
        rules: {
            usuario: {
                required: true,
                minlength: 5
            },
            contrasenia: {
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
    
</body>

</html>