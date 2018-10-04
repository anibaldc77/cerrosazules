<?php 
$S = isset ($_REQUEST['S'])?$_REQUEST['S']:""; //Sistema
$A = isset ($_REQUEST['A'])?$_REQUEST['A']:""; //Acción Menú
$SA = isset ($_REQUEST['SA'])?$_REQUEST['SA']:""; //Sub Acción Menú
$Accion = isset ($_REQUEST['Accion'])?$_REQUEST['Accion']:""; //Acción Formulario

?>

<!DOCTYPE html>
<html lang="en"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">

<?php


	include_once('include/parametros.php');
	include_once('../../clases/funciones.class.php');
	include_once('../../clases/seguridad/configuration.php');
	include_once('../../clases/seguridad/usuarioEx.class.php');
	include_once('../../clases/seguridad/auditaUsuario.class.php');
	include_once('../../clases/seguridad/permisoEx.class.php');
	include_once('../../clases/seguridad/ingreso.class.php');		

	
	include_once('../../clases/personal/legajopersonaex.class.php');
	
$funcion = new Funciones();

include_once ("seguridad.php");
include_once("../../clases/menu.class.php"); 
	
if($funcion->permControl(SISTEMABASE,58)) // Permiso para Acceder
{
	
?>

<title>EPAS - Sistema Control Vehículos</title>

  <!-- Favicons-->
 <!-- <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32"> -->

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
<!--  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="msapplication-TileColor" content="#00bcd4" />
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png" />-->
  <meta name="keywords" content="EPAS" />
  <meta name="description" content="Sistema EPAS" />
  <meta name="author" content="Depto Sistemas - EPAS" />
  <meta name="robots" content="NOINDEX,NOFOLLOW,NOARCHIVE,NOODP,NOSNIPPET" />
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

	<link href="../../externos/prism/prism.css" type="text/css" rel="stylesheet">
    <link href="../../externos/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">	

	
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="../clases/materialize/js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="../clases/materialize/js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="../../externos/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">	
	<!-- MENSAJES -->
  <link href="../../externos/sweetalert/dist/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- MENSAJES -->
	
<!-- HASTA AQUÍ PROBADOS -->	
	
<!--  <link href="../../externos/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">  
  <link href="../../externos/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <link href="../../externos/dropify/css/dropify.min.css" type="text/css" rel="stylesheet" media="screen,projection">  
    <link href="../../externos/magnific-popup/magnific-popup.css" type="text/css" rel="stylesheet" media="screen,projection">-->
</head>

<body>
  <!-- Inicio Mensaje de Carga -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- Fin Mensaje de Carga -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- Inicio Encabezado  -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color gradient-45deg-purple-deep-orange gradient-shadow">
               <div class="nav-wrapper">
				               <div class="header-search-wrapper hide-on-med-and-down sideNav-lock">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
            </div>
<!--                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="principal.php" class="brand-logo darken-1"><img src="images/logob.png" alt="EPAS" ></a> <span class="logo-text">EPAS</span></h1></li>
                    </ul>-->

            <ul class="right hide-on-med-and-down">
				              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge">5</small>
                  </i>
                </a>
              </li>
				
				
				
                 <li>
                <a href="#" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
					  <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    <!--<img src="../../images/avatar/avatar-7.png" alt="avatar">-->
                    <i></i>
                  </span>
                </a>
              </li>
				<li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>

			
            </ul>
 
				   
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=2" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Perfil</a>
              </li>
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=3" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Config</a>
              </li>
              <li>
                <a href="?S=<?php echo SISTEMABASE;?>&A=4" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Ayuda</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="logout.php" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Bloquear</a>
              </li>
              <li>
                <a href="logout.php" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Salir</a>
              </li>
            </ul>				   
                </div>
  			
            </nav>
        </div>
        <!-- end header nav-->
  </header>

  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
          <div class="brand-sidebar">
            <h1 class="logo-wrapper">
              <a href="#" class="brand-logo darken-1">
                <img src="images/logob.png" alt="EPAS">
                <span class="logo-text hide-on-med-and-down">EPAS</span>
              </a>
              <a href="#" class="navbar-toggler">
                <i class="material-icons">radio_button_checked</i>
              </a>
            </h1>
          </div>

		  
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
			

            <?php
			 	$menu = new muestraMenu();  
 				echo $menu->armaMenu(SISTEMABASE,$A,$SA,1);
			?>
         
        </ul>
        
<!--        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>-->
          <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">menu</i>
          </a>		  
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
       <section id="content">
          <!--breadcrumbs start-->
          <div id="breadcrumbs-wrapper" class=" grey lighten-3">
            <!-- Search for small screen -->
            <div class="header-search-wrapper grey lighten-2 hide-on-large-only">
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
            </div>
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title">Forms Validation</h5>
                  <ol class="breadcrumbs">
                    <li><a href="index-2.html">Dashboard</a>
                    </li>
                    <li><a href="#">Forms</a>
                    </li>
                    <li class="active">Forms Validation</li>
                  </ol>
                </div>
                <div class="col s2 m6 l6">
                  <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right gradient-45deg-light-blue-cyan gradient-shadow" href="#!" data-activates="dropdown1">
                    <i class="material-icons hide-on-med-and-up">settings</i>
                    <span class="hide-on-small-onl">Settings</span>
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
                  <ul id="dropdown1" class="dropdown-content">
                    <li><a href="#!" class="grey-text text-darken-2">Access<span class="badge">1</span></a>
                    </li>
                    <li><a href="#!" class="grey-text text-darken-2">Profile<span class="new badge">2</span></a>
                    </li>
                    <li><a href="#!" class="grey-text text-darken-2">Notifications</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--breadcrumbs end-->
          <!--start container-->
          <div class="container">
            <!--
              jQuery Validation Plugin
          -->
            <p class="caption">jQuery Validation Plugin</p>
            <p><a href="http://jqueryvalidation.org/" target="_blank">jQuery Validation</a> This jQuery plugin makes simple clientside form validation easy, whilst still offering plenty of customization options.</p>
            <div class="divider"></div>
            <!--jqueryvalidation-->
            <div id="jqueryvalidation" class="section">
              <div class="row">
                <div class="col s12 m12 l6">
                  <div class="card-panel">
                    <h4 class="header2">Validations example</h4>
                    <div class="row">
                      <form class="formValidate" id="formValidate" method="get" action="#">
                        <div class="row">
                          <div class="input-field col s12">
                            <label for="uname">Username*</label>
                            <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                            <div class="errorTxt1"></div>
                          </div>
                          <div class="input-field col s12">
                            <label for="cemail">E-Mail *</label>
                            <input id="cemail" type="email" name="cemail" data-error=".errorTxt2">
                            <div class="errorTxt2"></div>
                          </div>
                          <div class="input-field col s12">
                            <label for="password">Password *</label>
                            <input id="password" type="password" name="password" data-error=".errorTxt3">
                            <div class="errorTxt3"></div>
                          </div>
                          <div class="input-field col s12">
                            <label for="cpassword">Confirm Password *</label>
                            <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
                            <div class="errorTxt4"></div>
                          </div>
                          <div class="input-field col s12">
                            <label for="curl">URL *</label>
                            <input id="curl" type="url" name="curl" data-error=".errorTxt5">
                            <div class="errorTxt5"></div>
                          </div>
                          <div class="col s12">
                            <label for="crole">Role *</label>
                            <select class="error browser-default" id="crole" name="crole" data-error=".errorTxt6">
                              <option value="" disabled selected>Choose your profile</option>
                              <option value="1">Manager</option>
                              <option value="2">Developer</option>
                              <option value="3">Business</option>
                            </select>
                            <div class="input-field">
                              <div class="errorTxt6"></div>
                            </div>
                          </div>
                          <div class="input-field col s12">
                            <textarea id="ccomment" name="ccomment" class="materialize-textarea validate" data-error=".errorTxt7"></textarea>
                            <label for="ccomment">Your comment *</label>
                            <div class="errorTxt7"></div>
                          </div>
                          <div class="col s12">
                            <label for="genter_select">Gender *</label>
                            <p>
                              <input name="cgender" type="radio" id="gender_male" data-error=".errorTxt8" />
                              <label for="gender_male">Male</label>
                            </p>
                            <p>
                              <input name="cgender" type="radio" id="gender_female" value="f" />
                              <label for="gender_female">Female</label>
                            </p>
                            <div class="input-field">
                              <div class="errorTxt8"></div>
                            </div>
                          </div>
                          <div class="col s12">
                            <label for="tnc_select">T&C *</label>
                            <p>
                              <input type="checkbox" class="checkbox" id="cagree" name="cagree" data-error=".errorTxt9" />
                              <label for="cagree">Please agree to our policy</label>
                            </p>
                            <div class="input-field">
                              <div class="errorTxt6"></div>
                            </div>
                          </div>
                          <div class="input-field col s12">
                            <button class="btn waves-effect waves-light right submit" type="submit" name="action">Submit
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col s12 m12 l6">
                  <p>Simple jQuery Validation script to validate your form inputs.</p>
                  <pre class="language-javascript"><code class="language-javascript">
$("#formValidate").validate({
    rules: {
        uname: {
            required: true,
            minlength: 5
        },
        cemail: {
            required: true,
            email:true
        },
        password: {
    required: true,
    minlength: 5
  },
  cpassword: {
    required: true,
    minlength: 5,
    equalTo: "#password"
  },
  curl: {
            required: true,
            url:true
        },
        crole:"required",
        ccomment: {
    required: true,
    minlength: 15
        },
        cgender:"required",
  cagree:"required",
    },
    //For custom messages
    messages: {
        uname:{
            required: "Enter a username",
            minlength: "Enter at least 5 characters"
        },
        curl: "Enter your website",
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
     </code></pre>
                </div>
              </div>
            </div>
            <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
              <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                <i class="material-icons">add</i>
              </a>
              <ul>
                <li>
                  <a href="css-helpers.html" class="btn-floating blue">
                    <i class="material-icons">help_outline</i>
                  </a>
                </li>
                <li>
                  <a href="cards-extended.html" class="btn-floating green">
                    <i class="material-icons">widgets</i>
                  </a>
                </li>
                <li>
                  <a href="app-calendar.html" class="btn-floating amber">
                    <i class="material-icons">today</i>
                  </a>
                </li>
                <li>
                  <a href="app-email.html" class="btn-floating red">
                    <i class="material-icons">mail_outline</i>
                  </a>
                </li>
              </ul>
            </div>
            <!-- Floating Action Button -->
          </div>
          <!--end container-->
        </section>
  <!-- END CONTENT -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START RIGHT SIDEBAR NAV-->
  
  <!-- LEFT RIGHT SIDEBAR NAV-->

  </div>
  <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->



  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER -->

    <footer class="page-footer gradient-45deg-purple-deep-orange">
      <div class="footer-copyright">
        <div class="container">
          <span>Copyright ©
            <script type="text/javascript">
              document.write(new Date().getFullYear());
            </script> <a class="grey-text text-lighten-4" href="#" target="_blank">Departamento Sistemas EPAS</a> T.</span>
          <span class="right hide-on-small-only"> consultas: </span>
- 4234500 int:1239 <a class="grey-text text-lighten-4" href="mailto:acatapano@mendoza.gov.ar">acatapano@mendoza.gov.ar</a></span>
			
        </div>
      </div>
    </footer>	
  <!-- END FOOTER -->



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

	
	<!-- PROBADOS HASTA AQUI -->
	
	
<?php
//    <!--prism-->
//    <script type="text/javascript" src="../clases/materialize/js/plugins/prism/prism.js"></script>
//
//    <!-- data-tables -->
//    <script type="text/javascript" src="../clases/materialize/js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
//    <script type="text/javascript" src="../clases/materialize/js/plugins/data-tables/data-tables-script.js"></script>
//      
//    <!-- chartist -->
//  <!--cript type="text/javascript" src="../clases/materialize/js/plugins/chartist-js/chartist.min.js"></script> -->
//    <script type="text/javascript" src="../clases/materialize/js/plugins/formatter/jquery.formatter.min.js"></script> 
//    <!-- masonry -->
//    <script src="../clases/materialize/js/plugins/masonry.pkgd.min.js"></script>
//    <!-- imagesloaded -->
//    <script src="../clases/materialize/js/plugins/imagesloaded.pkgd.min.js"></script>    
//    <!-- magnific-popup -->
//    <script type="text/javascript" src="../clases/materialize/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>             
//
//
//	
//    <!-- dropify -->
//    <script type="text/javascript" src="../clases/materialize/js/plugins/dropify/js/dropify.min.js"></script>    	
//    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
//    <script type="text/javascript" src="../clases/materialize/js/plugins.min.js"></script>
//    <!--custom-script.js - Add your own theme custom JS-->
//    <script type="text/javascript" src="../clases/materialize/js/custom-script.js"></script>
 ?>
      
<!-- MENSAJES DE ALERTA CONFIRMACIÓN DE MENSAJES -->
<?php 
		 if(isset($alertaMensaje)){

		//******** Permite la validación de los formularios **************
			include('alertaMensaje.php');
		//******** Permite la validación de los formularios **************			
		 }
	
//<!-- MENSAJES DE ALERTA -->                                          
                  	
/*		 if(isset($dropifySet)){

		//******** Permite la validación de los formularios **************
			include('dropify-config.php');
		//******** Permite la validación de los formularios **************			
		 }	*/
		?>
        

   
         <!-- chartist -->
         <?php 
		print_r("VALIDAR=" .$validaFormulario);
		 if(isset($validaFormulario)){
			 ?>
			<!-- VERIFICACION -->
			<script type="text/javascript" src="../../externos/jquery-validation/jquery.validate.js"></script>
			<script type="text/javascript" src="../../externos/jquery-validation/additional-methods.js"></script> 
			<!-- VERIFICACION -->	
    	<?php 
		//******** Permite la validación de los formularios **************
			include('validaform.php');
		//******** Permite la validación de los formularios **************			
		 }
	
		if(isset($autoCompletaNombre)){
			echo $autoCompletaNombre;
		}
		?>
 		   

    </body>
    
    
<?php }else{
      session_destroy(); 
      header("Location: index.php?E=1&P=1"); 
	
}
?>
		<!--Mensajes -->
    	<script type="text/javascript" src="../../externos/sweetalert/dist/sweetalert.min.js"></script> 

   <?php
	echo (isset($mensajeMuestra))?$funcion->mensajeInformativo($mensajeMuestra):"";
	unset($mensajeMuestra);

	?>
    	<!--Mensajes -->

</html>